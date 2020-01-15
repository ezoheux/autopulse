<?php

namespace Ezoheux\App\Traits;

use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * The update usernames trait.
 */
trait UpdatesUsernames
{
    use RedirectsUsers;

    /**
     * Show the username handler.
     *
     * @return \Illuminate\Contracts\Support\Renderable Returns the response.
     */
    public function show()
    {
        return view('autopulse::account.username');
    }

    /**
     * Attempt to change the users username.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request.
     *
     * @return \Illuminate\Http\Response Returns the response.
     */
    public function update(Request $request)
    {
        $user = $request->user();
        $validator = Validator::make($request->all(), [
            'username' => config('autopulse.username_validation_logic', ['required', 'string', 'alpha_num',  'min:4', 'max:20', 'unique:users', 'confirmed']),
        ]);
        if ($validator->fails()) {
            return redirect()->route('username.handler')->withInput()->withErrors($validator);
        }
        $data = $request->all();
        $user->username = $data['username'];
        $user->save();
        return $this->usernameUpdated($request, $user) ?: redirect($this->redirectPath())->with('status', __('autopulse::account.username_changed'));
    }

    /**
     * The users username has been updated.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request.
     * @param mixed                    $user    The authenticated user.
     *
     * @return mixed Returns anything.
     */
    protected function usernameUpdated(Request $request, $user)
    {
    }
}
