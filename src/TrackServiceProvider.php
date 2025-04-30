<?php

namespace Shuklajasmin\Track;

use Illuminate\Support\ServiceProvider;
use Shuklajasmin\Track\Console\Commands\ShuklajasminInstallCommand;

class TrackServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/database/migrations' => database_path('migrations')
        ], 'shukla-jasmin-migrations');

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->publishes([
            __DIR__.'/resources/assets' => public_path('vendor/shuklajasmin'),
        ], 'public');

    }


    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->commands([
            ShuklajasminInstallCommand::class,
        ]);
        
        $this->mergeConfigFrom(
            __DIR__.'/../config/trackablemail.php', 'trackablemail'
        );
    }

}

?>
