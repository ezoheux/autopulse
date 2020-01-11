<?php

namespace Ezoheux\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * The account service provider.
 */
class AccountServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void Returns nothing.
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../translations/account', 'account');
        $this->publishes([
            __DIR__ . '/../translations/account' => resource_path('lang/vendor/courier'),
        ]);
    }
}
