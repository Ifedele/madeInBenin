<?php

namespace App\Http\Controllers\Vendeur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Notifications\AdminNotification;
use Illuminate\Support\Facades\Auth;


class ActivationController extends Controller
{
    public function showForm($token)
    {
        $user = User::where('activation_token',$token)->first();

        if(!$user){
            return redirect()->route('login')->withErrors(['token_invalid'=>'Ce lien est invalide ou a expiré.']);
        }
        return view('vendeur.pages.activation', ['token' => $token]);
    }

    public function processForm(Request $request, $token)
    {
        $validator = Validator::make($request->all(),[
            'password'=>'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()-> route('vendeur.activation',['token' =>$token])
                             -> withErrors($validator)
                             ->withInput();
        }

        $user =User::where('activation_token',$token)->first();

        if(!$user) {
            return redirect()->route('login')->withErrors(['token_invalid'=>'Ce lien est invalid ou a expiré.']);
        }

        $user->password = Hash::make($request->password);
        $user->activation_token = null;
        $user->save();


        // Notification à tous les administrateurs lorsque le vendeur finalise son inscription
    $adminUsers = User::whereHas('roles', function ($query) {
        $query->where('name', 'admin');
    })->get();

    $vendeurNom = $user->vendeur->nom ?? 'Inconnu';
    $vendeurPrenom = $user->vendeur->prenom ?? '';
    $notificationMessage = "Le vendeur " . $vendeurNom . " " . $vendeurPrenom . " a finalisé son inscription.";
    $detailsUrl = route('admin.vendeurShow', $user->vendeur->id ?? null);

    foreach ($adminUsers as $admin) {
        $admin->notify(new AdminNotification($notificationMessage, $detailsUrl));
    }
        return redirect()->route('login')->with('success', 'Votre compte a été activé avec succès. Vous pouvez maintenant vous connecter.');

    }
}
