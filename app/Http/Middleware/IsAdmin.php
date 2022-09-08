<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!auth()->check() || !auth()->user()->is_admin) {
            abort(403);
        }
        // jika ingin memakai check maka di buat seperti if(!auth()->check()
        return $next($request);
    }
}
