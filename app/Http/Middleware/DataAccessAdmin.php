<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class DataAccessAdmin
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
      
      if(Auth::user()){
        $userType = Auth::user()->userType;
          if($userType == "admin"){
              return $next($request);
          }else if($userType == "user"){
              return redirect("/user");
          }else{
              return redirect("/logout");
          }
      }else{
        return redirect("/login");
      }



    }
}
