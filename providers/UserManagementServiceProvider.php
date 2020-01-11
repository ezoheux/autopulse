<?php

namespace Ezoheux\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * The user management service provider.
 */
class UserManagementServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void Returns nothing.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/user-management.php' => config_path('user-management.php'),
        ]);
    }
}
