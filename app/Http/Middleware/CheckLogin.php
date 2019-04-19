<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request,Closure $next)
    {
        

        if (!$request->session()->exists('name')) {
            // user value cannot be found in session
            return redirect('login');
        }

        return $next($request);
    }
}
