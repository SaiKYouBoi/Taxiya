<?php

use App\Http\Middleware\HasTaxi;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsDriver;
use App\Http\Middleware\IsTraveler;
use App\Http\Middleware\IsValidated;
use App\Http\Middleware\NoTaxi;
use App\Http\Middleware\NoValidation;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'driver' => IsDriver::class,
            'hasTaxi' => HasTaxi::class,
            'traveler' => IsTraveler::class,
            'admin' => IsAdmin::class,
            'isValidated' => IsValidated::class,
            'noTaxi' => NoTaxi::class,
            'noValidation' => NoValidation::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();