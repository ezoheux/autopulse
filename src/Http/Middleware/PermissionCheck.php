<?php

namespace Ezoheux\App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * The permission check middleware.
 */
class PermissionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request.
     * @param \Closure                 $next    The next middleware.
     *
     * @return mixed Returns the response.
     */
    public function handle($request, Closure $next, $permission)
    {
        if (!Auth::user()->hasPermission($permission)) {
            return redirect()->route(config('autopulse.permission_mismatch_redirect'));
        }
        return $next($request);
    }
}
