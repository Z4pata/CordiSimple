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
        // The component is instantiated to display event details.
        Blade::component(class: 'modal-show-events', alias: 'modalShowEvents');
        // The component is instantiated to confirm the deletion.
        Blade::component(class: 'modal-delete-events', alias: 'modalDeleteEvents');
    }
}
