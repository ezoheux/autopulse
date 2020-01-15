<?php

class Autopulse
{
    public static function routes()
    {
        
        if (config('autopulse.username_handler', false)) {
            Route::get('/account/username', 'Autopulse\UsernameController@show')->name('username.handler');
            Route::post('/account/username', 'Autopulse\UsernameController@update')->name('username.handler.update');
        }
    }
}
