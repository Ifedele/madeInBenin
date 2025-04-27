<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;
use App\Models\SousCategorie;
use App\Models\Type;

class ExploreController extends Controller
{
    public function index(Request $request)
    {
        $produits = Produit::query();

        // Filtrage par nom de produit
        if ($request->filled('search_produit')) {
            $produits->where('nom', 'like', '%' . $request->search_produit . '%');
        }

        // Filtrage par catégorie
        if ($request->filled('categorie_filter')) {
            $produits->where('id_categorie', $request->categorie_filter);
        }

        // Filtrage par sous-catégorie
        if ($request->filled('sous_categorie_filter')) {
            $produits->where('id_sous_categorie', $request->sous_categorie_filter);
        }

        // Filtrage par type
        if ($request->filled('type_filter')) {
            $produits->where('id_type', $request->type_filter);
        }

        $produits = $produits->paginate(9)->withQueryString();
        $categories = Categorie::all();
        $sousCategories = SousCategorie::all();
        $types = Type::all();

        $aucunProduit = $produits->isEmpty(); // Ajouter cette ligne pour vérifier si aucun produit n'a été trouvé

        return view('front.pages.explore', compact('produits', 'categories', 'sousCategories', 'types', 'aucunProduit')); // Ajouter 'aucunProduit' au compact
    }
}
