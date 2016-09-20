<?php

namespace Procivam\News;

use Illuminate\Support\ServiceProvider;

class NewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }

        $this->loadViewsFrom(__DIR__.'/views', 'news');

        // Publish views
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/news'),
        ], 'views');

        // Publish public
        $this->publishes([
            __DIR__.'/assertions/js' => public_path('js'),
        ], 'scripts');

         $this->publishes([
            __DIR__.'/assertions/css' => public_path('css'),
         ], 'styles');

         $this->publishes([
             __DIR__.'/public_controllers' => app_path('Http/Controllers'),
         ], 'controllers');

         // Load migrations
         $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
