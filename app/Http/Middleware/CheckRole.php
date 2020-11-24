<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (Auth::guest())
        {
            return response()->view('auth.login');
        }
        if (! $request->user()->hasRole($role))
        {
            return response()->view('error.404');
        }
        return $next($request);
    }
}
