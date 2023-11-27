<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
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
        //  $request->session()->put('temp_user_id', '9'.date('dmhis'));
        if($request->session()->has('user_id')){
            
        }else{
              return \redirect('/login')->with('fail','Access denied ! Please login.');
        }
        return $next($request);
    }
}
