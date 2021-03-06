<?php

namespace DigiSac\Base;

//use Collective\Html\HtmlServiceProvider;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\ServiceProvider;
use DigiSac\Base\Providers\EventServiceProvider;
use DigiSac\Base\Providers\RouteServiceProvider;
use DigiSac\Base\Providers\RepositoryServiceProvider;
use DigiSac\Base\Providers\DigiSacAppServiceProvider;

class DigiSacCoreIntegrationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->register(DigiSacAppServiceProvider::class);
        $this->app->register(EventServiceProvider::class);
        //$this->app->register(HtmlServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
        $this->app->register(RepositoryServiceProvider::class);

    }
}
