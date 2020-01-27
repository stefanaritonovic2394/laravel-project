<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfActive
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
        if (Auth::check() && Auth::user()->active) {
            Auth::logout();
            $request->session()->flash('alert-danger', 'Your profile is not active');
            return redirect()->route('login');
        }
        return $next($request);
    }
}
