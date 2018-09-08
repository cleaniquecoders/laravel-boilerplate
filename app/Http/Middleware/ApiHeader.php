<?php

namespace App\Http\Middleware;

use Closure;

class ApiHeader
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
        if (config('api.header.accept') != $request->header('Accept')) {
            return response()->api(null, 'Invalid Accept Header', false, 400);
        }

        if (config('api.version') != $request->header('Version')) {
            return response()->api(null, 'Missing API Version', false, 400);

            if (! in_array($request->header('Version'), config('api.versions'))) {
                return response()->api(null, 'Invalid API Version', false, 400);
            }
        }

        return $next($request);
    }
}
