<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the authenticated user has a user_role of 'admin'
        if ($request->user() && $request->user()->user_role === 'admin') {
            return $next($request);
        }

        // Redirect the user back with an unauthorized message
        return redirect()->back()->with('error', 'Unauthorized access.');
    }
}
