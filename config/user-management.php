<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Username Handler
    |--------------------------------------------------------------------------
    |
    | This value determines if a user is allowed to change their own username,
    | this is useful when a user wants to change his username to something he
    | likes better than his previous username.
    |
    */

    'username_handler' => env('USERNAME_HANDLER', true),

    /*
    |--------------------------------------------------------------------------
    | Password Handler
    |--------------------------------------------------------------------------
    |
    | This value determines if a user is allowed to change their own password,
    | this is useful when the user feels his password is not strong enough and
    | wants to change the password himself.
    |
    */

    'password_handler' => env('PASSWORD_HANDLER', true),

];
