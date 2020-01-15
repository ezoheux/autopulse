<?php

namespace App;

use Ezoheux\App\Traits\ConnectsToRolesModel;
use Ezoheux\App\Traits\PermissionsModel;
use Illuminate\Database\Eloquent\Model;

/**
 * The Permission model.
 */
class Permission extends Model
{
    use PermissionsModel, ConnectsToRolesModel;
}
