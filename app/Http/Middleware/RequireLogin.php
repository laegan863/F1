<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

/**
 * Only signed-in users may pass; guests are sent to the login page.
 * (Formerly named IsNotAuth.)
 */
class RequireLogin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! Auth::check()) {
            return to_route('login');
        }

        return $next($request);
    }
}
