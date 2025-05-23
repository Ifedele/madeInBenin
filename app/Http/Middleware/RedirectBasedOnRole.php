<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectBasedOnRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()) {
            $user = Auth::user();

            if ($request->is('dashboard')|| $request->is('/')) {
                if ($user->hasRole('admin')) {
                    return redirect('/admin/dashboard');
                } elseif ($user->hasRole('vendeur')) {
                    return redirect()->route('vendeur.dashboard');
                }
            }
        }
        return $next($request);
    }
}
