<?php

namespace App\Http\Controllers;

use User,FormControl;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminController extends Controller
{

      public function certificate (Request $request){

          return view('admin.create-certificate');
      }
      public function create_certificate (Request $request){
          $datos = $request->name;

          /*$user = new User();
          $user->name = $request->name;
          $user->save();

          $formcontrol = new FormControl();
          $formcontrol->user_id = $user->id;

          $formcontrol->save();*/

          return redirect('login/');
      }
}
