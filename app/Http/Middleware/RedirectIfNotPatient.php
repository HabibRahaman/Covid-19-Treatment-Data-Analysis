<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotPatient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard="patient")
    {
        if(!auth()->guard($guard)->check()) {
            return redirect(route('patient.login'));
        }
        return $next($request);
    }
}
