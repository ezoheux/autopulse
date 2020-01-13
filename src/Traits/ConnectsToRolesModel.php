<?php

namespace Ezoheux\App\Traits;

/**
 * The connects to roles model trait.
 */
trait ConnectsToRolesModel
{
    /** @var array $fillable The attributes that are mass assignable. */
    protected $fillable = [
        'slug', 'display', 'description',
    ];

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
