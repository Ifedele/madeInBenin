<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share('errors', \Illuminate\Support\Facades\Session::get('errors') ?: new \Illuminate\Support\ViewErrorBag);
        require base_path('routes/breadcrumbs.php');
    }
}
