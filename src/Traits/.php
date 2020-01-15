<?php

namespace Ezoheux\App\Traits;

/**
 * The permission model trait.
 */
trait PermissionModel
{
    /** @var array $fillable The attributes that are mass assignable. */
    protected $fillable = [
        'slug', 'display', 'description',
    ];
}
