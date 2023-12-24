<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     * @return void
     */
    public function boot()
    {
        // Blade::component('x-input-label', \App\View\Components\InputLabel::class);
        // Blade::component('x-guest-layout', \App\View\Components\GuestLayout::class);
        // Blade::component('x-auth-session-status', \App\View\Components\AppLayout::class);
        
        //
    }
}
