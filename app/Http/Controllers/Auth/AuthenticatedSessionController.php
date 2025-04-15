<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\AuthServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{


    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */


     public function store(LoginRequest $request)
    {
        $credentials=$request->only('email', 'password');

        $request->validate([
            'email' =>['required', 'email'],
            'password' =>['required'],
        ]);

        if(Auth::attempt($credentials)) {
            request()->session()->regenerate();

            $user = Auth::user();
            // dd($user);
            //Redirection
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard');

            } elseif($user->hasRole('vendeur')) {
                return redirect()->route('vendeur.dashboard');

            } else {
                return redirect('/');
            }
        }
        return back()->withError([
            'email' =>'Emaill ou mot de passe incorect.',
        ]);
    }



    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
