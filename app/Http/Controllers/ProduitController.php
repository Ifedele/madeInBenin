<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use App\Models\Categorie;
use App\Models\Type;
use App\Models\Image;
use App\Models\SousCategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProduitController extends Controller
{
    #[Middleware('auth')]
    public function index()
    {
        $produits = Produit::where('id_vendeur' , Auth::id())->get();
        return view('vendeur.pages.produits.index', compact('produits'));
    }

    #[Middleware('auth')]
    public function create()
    {

        $user = auth()->user();
        $vendeur = $user->vendeur;
        // dd('$vendeur');
        if($vendeur){
            $id_vendeur=$vendeur;
            $sousCategories = SousCategorie::all();
        return view('vendeur.pages.produits.create', compact( 'sousCategories'));
        }else {
            dd("Aucun vendeur trouvé pour cet utilisateur");
        }
        // dd(Auth::check(), auth::id(), Auth::user());

    }

    #[Middleware('auth')]
    public function show($id)
    {
        $produit = Produit::with(['type', 'images'])->findOrFail($id);
        return view('vendeur.pages.produits.show', compact('produit'));
    }


    #[Middleware('auth')]
    public function store(Request $request)
    {
        $request->validate([
            'nom' =>'required|string|max:50',
            'description' =>'nullable|string',
            'prix' =>'required|numeric|min:0',
            'qte' =>'required|integer|min:1',
            'unite_mesure' =>'required|string',
            'statut' =>'required|in:disponible,epuise',
            'type' =>'required|string|max:50',
            'images.*' =>'image| mimes: jpeg,png,jpg,gif|max:2048'
        ]);

        $type=Type::firstOrCreate([
            'lib_type' =>$request->type,
            'id_sous_categorie'=> $request->id_sous_categorie
        ]);
        $produit = Produit::create([
            'nom' =>$request->nom,
            'description' =>$request->description,
            'prix' =>$request->prix,
            'qte' =>$request->qte,
            'unite_mesure' =>$request->unite_mesure,
            'statut' =>$request->statut,
            'id_vendeur' =>Auth::id(),
            'id_type' =>$type->id
        ]);
        if ($request->hasFile('images')) {
            foreach($request->file('images') as $image ){
                $path = $image->store('produits', 'public');

                Image::create([
                    'image_src' => $path,
                    'id_produit' =>$produit->id
                ]);
            }
        }
        return redirect()->route('produits.index')->with('success', 'produit ajouté avec success.');
    }

    #[Middleware('auth')]
    public function edit($id)
    {
        $produit = Produit::with(['type', 'images'])->find($id);
        $sousCategories = SousCategorie::all();
        return view('vendeur.pages.produits.edit', compact('produit', 'sousCategories'));
    }

    #[Middleware('auth')]
    public function update(Request $request, $id)
    {

        $request->validate([
            'nom' =>'required|string|max:50',
            'description' =>'nullable|string',
            'prix' =>'required|numeric|min:0',
            'qte' =>'required|integer|min:1',
            'unite_mesure' =>'required|string',
            'statut' =>'required|in: disponible, epuise',
            'id_sous_categorie' =>'required|exists: sous_categories,id',
            'type' =>'required|string|max:50',
            'images.*' =>'image| mimes: jpeg,png,jpg,gif|max:2048'
        ]);

        $type = Type::firstOrCreate([
            'lib_type' =>$request->type,
            'id_sous_categorie'=> $request->id_sous_categorie
        ]);
        $produit = Produit::findOrFail($id);
        $produit ->update([
            'nom' =>$request->nom,
            'description' =>$request->description,
            'prix' =>$request->prix,
            'qte' =>$request->qte,
            'unite_mesure' =>$request->unite_mesure,
            'statut' =>$request->statut,
            'id_vendeur' =>Auth::id(),
            'id_type' =>$type->id
        ]);

        if($request->hasFile('images')){
            foreach ($produit->images as  $image) {
                Storage::disk('public')->delete($image->image_src);
                $image->delete();
            }
             foreach ($request->file('images') as $image) {
               $path = $image->store('produits', 'public');
               Image::create([
                'image_src' =>$path,
                'id_produit' =>$produit->id
               ]);
             }
        }

        return redirect()->route('produits.index')->with('success', 'produit mis à jour.');
    }
    #[Middleware('auth')]
    public function destroy( $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();
        return redirect()->route('produits.index')->with('success','Produit supprimé.');
    }


}
