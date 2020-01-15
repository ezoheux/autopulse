<?php

namespace Ezoheux\App\Traits;

/**
 * The connects to roles model trait.
 */
trait ConnectsToRolesModel
{
    /**
     * The relationship between the role model.
     *
     * @return mixed Returns the relationship.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
}
