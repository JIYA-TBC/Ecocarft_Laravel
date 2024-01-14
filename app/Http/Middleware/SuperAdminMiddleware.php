<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->utype == 2) // 1 for admin and 0 for user and 2 for superadmin
            {
                return $next($request);
            } 
            else
            {
                return redirect('/errors/404')->with('status','Access Denied! As you are not admin');
            }
        }
        else
        {
            return redirect('/login')->with('status','Please Login!');
        }

    }
}
