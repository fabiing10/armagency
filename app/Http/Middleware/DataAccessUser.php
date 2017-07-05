<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use DB;

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

          $users = DB::table('users as u')
            ->join('FormControl as fc', 'u.id', '=', 'fc.userId')
            ->select('fc.status','fc.exp_date')
            ->where('u.id', '=', Auth::user()->id)
            ->get();
          foreach($users as $user){
            $status = $user->status;
            $date = $user->exp_date;
          }
          $dateNew = date_create($date);
          date_format($dateNew,'mm/dd/yyyy');
          if($status == "cancel"){
            return redirect("cancelled");
          }else if($dateNew < date('mm/dd/yyyy')){
            return redirect("expired");
          }else{
            return $next($request);
          }



        }else{
            return redirect("/logout");
        }
    }
}
