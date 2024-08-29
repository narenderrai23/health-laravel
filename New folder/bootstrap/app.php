<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'user-access' => \App\Http\Middleware\UserAccess::class,
        ]);
        // $middleware->redirectGuestsTo(function (Request $request) {
        //     if ($request->routeIs('admin.*')) {
        //         return 'admin/login';
        //     }
        // });
        // $middleware->redirectUsersTo(function (Request $request) {
        //     if ($request->routeIs('admin.*')) {
        //         return 'admin/dashboard';
        //     }
        // });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
