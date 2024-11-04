<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (!Auth::check()) {
            \Log::info('User not authenticated. Redirecting to login.');
            return redirect()->route('login');
        }

        return $next($request);
    }
}