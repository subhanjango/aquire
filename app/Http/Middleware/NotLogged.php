<?php

namespace App\Http\Middleware;

use Closure;

class NotLogged
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
        if (!\Session::has('user_key')) {
            return redirect('/');
        }
        return $next($request);
    }
}
