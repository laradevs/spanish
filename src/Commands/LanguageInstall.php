<?php

namespace LaraDevs\Spanish\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class LanguageInstall extends Command
{
    protected $signature = 'laradevs:spanish';
    protected $description = 'Install files with content spanish';

    public function handle()
    {
        Artisan::call('vendor:publish' , [
            '--provider' => 'LaraDevs\Spanish\SpanishServiceProvider'
        ]);
        
        $this->info('Spanish installed successes.');
    }
}
