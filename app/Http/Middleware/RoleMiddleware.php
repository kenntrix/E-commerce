<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, string $role, Closure $next = null)
    {
        $user  = Auth::user();

        if (!$user) {
            abort(403, 'Not Authorized');
        }

        // Check if the user is authenticated and has the required role
        if (Auth::check() && Auth::user()->hasRole($role)) {
            return $next($request);
        }
    }
}
