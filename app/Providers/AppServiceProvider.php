<?php

// namespace App\Providers;

// use Illuminate\Cache\RateLimiting\Limit;
// use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\RateLimiter;
// use Illuminate\Support\Facades\Route;

// class RouteServiceProvider extends ServiceProvider
// {
//     // ...

//     /**
//      * The path to the "home" route for your application.
//      *
//      * This is used by Laravel authentication to redirect users after login.
//      *
//      * @var string
//      */
//     public const HOME = '/main-menu';

//     // ...
// }



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
        //
    }
}
