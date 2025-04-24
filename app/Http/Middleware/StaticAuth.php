<?php

namespace App\Http\Middleware;

use Closure;

class StaticAuth
{
    public function handle($request, Closure $next)
    {
        if (!session()->has('logged_in')) {
            return redirect('/login');
        }
        return $next($request);
    }
}