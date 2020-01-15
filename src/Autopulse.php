<?php

namespace Ezoheux\App;

/**
 * The main autopulse handler.
 */
class Autopulse
{
    /**
     * Run the autopulse route.
     *
     * @return void Returns nothing.
     */
    public static function routes()
    {
        Route::get('/account/password', 'Autopulse\PasswordController@show')->name('password.handler');
        Route::post('/account/password', 'Autopulse\PasswordController@update')->name('password.handler.update');
        if (config('autopulse.username_handler', false)) {
            Route::get('/account/username', 'Autopulse\UsernameController@show')->name('username.handler');
            Route::post('/account/username', 'Autopulse\UsernameController@update')->name('username.handler.update');
        }
    }
}
