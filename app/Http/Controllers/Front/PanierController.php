<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\Session;


class PanierController extends Controller
{
    public function ajouterAuPanier(Request $request, $produitId)
    {
        $produit = Produit::findOrFail($produitId); // Récupérer le produit depuis la base de données

        $panier = Session::get('panier', []);

        if (isset($panier[$produitId])) {
            $panier[$produitId]['qte']++;
        } else {
            $panier[$produitId] = [
                'nom' => $produit->nom,
                'prix' => $produit->prix,
                'qte' => 1,
            ];
        }

        Session::put('panier', $panier);

        return response()->json(['message' => 'Produit ajouté au panier avec succès', 'nombre_articles' => count($panier)]);
    }

    public function getContenuPanier(): JsonResponse
{
    $panier = Session::get('panier', []);
    $total = 0;
    $produits = [];

    foreach ($panier as $id => $details) {
        if (isset($details['nom']) && isset($details['qte']) && isset($details['prix'])) {
            $total += $details['prix'] * $details['qte'];
            $produits[] = [
                'id' => $id,
                'nom' => $details['nom'],
                'qte' => $details['qte'],
                'prix' => number_format($details['prix'], 2),
                'total_produit' => number_format($details['prix'] * $details['qte'], 2),
            ];
        }
    }

    return response()->json([
        'produits' => $produits,
        'total' => number_format($total, 2),
        'nombre_produits' => count($panier),
    ]);
}
}
