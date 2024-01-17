<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AdminMiddleware
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
            if(Auth::user()->utype == 1 || Auth::user()->utype == 2) // 1 for admin and 0 for user and 2 for super admin
            {
                return $next($request);
            } 
            else
            {
                return redirect('/');
            }
        }
        else
        {
            return redirect('/login')->with('status','Please Login!');
        }

    }
}
