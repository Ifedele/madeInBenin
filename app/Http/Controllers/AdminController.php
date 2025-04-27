<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth; // N'oubliez pas d'importer la classe Auth


class AdminController extends Controller
{
    public function index()
    {
        $admin = Auth::user();
        $notifications = $admin->unreadNotifications()->orderBy('created_at', 'desc')->get();

        // Définir les noms des rôles pour vendeur et acheteur.
        $vendeurRoleName = 'vendeur';
        $acheteurRoleName = 'acheteur';

        // Récupérer le nombre total de vendeurs
        $totalVendeurs = User::whereHas('roles', function ($query) use ($vendeurRoleName) {
            $query->where('name', $vendeurRoleName);
        })->count();

        // Récupérer le nombre total d'acheteurs
        $totalAcheteurs = User::whereHas('roles', function ($query) use ($acheteurRoleName) {
            $query->where('name', $acheteurRoleName);
        })->count();

        // Calcul des variations pour les vendeurs
        $now = Carbon::now();
        $debutMoisActuelVendeurs = $now->startOfMonth()->toDateString();
        $finMoisActuelVendeurs = $now->endOfMonth()->toDateString();
        $vendeursMoisActuel = User::whereHas('roles', function ($query) use ($vendeurRoleName) {
            $query->where('name', $vendeurRoleName);
        })->whereBetween('created_at', [$debutMoisActuelVendeurs, $finMoisActuelVendeurs])->count();

        $debutMoisPrecedentVendeurs = $now->subMonth()->startOfMonth()->toDateString();
        $finMoisPrecedentVendeurs = $now->endOfMonth()->toDateString();
        $vendeursMoisPrecedent = User::whereHas('roles', function ($query) use ($vendeurRoleName) {
            $query->where('name', $vendeurRoleName);
        })->whereBetween('created_at', [$debutMoisPrecedentVendeurs, $finMoisPrecedentVendeurs])->count();

        $variationVendeurs = $vendeursMoisActuel - $vendeursMoisPrecedent;
        $pourcentageVariationVendeurs = ($vendeursMoisPrecedent != 0) ? ($variationVendeurs / $vendeursMoisPrecedent) * 100 : ($variationVendeurs > 0 ? '∞' : ($variationVendeurs < 0 ? '-∞' : '0'));

        // Calcul des variations pour les acheteurs
        $now = Carbon::now(); // Réinitialiser Carbon
        $debutMoisActuelAcheteurs = $now->startOfMonth()->toDateString();
        $finMoisActuelAcheteurs = $now->endOfMonth()->toDateString();
        $acheteursMoisActuel = User::whereHas('roles', function ($query) use ($acheteurRoleName) {
            $query->where('name', $acheteurRoleName);
        })->whereBetween('created_at', [$debutMoisActuelAcheteurs, $finMoisActuelAcheteurs])->count();

        $debutMoisPrecedentAcheteurs = $now->subMonth()->startOfMonth()->toDateString();
        $finMoisPrecedentAcheteurs = $now->endOfMonth()->toDateString();
        $acheteursMoisPrecedent = User::whereHas('roles', function ($query) use ($acheteurRoleName) {
            $query->where('name', $acheteurRoleName);
        })->whereBetween('created_at', [$debutMoisPrecedentAcheteurs, $finMoisPrecedentAcheteurs])->count();

        $variationAcheteurs = $acheteursMoisActuel - $acheteursMoisPrecedent;
        $pourcentageVariationAcheteurs = ($acheteursMoisPrecedent != 0) ? ($variationAcheteurs / $acheteursMoisPrecedent) * 100 : ($variationAcheteurs > 0 ? '∞' : ($variationAcheteurs < 0 ? '-∞' : '0'));

        // Récupérer les données d'inscription des vendeurs par mois pour le graphique
        $vendeurInscriptionsParMois = User::whereHas('roles', function ($query) use ($vendeurRoleName) {
            $query->where('name', $vendeurRoleName);
        })
            ->select(DB::raw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as count'))
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get()
            ->map(function ($item) {
                return [
                    'date' => sprintf('%d-%02d', $item->year, $item->month),
                    'count' => $item->count,
                ];
            })
            ->toJson(); // Convertir en JSON pour JavaScript

        // Récupérer les données d'inscription des acheteurs par mois pour le graphique
        $acheteurInscriptionsParMois = User::whereHas('roles', function ($query) use ($acheteurRoleName) {
            $query->where('name', $acheteurRoleName);
        })
            ->select(DB::raw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as count'))
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get()
            ->map(function ($item) {
                return [
                    'date' => sprintf('%d-%02d', $item->year, $item->month),
                    'count' => $item->count,
                ];
            })
            ->toJson(); // Convertir en JSON pour JavaScript

        return view('admin.pages.index', [
            'totalVendeurs' => $totalVendeurs,
            'totalAcheteurs' => $totalAcheteurs,
            'variationVendeurs' => $variationVendeurs,
            'pourcentageVariationVendeurs' => $pourcentageVariationVendeurs,
            'variationAcheteurs' => $variationAcheteurs,
            'pourcentageVariationAcheteurs' => $pourcentageVariationAcheteurs,
            'vendeurInscriptionsParMois' => $vendeurInscriptionsParMois,
            'acheteurInscriptionsParMois' => $acheteurInscriptionsParMois,
            'notifications' => $notifications, // Passer la variable notifications à la vue
        ]);
    }

    // public function show()
    // {
    //     return view('front.pages.index');
    // }
}
