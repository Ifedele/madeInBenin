<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendeur;
use App\Models\Produit;

class VendeurViewController extends Controller
{
    public function index()
    {
        $vendeurs = Vendeur::with(['produits' => function ($query) {
            $query->inRandomOrder()->limit(3)->with('images');
        }])->get();

        return view('front.pages.vendeur', compact('vendeurs'));
    }

    public function view($id)
    {
        $vendeur = Vendeur::with(['produits' =>function ($query) {
            $query->with('images');
        }])->findOrFail($id);
        return view('front.pages.vendeurview', compact('vendeur'));
    }
}
