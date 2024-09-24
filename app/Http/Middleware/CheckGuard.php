<?php

namespace App\Http\Middleware;

use App\Helpers\Authentication;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guard): Response
    {
        if (!in_array(Authentication::getGuard() , $guard)) {
            abort(401);
        }
        return $next($request);

    }
}
