<?php

return [

    'username_handler' => false,
    'password_validation_logic' => ['required', 'string', 'min:8', 'confirmed'],
    'username_validation_logic' => ['required', 'string', 'alpha_num',  'min:4', 'max:20', 'unique:users', 'confirmed'],

];
