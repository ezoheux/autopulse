<?php

namespace Ezoheux\App\Traits;

use Ezoheux\App\Rules\PasswordVerifyRule;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

/**
 * The update passwords trait.
 */
trait UpdatesPasswords
{
    use RedirectsUsers;

    /**
     * Show the password handler.
     *
     * @return \Illuminate\Contracts\Support\Renderable Returns the response.
     */
    public function show()
    {
        return view('autopulse::account.password');
    }

    /**
     * Attempt to change the users password.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request.
     *
     * @return \Illuminate\Http\Response Returns the response.
     */
    public function update(Request $request)
    {
        $user = $request->user();
        $validator = Validator::make($request->all(), [
            'current_password' => ['required', 'string', new PasswordVerifyRule($user)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return redirect()->route('password.handler')->withErrors($validator);
        }
        $data = $request->all();
        $user->password = Hash::make($data['password']);
        $user->save();
        return $this->passwordUpdated($request, $user) ?: redirect($this->redirectPath())->with('status', __('auth.password_changed'));
    }

    /**
     * The users password has been updated.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request.
     * @param mixed                    $user    The authenticated user.
     *
     * @return mixed Returns anything.
     */
    protected function passwordUpdated(Request $request, $user)
    {
    }
}
