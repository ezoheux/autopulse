<?php

namespace Ezoheux\App\Traits;

/**
 * The role model trait.
 */
trait RolesModel
{
    /** @var array $fillable The attributes that are mass assignable. */
    protected $fillable = [
        'slug', 'display', 'description',
    ];
}
