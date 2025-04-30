<?php

namespace shukaljasmin\Track;

use Illuminate\Support\ServiceProvider;

class TrackableMailServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish config, views, etc.
        $this->publishes([
            __DIR__.'/../config/trackablemail.php' => config_path('trackablemail.php'),
        ], 'trackablemail-config');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations')
        ], 'shukla-jasmin-migrations');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/trackablemail.php', 'trackablemail'
        );
    }
}
