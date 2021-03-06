<?php

namespace Ezoheux\App\Traits;

/**
 * The connects to users model trait.
 */
trait ConnectsToUsersModel
{
    /**
     * The relationship between the user model.
     *
     * @return mixed Returns the relationship.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
