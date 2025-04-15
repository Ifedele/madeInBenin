<?php

namespace App\Http\Controllers;
use App\Models\SousCategorie;
use App\Models\Categorie;
use Illuminate\Http\Request;

class SousCategorieController extends Controller
{
    public function index()
    {
        $sousCategories = SousCategorie::with('categorie')->get();
        return view('admin.pages.SousCategorie.index', compact('sousCategories'));
    }
    public function create()
    {
        $categories= Categorie::all();
        return view('admin.pages.SousCategorie.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'lib_sous_cat'=>'required|string|max:255',
            'id_categorie'=>'required|exists:categories,id'
        ]);
        SousCategorie::create($request->all());
        return redirect()->route('sousCategorie.index')->with('success', 'Sous-catégorie ajoutée!');
    }
    public function edit($id)
    {
        $sousCategorie = SousCategorie::findOrFail($id);
        $categories = Categorie::all();
        return view('admin.pages.SousCategorie.edit', compact('sousCategorie', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
        'lib_sous_cat' => 'required|string|max:255',
        'id_categorie' => 'required|exists:categories,id'
        ]);
        $sousCategorie = SousCategorie::findOrFail($id);
        $sousCategorie->update($request->all());
        return redirect()->route('sousCategorie.index')->with('success', 'Sous-catégorie mise à jour!');

    }

    public function fetch(Request $request)
    {
        $data['sous_categories']=Poste::where('id_categorie', $request->id_categorie)->get(['lib_sous_cat','id']);
        return response()->json($data);
    }
    // public function getByCategorie($id_categorie)
    // {
    //     $sousCategories = SousCategorie::where('id_categorie', $id_categorie)->get();
    //     dd($id_categorie);
    //     return response()->json($sousCategories);

    //     if($sousCategories->isEmpty()){
    //         return response()->json(['message'=>'Aucune so us_catégorie trouvée'], 404);
    //     }
    // }


    public function toggle($id)
    {
        $sousCategorie = SousCategorie::findOrFail($id);
        $sousCategorie->etat = !$sousCategorie->etat;
        $sousCategorie->save();
        return redirect()->route('sousCategorie.index')->with('success', 'Statut mis à jour.');
    }
}
