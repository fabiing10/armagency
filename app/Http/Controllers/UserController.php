<?php

namespace App\Http\Controllers;

use App\Client;
use App\ClientUser;
use App\User;
use App\History;
use DB, PDF, Mail;
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

    $user = Auth::user();

    $email_option = $request->email_option;
    if($email_option == "on"){
      $send_email_option = true;
      $email_data = $request->email_client;
    }else{
      $send_email_option = false;
      $email_data = 'none';
    }

    $fax_option = $request->fax_option;
    if($fax_option == "on"){
      $send_fax_option = true;
      $fax_data = $request->fax_client.'@rcfax.com';
    }else{
      $send_fax_option = false;
      $fax_data = 'none';
    }


    $email_to_me = $request->email_to_me;
    if($email_to_me == "on"){
      $email_to_me_option = true;
      $email_to_me_data = $user->email;
    }else{
      $email_to_me_option = false;
    }

    $fax_to_me = $request->phone_to_me;
    if($fax_to_me == "on"){
      $fax_to_me_option = true;
      $fax_to_me_data = $user->phone.'@rcfax.com';
    }else{
      $fax_to_me_option = false;
      $fax_to_me_data = 'none';
    }


    $client = new Client;
    $client->certificate_holder_name = $request->certificate_name;
    $client->address = $request->address_client;
    $client->phone_number = $request->phone_client;
    $client->fax = $request->fax_client;
    $client->email = $request->email_client;
    $client->save();


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
    $path = $this->loadResult('send');

    $result = array(
      'certificate_holder_name' => $request->certificate_name,
      'address_client' => $request->address_client,
      'phone_number' => $request->phone_client,
      'path' => $path,
      'send_email_option' => $send_email_option,
      'email_data' => $email_data,
      'send_fax_option' => $send_fax_option,
      'fax_data' => $fax_data,
      'email_to_me' => $email_to_me,
      'email_to_me_data' => $email_to_me_data,
      'fax_to_me_option' => $fax_to_me_option,
      'fax_to_me_data' => $fax_to_me_data
    );
    if(!empty($result['send_email_option'])){
        $email = $result['email_data'];
        $fax = $result['fax_data'];
        $path = $result['path'];

        Mail::send('layouts.emails.certificate', $result, function($message) use($email,$path,$result){
            if($result['send_email_option'] == true &&  $result['send_fax_option'] == false){
              $message->to($email)->subject('Armagency - Accord Form')->attach($path);
            }else if($result['send_email_option'] == false &&  $result['send_fax_option'] == true){
              $message->to($fax)->subject('Armagency - Accord Form')->attach($path);
            }else if($result['send_email_option'] == true &&  $result['send_fax_option'] == true){
              $message->to($fax)->subject('Armagency - Accord Form')->attach($path);
              $message->cc($result['fax_data']);
            }else{
              $message->to('sender@armagencyonline.com')->subject('Armagency - Accord Form')->attach($path);
            }

            if($result['email_to_me'] == true){
              $message->cc($result['email_to_me_data']);
            }
            if($result['send_fax_option'] == true){
              $message->cc($fax_data);
            }

        });
        \Session::flash('flash_message','Se ha enviado el mensaje correctamente.. Gracias por Ayudar!');
        return redirect('user/history');


      }else{
        \Session::flash('flash_message','No se ha podido enviar tu mensaje, pero ya dejamos el reporte.. Gracias por tu ayuda!');
        return redirect('user/certificate');

      }


    return $history;
  }
  public function viewCertificate(){
    $user = Auth::user();
    return view('user.send_certificate')->with('user',$user);
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

  public function loadResult($option){
    $user = Auth::user();
    $formQuery = FormControl::where('userId','=',$user->id)->get();

    foreach($formQuery as $f){
      $form_id = $f->id;
    }
    $date = date('m-d-y');
    $FormControl = FormControl::find($form_id);
    view()->share('formcontrol',$FormControl);
    view()->share('user',$user);
    $pdf = PDF::loadView('user.download-certificate');
    $pdf->setOptions(['dpi' => 131, 'defaultFont' => 'sans-serif','fontHeightRatio' => 1.5,'debugLayoutPaddingBox' => false,'defaultPaperSize'=>'a4']);
    if($option == 'send'){
      $name_pdf = public_path().'/pdf/'.$user->id.'-accord-pdf-'.$date.'.pdf';
      $pdf->save($name_pdf);
      return $name_pdf;
    }else{
      $data = date('Y-m-d');
      return $pdf->download('accord-'.$data.'.pdf');
    }



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
