<?php

namespace App\Http\Middleware;

use Closure;

class HttpsProtocol
{
    public function handle($request, Closure $next)
    {
        if (app()->environment('production') && !$request->secure()) {

            return redirect()->secure($request->getRequestUri());

        }
        
        return $next($request);
    }
}