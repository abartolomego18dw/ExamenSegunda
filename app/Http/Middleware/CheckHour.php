<?php

namespace App\Http\Middleware;

use Closure;

class CheckHour
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
        if(date('H') > '12' ){
             return $next($request);
        }

        return redirect(route('alumnos'));
    }
}
