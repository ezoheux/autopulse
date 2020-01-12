<?php

namespace Ezoheux\App\Traits;

/**
 * The connects to users model trait.
 */
trait ConnectsToUsersModel
{
    /** @var array $fillable The attributes that are mass assignable. */
    protected $fillable = [
        'slug', 'display', 'description',
    ];

    /**
     * The relationship between the user model.
     *
     * @return mixed Returns the relationship.
     */
    public function roles()
    {
        return $this->belongsToMany('App\User');
    }
}
