<?php

namespace Ezoheux\App\Traits;

/**
 * The connects to permissions model trait.
 */
trait ConnectsToPermissionsModel
{
    /**
     * The relationship between the permission model.
     *
     * @return mixed Returns the relationship.
     */
    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }
}
