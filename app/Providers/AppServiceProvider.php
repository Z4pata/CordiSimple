<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::component('status-events', 'statusEvents');
        Blade::component(class: 'modal-show-events', alias: 'modalShowEvents');
        Blade::component(class: 'modal-delete-events', alias: 'modalDeleteEvents');
    }
}
