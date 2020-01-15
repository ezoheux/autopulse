<?php

namespace App\Http\Controllers\Autopulse;

use App\Http\Controllers\Controller;
use Ezoheux\App\Traits\UpdatesUsernames;
use Illuminate\Http\Request;

/**
 * The username controller.
 */
class UsernameController extends Controller
{
    use UpdatesUsernames;

    /** @var string $redirectTo Where to redirect users after the password has been updated. */
    protected $redirectTo = '/account/username';

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
