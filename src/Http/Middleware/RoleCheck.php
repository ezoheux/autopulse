<?php

namespace Ezoheux\App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * The role check middleware.
 */
class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request.
     * @param \Closure                 $next    The next middleware.
     * @param array                    $data    The data needed for the middleware.
     *
     * @return mixed Returns the response.
     */
    public function handle($request, Closure $next, $data)
    {
        if (!Auth::user()->hasRole($data['role'])) {
            return redirect()->route($data['redirectTo']);
        }
        return $next($request);
    }
}
