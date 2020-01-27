<?php

return [

    'role_mismatch_redirect' => '/home',
    
    'username_handler' => false,
    'password_validation_logic' => ['required', 'string', 'min:8', 'confirmed'],
    'username_validation_logic' => ['required', 'string', 'alpha_num',  'min:4', 'max:20', 'unique:users', 'confirmed'],
    'cp' => false,
    'cp_accessor_role' => 'admin',
    'roles' => false,
    'permissions' => false,

];
