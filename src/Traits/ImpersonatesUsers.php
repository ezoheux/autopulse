<?php

namespace App\Traits;

use App\Role;
use App\User;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * The impersonate users trait.
 */
trait ImpersonatesUsers
{
    use RedirectsUsers;

    /**
     * Attempt to impersonate a user.
     *
     * @param string $id The user id to impersonate.
     *
     * @return \Illuminate\Http\Response Returns the response.
     */
    public function take($id)
    {
        $user = Auth::user();
        if ($user->hasPermission('impersonator')) {
            if ($accessUser = User::find($id)) {
                if ($accessUser->hasPermission('impersonatable')) {
                    session()->put('session.impersonate.user', $data['id']);
                    return $this->userImpersonating($user) ?: redirect()->route('home')->with('status', trans('autopulse::auth.impersonate_user_take', ['username', $user->username]));
                }
            }
            return redirect()->route('users.index')->with('error', trans('autopulse::auth.impersonate_user_failed'));
        }
        return redirect()->route('home');
    }

    /**
     * Attempt to leave user impersonation.
     *
     * @return \Illuminate\Http\Response Returns the response.
     */
    public function leave()
    {
        if ($user->hasPermission('impersonator')) {
            session()->forget('session.impersonate.user');
            return $this->userLeftImpersonating(auth()->user()) ?: redirect()->route('users.index')->with('status', trans('autopulse::auth.impersonate_user_leave'));
        }
        return redirect()->route('home');
    }

    /**
     * The user selected is being impersonated.
     *
     * @param mixed $user The authenticated user.
     *
     * @return mixed Returns anything.
     */
    protected function userImpersonating($user)
    {
    }

    /**
     * The user selected is not being impersonated.
     *
     * @param mixed $user The authenticated user.
     *
     * @return mixed Returns anything.
     */
    protected function userLeftImpersonating($user)
    {
    }
}
