<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

/**
 * Guest-only pages (login, forgot password): signed-in users go to the dashboard.
 * (Formerly named IsAuthenticated.)
 */
class RedirectIfLoggedIn
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            return to_route('admin.dashboard');
        }

        return $next($request);
    }
}
