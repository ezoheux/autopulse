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
        Route::prefix('/account')->middleware(['password.confirm'])->group(function () {
            Route::get('/account/password', 'Autopulse\PasswordController@show')->name('password.handler');
            Route::post('/account/password', 'Autopulse\PasswordController@update')->name('password.handler.update');
            if (config('autopulse.username_handler', false)) {
                Route::get('/account/username', 'Autopulse\UsernameController@show')->name('username.handler');
                Route::post('/account/username', 'Autopulse\UsernameController@update')->name('username.handler.update');
            }
        )};
        if (config('autopulse.cp', false)) {
            Route::prefix('/cp')->middleware(['password.confirm'])->group(function () {
                if (config('autopulse.roles', false)) {
                    Route::resource('/roles', 'Autopulse\RoleController');
                }
                if (config('autopulse.permissions', false);
                    Route::resource('/permissions', 'Autopulse\PermissionController');
                }
            )};
        }
    }
}
