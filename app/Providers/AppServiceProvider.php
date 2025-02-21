<?php

namespace App\Providers;

use App\Services\WebsiteService;
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
        View()->composer( '*', function ( $view ) {
            $view->with( 'config', (new WebsiteService())->fetchConfig() );
            $view->with( 'menus', (new WebsiteService())->fetchMenu() );
        } );
    }
}
