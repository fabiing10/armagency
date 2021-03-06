<?php

namespace App\Http\Controllers;

use App\Client;
use App\ClientUser;
use App\User;
use App\History;
use DB, PDF, Mail,Alert;
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

  public function specialC($data){
    $conservar = '0-9'; // juego de caracteres a conservar
    $regex = sprintf('~[^%s]++~i', $conservar); // case insensitive
    $string = preg_replace($regex, '', $data);
    return $string;
  }

  public function downloadFile($file){
    $pathToFile = public_path().'/pdf/'.$file;
    return response()->download($pathToFile);
  }
  public function sendCertificate(Request $request){

    $user = Auth::user();
    $option_client = $request->client_list;
    $email_option = $request->email_option;
    if($email_option == "on"){
      $send_email_option = true;
      $email_data = $request->email_client;
    }else{
      $send_email_option = false;
      $email_data = 'email: ninguno';
    }

    $fax_option = $request->fax_option;
    if($fax_option == "on"){
      $send_fax_option = true;
      $data_validate =$this->specialC($request->fax_client);
      $fax_data = $data_validate.'@rcfax.com';
    }else{
      $send_fax_option = false;
      $fax_data = 'fax: ninguno';
    }


    $email_to_me = $request->email_to_me;
    if($email_to_me == "on"){
      $email_to_me_option = true;
      $email_to_me_data = $user->email;
    }else{
      $email_to_me_option = false;
      $email_to_me_data = 'none';
    }

    $fax_to_me = $request->phone_to_me;
    if($fax_to_me == "on"){
      $fax_to_me_option = true;
      $fax_to_me_data = $user->phone.'@rcfax.com';
    }else{
      $fax_to_me_option = false;
      $fax_to_me_data = 'none';
    }

    if($option_client == "on"){
      $client = new Client;
      $client->certificate_holder_name = strtoupper($request->certificate_name);
      $client->address = strtoupper($request->address_client);
      $client->phone_number = strtoupper($request->phone_client);
      $client->fax = strtoupper($request->fax_client);
      $client->email = strtoupper($request->email_client);
      $client->city = strtoupper($request->city_client);
      $client->state = strtoupper($request->state_client);
      $client->zip_code = strtoupper($request->zipcode_client);
      $client->save();


      $clientuser = new ClientUser;
      $clientuser->userId = $user->id;
      $clientuser->status = 'active';
      $clientuser->clientId = $client->id;
      $clientuser->save();
      $client_id = $client->id;
      $client_save = true;
    }else{
      if(!empty($request->client_value)){
        $client_id = $request->client_value;
        $client_save = true;
      }else{
        $client_id = $this->generateRandomInteger(5);
        $client_save = false;
      }

    }


    //Obtener user

    $history = new History;
    $history->userId = $user->id;
    $history->status = 'active';
    $history->certificate_holder_name = strtoupper($request->certificate_name);
    $history->address = strtoupper($request->address_client);
    $history->city = strtoupper($request->city_client);
    $history->state = strtoupper($request->state_client);
    $history->zip_code = strtoupper($request->zipcode_client);
    $history->sent_date = date('Y-m-d');
    $history->client_save =  $client_save;
    $history->client_id =  $client_id;
    $history->save();

    $dataCertificate = array(
      'client_id' => $client_id,
      'certificate_holder_name' => $request->certificate_name,
      'address_client' => $request->address_client,
      'phone_number' => $request->phone_client,
      'city' => $request->city_client,
      'state' => $request->state_client,
      'zip_code' => $request->zipcode_client,
      'email_data' => $email_data,
      'fax_data' => $fax_data
    );

    $path = $this->loadResult('send',$dataCertificate);

    $result = array(
      'certificate_holder_name' => $request->certificate_name,
      'address_client' => $request->address_client,
      'phone_number' => $request->phone_client,
      'path' => $path,
      'send_email_option' => $send_email_option,
      'email_data' => $email_data,
      'send_fax_option' => $send_fax_option,
      'fax_data' => $fax_data,
      'email_to_me_option' => $email_to_me_option,
      'email_to_me_data' => $email_to_me_data,
      'fax_to_me_option' => $fax_to_me_option,
      'fax_to_me_data' => $fax_to_me_data
    );
    if(!empty($result['send_email_option']) or !empty($result['email_to_me_option'])){

        if(!empty($result['send_email_option'])){
          $email = $result['email_data'];
          $option = 'email_client';
        }else{
          $email = $result['email_to_me_data'];
          $option = 'email_to_me';
        }
        $path = $result['path'];

        Mail::send('layouts.emails.certificate', $result, function($message) use($email,$path,$option,$result){
              $message->to($email)->subject('Armagency - Accord Form');
              if($option == 'email_client'){
                if(!empty($result['email_to_me_option'])){
                  $message->cc($result['email_to_me_data']);
                }
              }else{
                if(!empty($result['send_email_option'])){
                  $message->cc($result['email_data']);
                }
              }
        });

      }

      if(!empty($result['send_fax_option']) or !empty($result['fax_to_me_option'])){

          if(!empty($result['send_fax_option'])){
            $email = $result['fax_data'];
            $option = 'fax_client';
          }else{
            $email = $result['fax_to_me_data'];
            $option = 'fax_to_me';
          }
          $path = $result['path'];

          Mail::send('layouts.emails.certificate', $result, function($message) use($email,$path,$option,$result){

                $file = public_path().'/pdf/'.$path;
                $message->to($email)->subject('Armagency - Accord Form')->attach($file);

                if($option == 'fax_client'){
                  if(!empty($result['fax_to_me_option'])){
                    $message->cc($result['fax_to_me_data']);
                  }
                }else{
                  if(!empty($result['send_fax_option'])){
                    $message->cc($result['fax_data']);
                  }
                }
          });
        }


        Alert::success('Your Request Has Been Processed!')->persistent("Close");
        return redirect('user/history');
  }

  public function editClient($id){
    $client = Client::find($id);
    return view('user.client-edit')->with('client',$client);
  }

  public function saveClient(Request $request,$id){
    $client = Client::find($id);
    $client->certificate_holder_name = strtoupper($request->certificate_name);
    $client->address = strtoupper($request->address_client);
    $client->phone_number = strtoupper($request->phone_client);
    $client->fax = $request->fax_client;
    $client->email = strtoupper($request->email_client);
    $client->city = strtoupper($request->city_client);
    $client->state = strtoupper($request->state_client);
    $client->zip_code = $request->zipcode_client;
    $client->save();
    Alert::success('The Client Has Been Updated!')->persistent("Close");
    return redirect('/user/client-list');
  }

  public function deleteClient($clientId){

    ClientUser::where('clientId', $clientId)->delete();
    $client = Client::find($clientId);
    $client->delete();

    $countH = History::where('client_id',$clientId)->count();
    if($countH > 0){
      $histories = History::where('client_id',$clientId)->get();
      foreach ($histories as $h ){
        $hId = $h->id;
      }
      $history = History::find($hId);
      $history->client_save =  false;
      $history->client_id =  0;
      $history->save();

    }



    return redirect('/user/client-list');

  }

  public function viewCertificate(){
    $user = Auth::user();
    return view('user.send_certificate')->with('user',$user);
  }

  public function viewCertificateHistory($id){
    $client = Client::find($id);
    $user = Auth::user();
    return view('user.send_certificate_history')->with('user',$user)->with('client',$client);
  }

  public function deleteHistory($id){

    $history = History::find($id);
    $history->delete();
    return redirect('user/history');

  }
  public function gethistory (){
    $user = Auth::user();
    //$history = History::where('userId', '=', $user->id)->get();

    $histories = DB::table('users as u')
      ->join('history_send as h', 'u.id', '=', 'h.userId')

      ->select('h.*','u.id as userId','h.id as historyId')
      ->where('u.id','=',$user->id)
      ->orderBy('h.created_at', 'desc')
      ->get();

    //return $histories;
    return view('user.history')->with('user',$user)->with('histories',$histories);
  }

  public function getclient(){

    $user = Auth::user();
    $clients = DB::table('users as u')
      ->join('clients_user as c_u', 'u.id', '=', 'c_u.userId')
      ->join('clients as c', 'c.id', '=', 'c_u.clientId')
      ->select('c.*')
      ->where('u.id','=',$user->id)
      ->get();
    return view('user.client-list')->with('user',$user)->with('clients',$clients);

  }


  public function generateCertificate(Request $request){

    $dataCertificate = array(
      'certificate_holder_name' => strtoupper($request->certificate_name),
      'address_client' => strtoupper($request->address_client),
      'phone_number' => $request->phone_client,
      'email_data' => strtoupper($request->email_client),
      'fax_data' => $request->fax_client,
      'city' => strtoupper($request->city_client),
      'state' => strtoupper($request->state_client),
      'zip_code' => $request->zipcode_client
    );

    $rand = $this->generateRandomString(5);

    $user = Auth::user();
    $formQuery = FormControl::where('userId','=',$user->id)->get();

    foreach($formQuery as $f){
      $form_id = $f->id;
    }
    $date = date('m-d-y');
    $FormControl = FormControl::find($form_id);
    view()->share('dataCertificate',$dataCertificate);
    view()->share('formcontrol',$FormControl);
    view()->share('user',$user);
    $pdf = PDF::loadView('user.download-certificate');
    $pdf->setOptions(['dpi' => 131, 'defaultFont' => 'sans-serif','fontHeightRatio' => 1.5,'debugLayoutPaddingBox' => false,'defaultPaperSize'=>'a4']);
    $pdf->getDomPDF()->get_canvas()->get_cpdf()->setEncryption('','',array('print'));
    $name_pdf = public_path().'/pdf/'.$rand.'-accord-pdf-'.$date.'.pdf';
    $pdf->save($name_pdf);
    return $rand.'-accord-pdf-'.$date.'.pdf';

  }
  public function downloadCertificate($option){
    if($option != 'download'){
      $client = Client::find($option);
      $dataCertificate = array(
        'certificate_holder_name' => strtoupper($client->certificate_holder_name),
        'address_client' => strtoupper($client->address),
        'phone_number' => $client->phone_number,
        'email_data' => strtoupper($client->email),
        'fax_data' => $client->fax,
        'city' => strtoupper($client->city),
        'state' => strtoupper($client->state),
        'zip_code' => $client->zip_code
      );
    }else{
      $dataCertificate = array(
        'certificate_holder_name' => '',
        'address_client' => '',
        'phone_number' => '',
        'email_data' => '',
        'fax_data' => '',
        'city' => '',
        'state' => '',
        'zip_code' => ''
      );
    }


   return  $this->loadResult($option,$dataCertificate);
  }

  public function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
  public function generateRandomInteger($length = 10) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }


  public function loadResult($option,$dataCertificate){
    $user = Auth::user();
    if(!empty($dataCertificate['client_id'])){
      $client = $dataCertificate['client_id'];
    }

    $formQuery = FormControl::where('userId','=',$user->id)->get();

    foreach($formQuery as $f){
      $form_id = $f->id;
    }
    $date = date('m-d-y');
    $FormControl = FormControl::find($form_id);
    view()->share('dataCertificate',$dataCertificate);
    view()->share('formcontrol',$FormControl);
    view()->share('user',$user);
    $pdf = PDF::loadView('user.download-certificate');
    $pdf->setOptions(['dpi' => 131, 'defaultFont' => 'sans-serif','fontHeightRatio' => 1.5,'debugLayoutPaddingBox' => false,'defaultPaperSize'=>'a4']);
    $pdf->getDomPDF()->get_canvas()->get_cpdf()->setEncryption('','',array('print'));
    if($option == 'send'){
      $name_pdf = public_path().'/pdf/'.$client.'-accord-pdf-'.$date.'.pdf';
      $pdf->save($name_pdf);
      return $client.'-accord-pdf-'.$date.'.pdf';
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
            Alert::success('Your password has Been updated!')->persistent("Close");
            return redirect('user/account');
          }else{
            Alert::error('The password you entered is incorrect!')->persistent("Close");
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
