<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return  $next($request);
        }

        foreach($roles as $role) {
            // Check if user has the role This check will depend on how your roles are set up
            if($request->user()->hasRole($role)){
                return $next($request);    
            }  
        }

        abort(401, "Unauthorized!");
    }
}