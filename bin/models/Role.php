<?php

namespace App;

use Ezoheux\App\Traits\ConnectsToPermissionsModel;
use Ezoheux\App\Traits\ConnectsToUsersModel;
use Ezoheux\App\Traits\RolesModel;
use Illuminate\Database\Eloquent\Model;

/**
 * The role model.
 */
class Role extends Model
{
    use RolesModel, ConnectsToUsersModel, ConnectsToPermissionsModel;
}
