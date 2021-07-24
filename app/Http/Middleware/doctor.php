<?php

namespace App\Http\Middleware;
// use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class doctor
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
        if(auth()->guard('doctor')->check()){
           
            return $next($request);
        }else{
            return response()->view('logindoctor');
            // dd("dd");
        }
    }
}
