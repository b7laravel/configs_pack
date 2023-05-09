<?php

namespace B7\Configs\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api_configs.php');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'configs-migrations');

        $this->publishes([
            __DIR__.'/../database/seeders/' => database_path('seeders')
        ], 'configs-seeders');

        $this->publishes([
            __DIR__.'/../Models/' => app_path('Models')
        ], 'configs-models');
    }
}
