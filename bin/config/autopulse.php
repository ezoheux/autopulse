<?php

return [

    'username_handler' => false,

    'username_validation_logic' => ['required', 'string', 'alpha_num',  'min:4', 'max:20', 'unique:users', 'confirmed'],

];
