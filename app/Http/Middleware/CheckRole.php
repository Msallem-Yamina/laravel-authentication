<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle(Request $request, Closure $next, $role)
    {
        if ($role === 'admin' && auth()->user()->role === 'admin') {
            return $next($request);
        }
    
        if ($role === 'user' && auth()->user()->role === 'user') {
            return $next($request);
        }
    
        return redirect()->route('unauthorized');
    }
}
