<?php

namespace App\Http\Controllers;
use App\Models\Categorie;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function create()
    {
        return view('admin.pages.Categorie.addCat');

    }
    public function index()
    {
        $categories = Categorie::all();
        // dd($categories);
        return view('admin.pages.Categorie.showCat', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'lib_cat'=>'required|string|max:255|unique:categories,lib_cat',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['lib_cat']);

        //upload de l'image
        if($request->hasFile('image')){
            // enregistrer l'image dans stokage/app/public/categorie
            $imagePath = $request->file('image')->store('categories', 'public');
            $data['image'] = $imagePath;
        }
        Categorie::create($data);
        //enregistrer la catégorie
        return redirect()
        ->back()
        ->with('success', 'Categorie enrégistrée avec succès');
    }

    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);

        return view('admin.pages.Categorie.editCat', compact('categorie'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'lib_cat'=>'required',
            'image'=>'nullable|image| mimes:jpeg, png, jpg, gif|max:2048'
        ]);

        $categorie = Categorie::find($id);
        $categorie->lib_cat = $request->lib_cat;

        if( $request->hasFile('image')){
            $imageName= time().'.'. $request->image->extension();
            $request->image->move(public_path('categories'), $imageName);
            $categorie->image = $imageName;
        }

        $categorie->save();
        return redirect()->route('categorie.show')->with('success','Catégorie mise à jour avec succès');
    }

    public function toggle ($id)
    { 
        dd('requete recu');
        $categorie = Categorie::findOrFail($id);
        $categorie->etat = !$categorie->etat; //0= desactivé, 1=activé inverser l'etat 1 devient 0 et 0 devient 1
       
        $categorie->save();

        return response()->json(['success'=>true,'status'=>$categorie->etat]);
    }


}
