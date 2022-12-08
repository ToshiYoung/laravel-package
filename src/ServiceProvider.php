<?php

namespace ToshiYoung\SamplePackage;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{

    /**
     * Register services.
     */
    public function register()
    {
        $this->app->singleton(SamplePackage::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->offerPublishing();
        $this->registerCommands();
    }

    protected function offerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

            $this->publishes([
                __DIR__ . '/../config/example.php' => config_path('example.php'),
            ]);
        }
    }

    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([

            ]);
        }
    }
}
