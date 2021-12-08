<?php

namespace App\Providers;

use App\View\Composers\FooterCmsLinksComposer;
use App\View\Composers\NavComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('components.main-nav', NavComposer::class);
        View::composer('layout.footer', FooterCmsLinksComposer::class);
    }
}
