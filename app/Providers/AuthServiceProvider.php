<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Event;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Event::listen(Login::class, function (Login $event) {
            $user = $event->user;

            if($user->hasRole('admin')){
                session(['intended_url' =>route('admin.dashboard')]);
            }elseif ($user->hasRole('user')) {
                session(['intended_url'=>route('vendeur.dashboard')]);
            }
        });
    }
}
