<?php

namespace App\Http\Middleware;

use Closure;

class XName
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param $name
     * @return mixed
     */
    public function handle($request, Closure $next, $name = 'x-name')
    {
        $response = $next($request);
        $response->headers->set($name, config('app.name'));
        return $response;
    }
}
