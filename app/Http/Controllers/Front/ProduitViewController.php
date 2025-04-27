<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;

use App\Models\Vendeur;



class ProduitViewController extends Controller
{
    public function view($id)
    {
        $produit = Produit::with('vendeur','images')->findOrFail($id);
        return view('front.pages.produit',compact('produit'));

    }
}
