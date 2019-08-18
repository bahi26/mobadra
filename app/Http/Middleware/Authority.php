<?php

namespace App\Http\Middleware;

use Closure;

class Authority
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

        if($request->user()->authority>0)
            return $next($request);
        return redirect('/');
    }
}
