<?php

namespace Shuklajasmin\Track\Console\Commands;

use Illuminate\Console\Command;

class ShuklajasminInstallCommand extends Command
{
    protected $signature = 'shuklajasmin:install';
    protected $description = 'Install the Shuklajasmin Email tracking package';

    public function handle()
    {
        // $this->info('Publishing configuration...');
        // $this->call('vendor:publish', [
        //     '--tag' => 'track-config',
        // ]);
        $this->info('📡 Publishing migrations...');
        $this->call('vendor:publish', [
            '--tag' => 'track-migrations',
        ]);


        $this->info('📷 Publishing assets...');
        $this->call('vendor:publish', [
            '--tag' => 'public',
        ]);

        // php artisan vendor:publish --tag=public

        $this->info('Running migrations...');
        $this->call('migrate');

        $this->info('✅ Shuklajasmin package installed successfully!');
    }
}
