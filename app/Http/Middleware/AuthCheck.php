<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(!session()->has('loggedUser') && ($request->path() != '/' && $request->path() != 'register')){
            return redirect('/')->with('fail','You must be logged in');
        }

        if(session()->has('loggedUser') && ($request->path() == '/' || $request->path() == 'register')){
            return back();
        }

        $response=$next($request);
        $response->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate');
        $response->header('Pragma','no-cache');
        $response->header('Expires', 'Sat, 01 Jan 1990 00:00:00 GMT');
        return $response;
    }
}