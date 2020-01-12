<?php

namespace Ezoheux\App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * The users policy.
 */
class UsersPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermission('view.users');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\User $user  The user attempting to update a user.
     * @param \App\User $model The user we are updating.
     *
     * @return mixed Returns anything.
     */
    public function update(User $user, User $model)
    {
        return $user->hasPermission('update.users')
            && !$model->hasPermission('updatable');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\User $user  The user attempting to delete a user.
     * @param \App\User $model The user we are deleting.
     *
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        return $user->hasPermission('update.users')
            && !$model->hasPermission('deletable');
    }
}
