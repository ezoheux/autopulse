<?php

namespace Ezoheux\App\Authorization;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;

/**
 * The authorization handler.
 */
class Handler
{
    /**
     * Adds the authorization gates for the role functionality.
     *
     * @return void Returns nothing.
     */
    public static function AddRoleGates()
    {
        $roles = Role::all();
        foreach ($roles as $role) {
            Gate::define("role-{$role->slug}", function (User $user) {
                if ($user->hasRole($role->slug)) {
                    return true;
                }
                return false;
            });
        }
    }
}
