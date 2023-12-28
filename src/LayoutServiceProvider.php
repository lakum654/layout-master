<?php

namespace SevenTS\LayoutMaster;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LayoutServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load views
        $this->loadViewsFrom(__DIR__ . '/layouts', 'layout-master');
        $this->loadViewsFrom(__DIR__ . '/home', 'layout-master');

        // Publish views
        $this->publishes([
            __DIR__ . '/layouts' => resource_path('views/layouts'),
            __DIR__ . '/home' => resource_path('views/'),
            __DIR__ . '/providers' => app_path('Providers'),
            __DIR__ . '/routes' => base_path('routes'),
            __DIR__ . '/controllers' => app_path('Http/Controllers'),
        ], 'layouts');


        $this->publishes([
            __DIR__ . '/layouts' => resource_path('views/layouts'),
            __DIR__ . '/home' => resource_path('views/'),
        ], 'views');

        // Publish your custom routes file
        $this->publishes([
            __DIR__ . '/routes' => base_path('routes'),
            __DIR__ . '/providers' => app_path('Providers'),
            __DIR__ . '/controllers' => app_path('Http/Controllers'),
        ], 'routes');


        // Load the routes file if it's published
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/routes' => base_path('routes'),
            ], 'routes');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
