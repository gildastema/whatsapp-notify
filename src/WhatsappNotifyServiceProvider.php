<?php

namespace Artisanpay\WhatsappNotify;

use Illuminate\Support\ServiceProvider;

class WhatsappNotifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('whatsapp.php'),
            ], 'config');

        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'whatsapp');

        // Register the main class to use with the facade
        $this->app->singleton('whatsapp', function () {
            return new WhatsappNotify;
        });
    }
}
