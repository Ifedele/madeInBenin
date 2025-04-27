<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;


class UserController extends Controller
{

    public function vendeurs()
    {
       $vendeurs = User::whereHas('roles', function ($q) {
        $q->where('name','vendeur');
       })
       ->with('vendeur')
       ->get();
       return view('admin.pages.Utilisateurs.vendeur', compact('vendeurs'));
    }

    public function acheteurs()
    {
       $acheteurs = User::whereHas('roles', function ($q) {
        $q->where('name','acheteur');
       })
       ->with('acheteur')
       ->get();
       return view('admin.pages.Utilisateurs.acheteur', compact('acheteurs'));

    }

    public function showVendeur( User $user)
    {
       $user->load('vendeur');
       return view('admin.pages.utilisateurs.vendeurShow', compact('user'));
    }

    public function showAcheteur( User $user)
    {
       $user->load('acheteur');
       return view('admin.pages.utilisateurs.acheteurShow', compact('user'));
    }

    public function exportVendeursPdf()
    {
        $vendeurs = User::whereHas('roles', function($q){
            $q->where('name', 'vendeur');
        })->with('vendeur')->get();

        $pdf = Pdf::loadView('admin.pages.utilisateurs.vendeurPdf', compact('vendeurs'));
        return $pdf->download('liste_vendeurs.pdf');
    }

    public function exportAcheteursPdf()
    {
        $acheteurs = User::whereHas('roles', function($q){
            $q->where('name', 'acheteur');
        })->with('acheteur')->get();

        $pdf = Pdf::loadView('admin.pages.utilisateurs.acheteurPdf', compact('acheteurs'));
        return $pdf->download('liste_acheteurs.pdf');
    }


}
