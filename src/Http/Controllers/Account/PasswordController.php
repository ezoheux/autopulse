<?php

namespace Ezozeux\App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Ezozeux\App\Traits\UpdatesPasswords;
use Illuminate\Http\Request;

/**
 * The password controller.
 */
class PasswordController extends Controller
{
    use UpdatesPasswords;

    /** @var string $redirectTo Where to redirect users after the password has been updated. */
    protected $redirectTo = config('autopulse.password_handler_redirect_to', '/account/password');

    /**
     * Create a new controller instance.
     *
     * @return void Returns nothing.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }
}

