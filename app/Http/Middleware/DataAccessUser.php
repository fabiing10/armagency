<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
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

          if($status == "cancel"){
            return redirect("cancelled");
          }else if($date < date('Y-m-d')){
            return redirect("expired");
          }else{


            $date_t=strtotime(date('Y-m-d'));  // if today :2013-05-23

            $newDate = date('Y-m-d',strtotime('+30 days',$date_t));
            $today = Carbon::now()->format('Y-m-d');

            $tf = Carbon::parse($today)->format('Y-m-d');
            $nd = Carbon::parse($newDate)->format('Y-m-d');

            if($date >= $tf and $date <= $nd){
              session()->flush();
              session(['alert' => $date]);

            }
            return $next($request);
          }



        }else{
            return redirect("/logout");
        }
    }
}
