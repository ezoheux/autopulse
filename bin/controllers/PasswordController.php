<?php

namespace App\Http\Controllers\Autopulse;

use App\Http\Controllers\Controller;
use Ezoheux\App\Traits\UpdatesPasswords;
use Illuminate\Http\Request;

/**
 * The password controller.
 */
class PasswordController extends Controller
{
    use UpdatesPasswords;

    /** @var string $redirectTo Where to redirect users after the password has been updated. */
    protected $redirectTo = '/account/password';

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
