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
    public function handle($request, Closure $next)
    {
    	if( $request->path() != 'admin/login/login' ){
			$manager = adminSessionGet('managerData');
			if( !$manager ){
				return redirect()->route("login");
			}
		}
    	
        return $next($request);
    }
}
