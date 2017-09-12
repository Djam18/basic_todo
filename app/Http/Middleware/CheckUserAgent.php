<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserAgent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!str_contains($request->userAgent(), 'Chrome')) {
            abort(403, 'Only Chrome users allowed.');
        }

        return $next($request);
    }
}
