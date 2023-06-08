<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class NavbarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.navbarTwo', function ($view) {
            // Get the current route name
            $currentRoute = \Illuminate\Support\Facades\Route::currentRouteName();

            // Map route names to navbar titles
            $navbarTitles = [
                'dashboard' => 'Dashboard',
                'achievement' => 'Achievements',
                'profile.edit' => 'Edit Profile'
                // Add more route names and titles as needed
            ];

            // Get the navbar title based on the current route
            $navbarTitle = $navbarTitles[$currentRoute] ?? 'Default Title';

            // Share the navbar title with the view
            $view->with('navbarTitle', $navbarTitle);
        });
    }
}
