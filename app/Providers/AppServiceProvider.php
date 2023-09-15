<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//agregar para la migración
use Illuminate\Support\Facades\Schema;

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
        //agregar para la migración
        Schema::defaultStringLength(191);
    }
}
