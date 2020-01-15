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
        $this->loadTranslationsFrom(__DIR__.'/path/to/translations', 'autopulse');
        $this->publishes([
            __DIR__ . '/../bin/config/autopulse.php' => config_path('autopulse.php'),
            __DIR__ . '/../bin/translations' => resource_path('lang/vendor/courier'),
            __DIR__ . '/../bin/controllers' => app_path('Http/Controllers'),
            __DIR__ . '/../bin/models' => app_path(),
        ]);
    }
}
