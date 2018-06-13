<?php

namespace App\Http\Middleware;

use Closure;
use App\UserRole;
use App\Role;
use Illuminate\Support\Facades\Auth;

class Administrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            $role= Auth::user()->roles()->where('name','Administrator')->first();
            if($role!=null)
            {
              return $next($request);  
            }else{
             return redirect('/');  
            }
        }
        return redirect('/');  
    }
}
