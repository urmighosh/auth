<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)

    {
        if (auth()->check() && auth()->user()->type == 'user')
        {
            return $next($request);
        }

        else
        {
            return  redirect()->back()->with('message','Not Found,404   ');
        }


    }

}
