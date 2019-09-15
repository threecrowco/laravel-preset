<?php

namespace ThreeCrowCo\LaravelPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class PresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PresetCommand::macro('threecrowco', function ($command) {
            Preset::install();

            $command->info('Tailwind CSS scaffolding installed successfully.');
            $command->info('Please run "yarn && yarn run dev" to compile your fresh scaffolding.');
        });
    }
}
