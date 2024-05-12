<?php

namespace App\Middleware;

use Closure;

class Authentication
{
    public function handle($request, Closure $next)
    {
        if (!session()->has('userId')) {
            return redirect()->to('/login')->with('error', 'Please login to access this page.');
        }

        return $next($request);
    }
}
