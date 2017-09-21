<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
{
    public function handle($request, Closure $next)
    {
        if ($request->age < 18) {
            return redirect('home')->with('error', 'Vous devez avoir au moins 18 ans.');
        }

        return $next($request);
    }
}

