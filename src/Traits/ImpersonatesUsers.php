<?php

namespace App\Traits;

use App\Role;
use App\User;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make(['id' => $id], [
            'id' => ['required', 'exists:users', new ImpersonateUserRule(auth()->user())],
        ]);
        if ($validator->fails()) {
            return redirect()->route('users.index')->withErrors($validator);
        }
        $user = User::find($id);
        $data = $request->all();
        session()->put('session.impersonate.user', $data['id']);
        return $this->userImpersonating($user) ?: redirect()->route('home')->with('status', trans('autopulse::auth.impersonate_user_take', ['username', $user->username]));
    }

    /**
     * Attempt to leave user impersonation.
     *
     * @return \Illuminate\Http\Response Returns the response.
     */
    public function leave()
    {
        session()->forget('session.impersonate.user');
        return $this->userLeftImpersonating(auth()->user()) ?: redirect()->route('users.index')->with('status', trans('autopulse::auth.impersonate_user_leave'));
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
