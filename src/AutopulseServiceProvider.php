<?php

namespace Ezoheux\App;

use Illuminate\Support\ServiceProvider;

/**
 * The autopulse service provider.
 */
class AutopulseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void Returns nothing.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../bin/migrations');
        $this->publishes([
            __DIR__ . '/../bin/config/autopulse.php' => config_path('autopulse.php'),
        ]);
    }
}
