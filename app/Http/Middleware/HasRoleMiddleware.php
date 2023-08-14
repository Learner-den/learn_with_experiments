<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;


class HasRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {

        if(!auth()->user() || !auth()->user()->hasRole($role))
        {
            abort(403);
        }

        
        //Don't forget to pass a third parameter strin $role in handel() as shown above
        //We need to define the hasRole() method in User Model



        return $next($request);
    }
}
