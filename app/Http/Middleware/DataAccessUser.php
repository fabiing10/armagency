<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class DataAccessUser
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
      $userType = Auth::user()->userType;
        if($userType == "admin"){
            return redirect("/admin");
        }else if($userType == "user"){
            return $next($request);
        }else{
            return redirect("/logout");
        }
    }
}
