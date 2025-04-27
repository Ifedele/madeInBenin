<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $period = $request->input('period', 'week'); // Récupère la période depuis la requête (par défaut: 'week')

        $startDate = null;

        switch ($period) {
            case 'month':
                $startDate = Carbon::now()->subMonth();
                break;
            case 'year':
                $startDate = Carbon::now()->subYear();
                break;
            default: // week
                $startDate = Carbon::now()->subWeek();
                break;
        }

        $topSellers = User::whereHas('vendeur.commandes.livraison', function ($query) use ($startDate) {
            $query->where('livraisons.statut_livraison', 'effectuee');
            if ($startDate) {
                $query->where('livraisons.date_livraison', '>=', $startDate);
            }
        })
            ->withCount(['vendeur.commandes.livraison' => function ($query) use ($startDate) {
                $query->where('livraisons.statut_livraison', 'effectuee');
                if ($startDate) {
                    $query->where('livraisons.date_livraison', '>=', $startDate);
                }
            }])
            ->orderByDesc('vendeur_commandes_livraison_count')
            ->take(9)
            ->get();

        return view('front.pages.index', compact('topSellers', 'period'));
    }
}
