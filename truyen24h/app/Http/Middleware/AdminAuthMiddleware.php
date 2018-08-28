<?php

namespace Truyen24h\Http\Middleware;

use Closure;

class AdminAuthMiddleware
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
        if(auth()->check())
        {
            if(auth()->user()->admin_level > 0) return $next($request);
        }
        return redirect()->route('index');
    }
}
