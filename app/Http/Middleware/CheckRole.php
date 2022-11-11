<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if ($role == 'overall' && Auth::user()->role->name == 'Overall Administrator'){
            return $next($request);
        }

        if ($role == 'univ' && Auth::user()->role->name == 'University Administrator'){
            return $next($request);
        }

        if ($role == 'member' && Auth::user()->role->name == 'Member'){
            return $next($request);
        }

        return redirect()->route('index');
    }
}
