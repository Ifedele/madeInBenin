<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth' =>\App\Http\Middleware\Authenticate::class,
            'auth.basic' =>\Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
            'auth.session' =>\Illuminate\Session\Middleware\AuthenticatedSession::class,

            'role' =>\App\Http\Middleware\CheckRole::class,
            'redirect.role' =>\App\Http\Middleware\RedirectBasedOnRole::class,
        ]);

        $middleware->group('web',[
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

    $app->routeMiddleware([
        'role'=>\App\Http\Middleware\RoleMiddleware::class,
    ])

    ->withProvider([
        App\Providers\AuthServiceProvider::class,
    ]);

    $app->middleware([
        \Illuminate\Session\Middleware\StartSession::class,
    ]);
