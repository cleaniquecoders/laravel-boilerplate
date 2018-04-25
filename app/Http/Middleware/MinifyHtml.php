<?php

namespace App\Http\Middleware;

use Closure;

class MinifyHtml
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response->setContent(minify($response->getContent()));

        return $response;
    }
}
