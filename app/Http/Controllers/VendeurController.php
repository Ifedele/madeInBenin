<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VendeurController extends Controller
{
    public function index()
    {
        $vendeurId = Auth::id();

        $totalProduits = Produit::where('id_vendeur', $vendeurId)->count();
        $totalCommandes = Commande::whereHas('produits', function ($query) use ($vendeurId) {
            $query->where('id_vendeur', $vendeurId);
        })->count();

        // Calcul de la variation du nombre de produits
        $debutMoisActuel = Carbon::now()->startOfMonth();
        $finMoisActuel = Carbon::now()->endOfMonth();
        $totalProduitsMoisActuel = Produit::where('id_vendeur', $vendeurId)
            ->whereBetween('created_at', [$debutMoisActuel, $finMoisActuel])
            ->count();

        $debutMoisPrecedent = Carbon::now()->subMonth()->startOfMonth();
        $finMoisPrecedent = Carbon::now()->subMonth()->endOfMonth();
        $totalProduitsMoisPrecedent = Produit::where('id_vendeur', $vendeurId)
            ->whereBetween('created_at', [$debutMoisPrecedent, $finMoisPrecedent])
            ->count();

        $variationProduits = $totalProduitsMoisActuel - $totalProduitsMoisPrecedent;
        $pourcentageVariationProduits = ($totalProduitsMoisPrecedent != 0) ? ($variationProduits / $totalProduitsMoisPrecedent) * 100 : ($variationProduits > 0 ? '∞' : ($variationProduits < 0 ? '-∞' : 0));

        // Calcul de la variation du nombre de commandes
        $totalCommandesMoisActuel = Commande::whereHas('produits', function ($query) use ($vendeurId) {
            $query->where('id_vendeur', $vendeurId);
        })
        ->whereBetween('commandes.created_at', [$debutMoisActuel, $finMoisActuel]) // Assurez-vous que la colonne created_at est sur la table commandes
        ->count();

        $totalCommandesMoisPrecedent = Commande::whereHas('produits', function ($query) use ($vendeurId) {
            $query->where('id_vendeur', $vendeurId);
        })
        ->whereBetween('commandes.created_at', [$debutMoisPrecedent, $finMoisPrecedent]) // Assurez-vous que la colonne created_at est sur la table commandes
        ->count();

        $variationCommandes = $totalCommandesMoisActuel - $totalCommandesMoisPrecedent;
        $pourcentageVariationCommandes = ($totalCommandesMoisPrecedent != 0) ? ($variationCommandes / $totalCommandesMoisPrecedent) * 100 : ($variationCommandes > 0 ? '∞' : ($variationCommandes < 0 ? '-∞' : 0));


        // Récupérer les ventes par mois
        $ventesParMois = Commande::whereHas('produits', function ($query) use ($vendeurId) {
            $query->where('id_vendeur', $vendeurId);
        })
        ->select(DB::raw('DATE_FORMAT(commandes.created_at, "%Y-%m") as date'), DB::raw('SUM(commandes.montant) as total_ventes'))
        ->groupBy('date')
        ->orderBy('date')
        ->get();

        // Récupérer les produits les plus commandés
        $produitsPlusCommandes = DB::table('details_commandes')
            ->join('produits', 'details_commandes.id_produit', '=', 'produits.id')
            ->where('produits.id_vendeur', $vendeurId)
            ->select('produits.nom', DB::raw('COUNT(details_commandes.id_produit) as nombre_commandes'))
            ->groupBy('produits.id', 'produits.nom')
            ->orderByDesc('nombre_commandes')
            ->limit(5)
            ->get();

        return view('vendeur.pages.index', [
            'totalProduits' => $totalProduits,
            'totalCommandes' => $totalCommandes,
            'ventesParMois' => json_encode($ventesParMois),
            'produitsPlusCommandes' => $produitsPlusCommandes,
            'variationProduits' => $variationProduits,
            'pourcentageVariationProduits' => $pourcentageVariationProduits,
            'variationCommandes' => $variationCommandes,
            'pourcentageVariationCommandes' => $pourcentageVariationCommandes,
        ]);
    }

}
