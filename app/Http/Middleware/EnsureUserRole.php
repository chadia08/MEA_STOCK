<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class EnsureUserRole
{
/** Handle an incoming request.
*   @param \Illuminate\Http\Request $request
*   @param  \Closure $next
*   @return mixed
*/
    public function handle(Request $request, Closure $next, string $role)
    {
        if($request->user()->role === $role) return $next($request);

        else abort(404);
    }
}