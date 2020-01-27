<?php

namespace Ezoheux\App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * The impersonation check middleware.
 */
class ImpersonationCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request.
     * @param \Closure                 $next    The next middleware.
     *
     * @return mixed Returns the response.
     */
    public function handle($request, Closure $next, $role)
    {
        if (session()->has('impersonating')) {
            Auth::onceUsingId(session()->get('impersonating'));
        }
        return $next($request);
    }
}
