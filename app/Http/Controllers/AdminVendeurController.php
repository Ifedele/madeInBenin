<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Vendeur;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use App\Mail\VendeurInvitation;

class AdminVendeurController extends Controller
{
    public function create()
    {
        return view('admin.pages.Utilisateurs.vendeurCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'email'=>'required|email|unique:users,email',
            'telephone'=>'required|string',
        ]);

        $user = User::create([
            'email'=>$request->email,
            'password'=>bcrypt(Str::random(10)),
            'activation_token'=>Str::random(64),
        ]);

        Vendeur::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'telephone'=>$request->telephone,
            'idUser'=>$user->id,
        ]);

        $user->roles()->attach(Role::where('name','vendeur')->first());

        $lien = URL::temporarySignedRoute(
           'vendeur.activation',
            now()->addMinutes(60),
            ['token'=>$user->activation_token]
        );dd($lien);

        Mail::to($user->email)->send(new VendeurInvitation($user, $lien));

        return redirect()->route('admin.vendeurs')->with('success', 'Vendeur ajouté et invitaion envoyé.');

    }
}
