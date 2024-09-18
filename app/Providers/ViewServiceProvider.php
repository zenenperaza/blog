<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       
        View::share('prueba', 'Este es un mensaje de prueba');

        View::composer('welcome', function($view){

            $view->with('prueba2', 'esta es la 2da prueba');
            
        });
    }
}
