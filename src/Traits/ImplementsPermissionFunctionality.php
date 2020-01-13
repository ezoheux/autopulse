<?php

namespace Ezoheux\App\Traits;

/**
 * The implements permission functionality trait.
 */
trait ImplementsPermissionFunctionality
{
    /**
     * Check to see if the user has a permission.
     *
     * @param mixed $permission The permission to check against.
     *
     * @return bool Returns true if the user has permission and false if not.
     */
    public function hasPermission($permission)
    {
        if (is_array($role)) {
            return null !== $this->roles()->permissions()->whereIn('name', $permission)->first();
        }
        return null !== $this->roles()->permissions()->where('name', $permission)->first();
    }
}
