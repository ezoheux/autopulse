<?php

namespace Ezoheux\App\Traits;

/**
 * The implements role functionality trait.
 */
trait ImplementsRoleFunctionality
{
    /**
     * Check to see if the user has a role.
     *
     * @param mixed $role The role to check against.
     *
     * @return bool Returns true if the user has role and false if not.
     */
    public function hasRole($role)
    {
        if (is_array($role)) {
            return null !== $this->roles()->whereIn('name', $role)->first();
        }
        return null !== $this->roles()->where('name', $role)->first();
    }
}
