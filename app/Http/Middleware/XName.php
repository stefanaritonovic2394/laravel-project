<?php

namespace App\Http\Middleware;

use Closure;

class XName
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
        $appName = config('app.name');
        $response = $next($request);
        $response->headers->set('X-name', $appName);
        return $response;
    }
}
