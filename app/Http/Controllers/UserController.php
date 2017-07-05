<?php

namespace App\Http\Controllers;

use App\Client;
use App\ClientUser;
use App\User;
use App\History;
use DB, PDF;
use App\FormControl;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
class UserController extends Controller
{
  public function sendCertificate(Request $request){
    /*$email_option = $request->email_option;
    if($email_option == "on"){
      return "Envio email option";
    }else{
      return "No Envio email option";
    }*/

    $client = new Client;
    $client->certificate_holder_name = $request->certificate_name;
    $client->address = $request->address_client;
    $client->phone_number = $request->phone_client;
    $client->fax = $request->fax_client;
    $client->email = $request->email_client;
    $client->save();

    $user = Auth::user();

    $clientuser = new ClientUser;
    $clientuser->userId = $user->id;
    $clientuser->status = 'active';
    $clientuser->clientId = $client->id;
    $clientuser->save();
    //Obtener user

    $history = new History;
    $history->userId = $user->id;
    $history->status = 'active';
    $history->clientId = $client->id;
    $history->sent_date = date('Y-m-d');
    $history->save();

    return $history;
  }

  public function gethistory (){
    $user = Auth::user();
    //$history = History::where('userId', '=', $user->id)->get();

    $histories = DB::table('users as u')
      ->join('history_send as h', 'u.id', '=', 'h.userId')
      ->join('clients as c', 'c.id', '=', 'h.clientId')
      ->select('h.*','c.*')
      ->where('u.id','=',$user->id)
      ->get();

    //return $histories;
    return view('user.history')->with('user',$user)->with('histories',$histories);
  }

  public function getclient(){
    $user = Auth::user();

    $clients = DB::table('users as u')
      ->join('history_send as h', 'u.id', '=', 'h.userId')
      ->join('clients as c', 'c.id', '=', 'h.clientId')
      ->select('c.*')
      ->where('u.id','=',$user->id)
      ->get();
    return view('user.client-list')->with('user',$user)->with('clients',$clients);;
  }

  public function loadResult(){
    $user = Auth::user();
    $formQuery = FormControl::where('userId','=',$user->id)->get();
    foreach($formQuery as $f){
      $form_id = $f->id;
    }
    $FormControl = FormControl::find($form_id);


        view()->share('formcontrol',$FormControl);
        view()->share('user',$user);
        $pdf = PDF::loadView('user.download-certificate');
        $pdf->setOptions(['dpi' => 131, 'defaultFont' => 'sans-serif','fontHeightRatio' => 1.5,'debugLayoutPaddingBox' => false,'defaultPaperSize'=>'a4']);
        return $pdf->stream('download.pdf');


 //eturn view('user.download-certificate')->with('user',$user)->with('formcontrol',$FormControl);
  }

  public function account(){
    $user = Auth::user();
    $formQuery = FormControl::where('userId','=',$user->id)->get();
    foreach($formQuery as $f){
      $form_id = $f->id;
    }
    $FormControl = FormControl::find($form_id);
    return view('user.account')->with('user',$user)->with('FormControl',$FormControl);
    }

    public function resetpassword(Request $request){
          $user = Auth::user();
          if ($request->newpassword2 === $request->newpassword) {
            $useredit = User::find($user->id);
            $useredit->password = bcrypt($request->newpassword);
            $useredit->save();
            return redirect('user/account');
          }else{
            return redirect('user/reset-password');
          }
    }

    public function getpassword(Request $request){
          $user = Auth::user();
          if ($user->email === $request->email) {
            return ('hola');
          }else{

          }
    }
}
