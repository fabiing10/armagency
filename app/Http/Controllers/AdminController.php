<?php

namespace App\Http\Controllers;

use App\Client;
use App\ClientUser;
use App\History;
use App\User;
use DB, PDF, Auth, Alert, Mail;
use App\FormControl;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminController extends Controller
{


      public function homeAdmin (){

        $users = DB::table('users as u')
        ->join('FormControl as fc', 'u.id', '=', 'fc.userId')
        ->select('fc.C_I_producer_id','u.name','u.email','fc.exp_date','fc.status','u.id')
        ->where('u.userType', '=', 'user')
        ->get();
        return view('admin.index')->with('users',$users);
      }

      public function alerts(){
        $users = DB::table('users as u')
        ->join('FormControl as fc', 'u.id', '=', 'fc.userId')
        ->select('u.name','fc.exp_date','u.email','u.phone')
        ->orderBy('fc.exp_date', 'desc')
        ->where('u.userType', '=', 'user')
        ->get();

        return view('admin.alerts')->with('users',$users);
      }

      public function getuser(){
        $users = DB::table('users as u')
        ->join('FormControl as fc', 'u.id', '=', 'fc.userId')
        ->select('u.email','u.name','fc.exp_date','fc.status','fc.id')
        ->where('u.userType', '=', 'user')
        ->get();
        return view('admin.active-inactive')->with('users',$users);
      }
      public function editstatus ($id){
          $FormControl = FormControl::find($id);
            if($FormControl->status === 'cancel'){
              $FormControl->status = 'active';
              $FormControl->save();
              return ('loco');
            }else {
              $FormControl->status = 'cancel';
              $FormControl->save();
              return ('no');
            }

      }
      public function certificate (Request $request){

          return view('admin.create-certificate');
      }

      public function specialC($data){
        $conservar = '0-9'; // juego de caracteres a conservar
        $regex = sprintf('~[^%s]++~i', $conservar); // case insensitive
        $string = preg_replace($regex, '', $data);
        return $string;
      }


      public function create_certificate (Request $request){

        /* user */
        $user = new User();
        $user->name = $request->name_insured;
        $user->phone = $this->specialC($request->phone_insured);
        $user->address = $request->address_insured;
        $user->email = $request->email_insured;
        $user->dba_name = $request->I_I_dba_name;
        $user->city = $request->I_I_city;
        $user->state = $request->I_I_state;
        $user->zip_code = $request->I_I_zip_code;
        $user->userType = "user";
        $user->password = bcrypt($request->password_insured);
        $user->save();

        $formcontrol = new FormControl();
        $formcontrol->userId = $user->id;
        $formcontrol->status = 'active';
        /* contact info agency */
        $formcontrol->C_I_name = $request->name;
        $formcontrol->C_I_phone = $request->phone;
        $formcontrol->C_I_email = $request->email;
        $formcontrol->C_I_fax = $request->fax;
        $formcontrol->C_I_producer_id = $request->customer_id;
        /* producer information */
        $formcontrol->P_I_name = $request->P_I_name;
        $formcontrol->P_I_dba_name = $request->dba_name;
        $formcontrol->P_I_address = $request->address;
        $formcontrol->P_I_city = $request->city;
        $formcontrol->P_I_dba_state = $request->state;
        $formcontrol->P_I_dba_zip_code = $request->zip_code;
        /* insurance */
        $insuranceData = array(
              'ensured_a' => $request->ensured_a,
              'naic_a' => $request->naic_a,
              'ensured_b' => $request->ensured_b,
              'naic_b' => $request->naic_b,
              'ensured_c' => $request->ensured_c,
              'naic_c' => $request->naic_c,
              'ensured_d' => $request->ensured_d,
              'naic_d' => $request->naic_d,
              'ensured_e' => $request->ensured_e,
              'naic_e' => $request->naic_e,
              'ensured_f' => $request->ensured_f,
              'naic_f' => $request->naic_f,
            );
          $insurance  = json_encode($insuranceData);
          $formcontrol->insurance = $insurance;
          /* general liability */
          $generalliabilityData = array(
              'g_l_insurance_letter' => $request->g_l_insurance_letter,
              'g_l_eff_date' => $request->g_l_eff_date,
              'g_l_exp_date' => $request->g_l_exp_date,
              'g_l_policy_number' => $request->g_l_policy_number,
              'g_l_each_ocurrence' => $request->g_l_each_ocurrence,
              'g_l_rented_permises' => $request->g_l_rented_permises,
              'g_l_medical_expenses' => $request->g_l_medical_expenses,
              'g_l_personal_adv' => $request->g_l_personal_adv,
              'g_l_general_aggregate' => $request->g_l_general_aggregate,
              'g_l_product_comp' => $request->g_l_product_comp,
              'g_l_other2' => $request->g_l_other2,
              'g_l_other_input2' => $request->g_l_other_input2,
            );
          $generalliability  = json_encode($generalliabilityData);
          $formcontrol->general_liability = $generalliability;
          /* considitional */
          if($request->g_l_commercial == 'true'){$g_l_option_commercial = 'true';}
          else {$g_l_option_commercial = 'false';}

          if($request->g_l_claims_made == 'true'){$g_l_option_claims_made = 'true';}
          else {$g_l_option_claims_made = 'false';}

          if($request->g_l_occur == 'true'){$g_l_option_occur = 'true';}
          else {$g_l_option_occur = 'false';}
          /* general liability options */
          $optionsData = array(
              'g_l_commercial' => $g_l_option_commercial,
              'g_l_claims_made' => $g_l_option_claims_made,
              'g_l_occur' => $g_l_option_occur,
            );
          $g_l_options  = json_encode($optionsData);
          $formcontrol->g_l_options = $g_l_options;
          /* considitional */
          if($request->g_l_policy == 'true'){$g_l_option_policy = 'true';}
          else {$g_l_option_policy = 'false';}

          if($request->g_l_project == 'true'){$g_l_option_project = 'true';}
          else {$g_l_option_project = 'false';}

          if($request->g_l_loc == 'true'){$g_l_option_loc = 'true';}
          else {$g_l_option_loc = 'false';}

          if($request->g_l_other == 'true'){$g_l_option_other = 'true';}
          else {$g_l_option_other = 'false';}
          /* general liability options limit */
          $optionslimitperData = array(
              'g_l_policy' => $g_l_option_policy,
              'g_l_project' => $g_l_option_project,
              'g_l_loc' => $g_l_option_loc,
              'g_l_other' => $g_l_option_other,
              'g_l_other_input' => $request->g_l_other_input,
            );
          $g_l_options_limit_per  = json_encode($optionslimitperData);
          $formcontrol->g_l_options_limit_per = $g_l_options_limit_per;

          /* considitional */
          if($request->g_l_options_addl == 'true'){$g_l_option_addl = 'true';}
          else {$g_l_option_addl = 'false';}

          if($request->g_l_options_subr == 'true')
          {$g_l_option_subr = 'true';}
          else {$g_l_option_subr = 'false';}

          /* general liability options addl subr */
          $optionsaddlsubrData = array(
              'g_l_options_addl' => $g_l_option_addl,
              'g_l_options_subr' => $g_l_option_subr,
            );
          $g_l_options_addl_subr  = json_encode($optionsaddlsubrData);
          $formcontrol->g_l_options_addl_subr = $g_l_options_addl_subr;
          /* auto liability */
          $autoliabilityData = array(
              'a_l_insurance_letter' => $request->a_l_insurance_letter,
              'a_l_policy_number' => $request->a_l_policy_number,
              'a_l_eff_date' => $request->a_l_eff_date,
              'a_l_exp_date' => $request->a_l_exp_date,
              'a_l_combined_single' => $request->a_l_combined_single,
              'a_l_bodily_person' => $request->a_l_bodily_person,
              'a_l_bodily_accident' => $request->a_l_bodily_accident,
              'a_l_property_damage' => $request->a_l_property_damage,
              'a_l_other2' => $request->a_l_other2,
              'a_l_other_input2' => $request->a_l_other_input2,
              'a_l_other3' => $request->a_l_other3,
              'a_l_other_input3' => $request->a_l_other_input3,
            );
            $autoliability  = json_encode($autoliabilityData);
            $formcontrol->auto_liability = $autoliability;
            /* considitional */
            if($request->a_l_any_auto == 'true'){$a_l_option_any_auto = 'true';}
            else {$a_l_option_any_auto = 'false';}

            if($request->a_l_all_owned == 'true'){$a_l_option_all_owned = 'true';}
            else {$a_l_option_all_owned = 'false';}

            if($request->a_l_sheduled == 'true'){$a_l_option_sheduled = 'true';}
            else {$a_l_option_sheduled = 'false';}

            if($request->a_l_home_autos == 'true'){$a_l_option_home_autos = 'true';}
            else {$a_l_option_home_autos = 'false';}

            if($request->a_l_hired_autos == 'true'){$a_l_option_hired_autos = 'true';}
            else {$a_l_option_hired_autos = 'false';}

            if($request->a_l_owned_autos== 'true'){$a_l_option_owned_autos = 'true';}
            else {$a_l_option_owned_autos = 'false';}

            if($request->a_l_other== 'true'){$a_l_option_other = 'true';}
            else {$a_l_option_other = 'false';}

          /* auto liability options */
          $optionsautoliabilityData = array(
              'a_l_any_auto' => $a_l_option_any_auto,
              'a_l_all_owned' => $a_l_option_all_owned,
              'a_l_sheduled' => $a_l_option_sheduled,
              'a_l_home_autos' => $a_l_option_home_autos,
              'a_l_hired_autos' => $a_l_option_hired_autos,
              'a_l_owned_autos' => $a_l_option_owned_autos,
              'a_l_other' => $a_l_option_other,
              'a_l_other_input' => $request->a_l_other_input,
            );
          $a_l_options  = json_encode($optionsautoliabilityData);
          $formcontrol->a_l_options = $a_l_options;
          /* considitional */
          if($request->a_l_options_addl == 'true'){$a_l_option_addl = 'true';}
          else {$a_l_option_addl = 'false';}

          if($request->a_l_options_subr == 'true'){$a_l_option_subr = 'true';}
          else {$a_l_option_subr = 'false';}

          /* auto liability options addl subr */
          $options_a_l_addlsubrData = array(
              'a_l_options_addl' => $a_l_option_addl,
              'a_l_options_subr' => $a_l_option_subr,
            );
          $a_l_options_addl_subr  = json_encode($options_a_l_addlsubrData);
          $formcontrol->a_l_options_addl_subr = $a_l_options_addl_subr;
          /* umbrella liability */
          $umbrellaliabilityData = array(
                'u_l_insurance_letter' => $request->u_l_insurance_letter,
                'u_l_policy_number' => $request->u_l_policy_number,
                'u_l_eff_date' => $request->u_l_eff_date,
                'u_l_exp_date' => $request->u_l_exp_date,
                'u_l_each_occurent' => $request->u_l_each_occurent,
                'u_l_aggregate' => $request->u_l_aggregate,
                'u_l_other' => $request->u_l_other,
                'u_l_other_input' => $request->u_l_other_input,
                'u_l_other2' => $request->u_l_other2,
                'u_l_other_input2' => $request->u_l_other_input2,
            );
          $umbrellaliability  = json_encode($umbrellaliabilityData);
          $formcontrol->umbrella_liability = $umbrellaliability;
          /* considitional */
          if($request->u_l_umbrella_liability == 'true'){$u_l_option_umbrella_liability = 'true';}
          else {$u_l_option_umbrella_liability = 'false';}

          if($request->u_l_occur == 'true'){$u_l_option_occur = 'true';}
          else {$u_l_option_occur = 'false';}

          if($request->u_l_excess_liability == 'true'){$u_l_option_excess_liability = 'true';}
          else {$u_l_option_excess_liability = 'false';}

          if($request->u_l_claims_made == 'true'){$u_l_option_claims_made = 'true';}
          else {$u_l_option_claims_made = 'false';}

          if($request->u_l_deductible == 'true'){$u_l_option_deductible = 'true';}
          else {$u_l_option_deductible = 'false';}

          if($request->u_l_retention == 'true'){$u_l_option_retention = 'true';}
          else {$u_l_option_retention = 'false';}
          /* umbrella liability options */
          $umbrellaliabilityoptionsData = array(
                'u_l_umbrella_liability' => $u_l_option_umbrella_liability,
                'u_l_occur' => $u_l_option_occur,
                'u_l_excess_liability' => $u_l_option_excess_liability,
                'u_l_claims_made' => $u_l_option_claims_made,
                'u_l_deductible' => $u_l_option_deductible,
                'u_l_retention' => $u_l_option_retention,
                'u_l_retention_input' => $request->u_l_retention_input,
            );
          $u_l_options  = json_encode($umbrellaliabilityoptionsData);
          $formcontrol->u_l_options = $u_l_options;
          /* considitional */
          if($request->u_l_options_addl == 'true'){$u_l_option_addl = 'true';}
          else {$u_l_option_addl = 'false';}

          if($request->u_l_options_subr == 'true'){$u_l_option_subr = 'true';}
          else {$u_l_option_subr = 'false';}
          /* umbrella liability options addl subr */
          $umbrellaliabilityoptionsaddlsubrData = array(
                'u_l_options_addl' => $u_l_option_addl,
                'u_l_options_subr' => $u_l_option_subr,
            );
          $u_l_options_addl_subr  = json_encode($umbrellaliabilityoptionsaddlsubrData);
          $formcontrol->u_l_options_addl_subr = $u_l_options_addl_subr;
          /* workers compensation */
          $formcontrol->W_C_insurance_letter = $request->W_C_insurance_letter;
          $formcontrol->W_C_propretor_yes = $request->W_C_propretor_yes;
          $formcontrol->W_C_propretor_no = $request->W_C_propretor_no;
          $formcontrol->W_C_office = $request->W_C_office;
          $formcontrol->W_C_options_addl_subr = $request->W_C_options_addl_subr;
          $formcontrol->W_C_policy_number = $request->W_C_policy_number;
          $formcontrol->W_C_eff_date = $request->W_C_eff_date;
          $formcontrol->W_C_exp_date = $request->W_C_exp_date;
          $formcontrol->W_C_statutory_limits = $request->W_C_statutory_limits;
          $formcontrol->W_C_other_input = $request->W_C_other_input;
          $formcontrol->W_C_other = $request->W_C_other;
          $formcontrol->W_C_each_accident = $request->W_C_each_accident;
          $formcontrol->W_C_ea_employee = $request->W_C_ea_employee;
          $formcontrol->W_C_policy_limit = $request->W_C_policy_limit;
          /* conditional */
          if($request->w_c_options_addl== 'true'){$w_c_options_addl = 'true';}
          else {$w_c_options_addl = 'false';}

          if($request->w_c_options_subr== 'true'){$w_c_options_subr = 'true';}
          else {$w_c_options_subr = 'false';}
          /* worker compensation options addl subr */
          $workerscompesationoptionsaddlsubrData = array(
                'w_c_options_addl' => $w_c_options_addl,
                'w_c_options_subr' => $w_c_options_subr,
            );
          $W_C_options_addl_subr  = json_encode($workerscompesationoptionsaddlsubrData);
          $formcontrol->W_C_options_addl_subr = $W_C_options_addl_subr;
          /* additional coverage */
          $formcontrol->A_C_a_insurance_letter = $request->A_C_a_insurance_letter;
          $formcontrol->A_C_a_policy_type = $request->A_C_a_policy_type;
          $formcontrol->A_C_a_options_add_insurance = $request->A_C_a_options_add_insurance;
          $formcontrol->A_C_a_options_surrogation = $request->A_C_a_options_surrogation;
          $formcontrol->A_C_a_policy_number = $request->A_C_a_policy_number;
          $formcontrol->A_C_a_eff_date = $request->A_C_a_eff_date;
          $formcontrol->A_C_a_exp_date = $request->A_C_a_exp_date;
          $formcontrol->A_C_a_coverage_limits = $request->A_C_a_coverage_limits;
          /* additional coverage 2 */
          $formcontrol->A_C_b_insurance_letter = $request->A_C_b_insurance_letter;
          $formcontrol->A_C_b_policy_type = $request->A_C_b_policy_type;
          $formcontrol->A_C_b_options_add_insurance = $request->A_C_b_options_add_insurance;
          $formcontrol->A_C_b_options_surrogation = $request->A_C_b_options_surrogation;
          $formcontrol->A_C_b_policy_number = $request->A_C_b_policy_number;
          $formcontrol->A_C_b_eff_date = $request->A_C_b_eff_date;
          $formcontrol->A_C_b_exp_date = $request->A_C_b_exp_date;
          $formcontrol->A_C_b_coverage_limits = $request->A_C_b_coverage_limits;
          /* description */
          $formcontrol->description = $request->description;

          $fechas = array();
          if($request->g_l_exp_date != null){
            array_push($fechas,$request->g_l_exp_date);
          }
          if($request->a_l_exp_date != null){
            array_push($fechas,$request->a_l_exp_date);
          }
          if($request->u_l_exp_date!= null){
            array_push($fechas,$request->u_l_exp_date);
          }
          if($request->W_C_exp_date!= null){
            array_push($fechas,$request->W_C_exp_date);
          }
          if($request->A_C_b_exp_date!= null){
            array_push($fechas,$request->A_C_b_exp_date);
          }
          if($request->A_C_a_exp_date!= null){
            array_push($fechas,$request->A_C_a_exp_date);
          }
          $count = count($fechas);
          if($count > 0){
            asort($fechas);
            $fecha_exp = array_values($fechas)[0];
          }else{
            $fecha_exp = '00/00/0000';
          }

          $formcontrol->exp_date = $fecha_exp;
          $formcontrol->save();
          Alert::success('The certificate has been created!')->persistent("Close");
          return redirect('admin');
      }

      public function sendCertificateForm($user){
        $user = User::find($user);
        return view('admin.send_certificate')->with('user',$user);
      }

      public function sendCertificate(Request $request){

        $user = User::find($request->user_id);
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
          $data_validate =$this->specialC($request->fax_client);
          $fax_data = $data_validate.'@rcfax.com';
        }else{
          $send_fax_option = false;
          $fax_data = 'none';
        }


        $email_to_me = $request->email_to_me;
        if($email_to_me == "on"){
          $email_to_me_option = true;
          $email_to_me_data = $user->email;
        }else{
          $email_to_me_data = 'none';
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

        $dataCertificate = array(
          'user_id' => $request->user_id,
          'certificate_holder_name' => $request->certificate_name,
          'address_client' => $request->address_client,
          'phone_number' => $request->phone_client,
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
          'email_to_me' => $email_to_me,
          'email_to_me_data' => $email_to_me_data,
          'fax_to_me_option' => $fax_to_me_option,
          'fax_to_me_data' => $fax_to_me_data
        );
        if(!empty($result['send_email_option'])){
            $email = $result['email_data'];
            $fax = $result['fax_data'];
            $path = $result['path'];

            Mail::send('layouts.emails.certificate', $result, function($message) use($email,$fax,$path,$result){
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
                  $message->cc($result['fax_data']);
                }

            });
            Alert::success('The Accord has been sent!')->persistent("Close");
            return redirect('admin');


          }else{

            Alert::error('The Accord has not been sent!')->persistent("Close");
            return redirect('admin');

          }

      }


      public function loadResult($option,$dataUser){

        $user = User::find($dataUser['user_id']);
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

      }

      public function getcertificate($id){
        $user = User::find($id);
        $formQuery = FormControl::where('userId','=',$user->id)->get();
        foreach($formQuery as $f){
          $form_id = $f->id;
        }
        $FormControl = FormControl::find($form_id);
        return view('admin.edit-certificate')->with('user',$user)->with('formcontrol',$FormControl);
      }
      public function userprofile ($id){
        $user = User::find($id);
        return view('admin.user-profile')->with('user',$user);
      }
      public function edituserprofile (Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name_insured;
        $user->phone = $this->specialC($request->phone_insured);
        $user->address = $request->address_insured;
        $user->email = $request->email_insured;
        $user->dba_name = $request->I_I_dba_name;
        $user->city = $request->I_I_city;
        $user->state = $request->I_I_state;
        $user->zip_code = $request->I_I_zip_code;
        $user->userType = "user";
        if($request->password_insured != "" || $request->password_insured_repeat != ""){
          if($request->password_insured == $request->password_insured_repeat){
            $user->password = bcrypt($request->password_insured);
          }
        }
        $user->save();

        return redirect('admin');
          }

      public function getuseradmin (){
        $userType = Auth::user()->userType;
          if($userType == "admin" ){
            $admins = User::where('userType','=','admin')->get();
            $users = User::where('userType','=','agency')->get();
            return view('admin.admin-settings')->with('users',$users)->with('admins',$admins);
          }else{
            return redirect('/admin');
          }

      }

      public function createAdmin($option){
        if($option == 'admin'){
          $option_user = 'admin';
        }elseif ($option == 'user') {
          $option_user = 'agency';
        }else{
          $option_user = 'agency';
        }

        return view('admin.add-admin')->with('option_user', $option_user);
      }

      public function deleteAdmin($option){
        $user = User::find($option);
        $user->delete();
        return redirect('admin/admin-settings');
      }

      public function addAdmin (Request $request){

        $user = new User();
        $user->name = $request->name_insured;
        $user->phone = $request->phone_insured;
        $user->address = $request->address_insured;
        $user->email = $request->email_insured;
        $user->userType = $request->option_user;
        $user->password = bcrypt($request->password_insured);
        $user->save();

        return redirect('admin/admin-settings');
      }
      public function editcertificate (Request $request, $id){
        /* user */
        $user = User::find($id);
        $user->name = $request->name_insured;
        $user->phone = $this->specialC($request->phone_insured);
        $user->address = $request->address_insured;

        $user->email = $request->email_insured;
        $user->userType = "user";
        if($request->password_insured != "" || $request->password_insured_repeat != ""){
          if($request->password_insured == $request->password_insured_repeat){
            $user->password = bcrypt($request->password_insured);
          }
        }
        $user->dba_name = $request->I_I_dba_name;
        $user->city = $request->I_I_city;
        $user->state = $request->I_I_state;
        $user->zip_code = $request->I_I_zip_code;
        $user->save();

        $formQuery = FormControl::where('userId','=',$user->id)->get();
        foreach($formQuery as $f){
          $form_id = $f->id;
        }
        $formcontrol = FormControl::find($form_id);
        $formcontrol->userId = $user->id;
        /* contact info agency */
        $formcontrol->C_I_name = $request->name;
        $formcontrol->C_I_phone = $request->phone;
        $formcontrol->C_I_email = $request->email;
        $formcontrol->C_I_fax = $request->fax;
        $formcontrol->C_I_producer_id = $request->customer_id;
        /* producer information */
        $formcontrol->P_I_name = $request->P_I_name;
        $formcontrol->P_I_dba_name = $request->dba_name;
        $formcontrol->P_I_address = $request->address;
        $formcontrol->P_I_city = $request->city;
        $formcontrol->P_I_dba_state = $request->state;
        $formcontrol->P_I_dba_zip_code = $request->zip_code;
        /* insurance */
        $insuranceData = array(
              'ensured_a' => $request->ensured_a,
              'naic_a' => $request->naic_a,
              'ensured_b' => $request->ensured_b,
              'naic_b' => $request->naic_b,
              'ensured_c' => $request->ensured_c,
              'naic_c' => $request->naic_c,
              'ensured_d' => $request->ensured_d,
              'naic_d' => $request->naic_d,
              'ensured_e' => $request->ensured_e,
              'naic_e' => $request->naic_e,
              'ensured_f' => $request->ensured_f,
              'naic_f' => $request->naic_f,
            );
          $insurance  = json_encode($insuranceData);
          $formcontrol->insurance = $insurance;
          /* general liability */
          $generalliabilityData = array(
              'g_l_insurance_letter' => $request->g_l_insurance_letter,
              'g_l_eff_date' => $request->g_l_eff_date,
              'g_l_exp_date' => $request->g_l_exp_date,
              'g_l_policy_number' => $request->g_l_policy_number,
              'g_l_each_ocurrence' => $request->g_l_each_ocurrence,
              'g_l_rented_permises' => $request->g_l_rented_permises,
              'g_l_medical_expenses' => $request->g_l_medical_expenses,
              'g_l_personal_adv' => $request->g_l_personal_adv,
              'g_l_general_aggregate' => $request->g_l_general_aggregate,
              'g_l_product_comp' => $request->g_l_product_comp,
              'g_l_other2' => $request->g_l_other2,
              'g_l_other_input2' => $request->g_l_other_input2,
            );
          $generalliability  = json_encode($generalliabilityData);
          $formcontrol->general_liability = $generalliability;
          /* considitional */
          if($request->g_l_commercial == 'true'){$g_l_option_commercial = 'true';}
          else {$g_l_option_commercial = 'false';}

          if($request->g_l_claims_made == 'true'){$g_l_option_claims_made = 'true';}
          else {$g_l_option_claims_made = 'false';}

          if($request->g_l_occur == 'true'){$g_l_option_occur = 'true';}
          else {$g_l_option_occur = 'false';}
          /* general liability options */
          $optionsData = array(
              'g_l_commercial' => $g_l_option_commercial,
              'g_l_claims_made' => $g_l_option_claims_made,
              'g_l_occur' => $g_l_option_occur,
            );
          $g_l_options  = json_encode($optionsData);
          $formcontrol->g_l_options = $g_l_options;
          /* considitional */
          if($request->g_l_policy == 'true'){$g_l_option_policy = 'true';}
          else {$g_l_option_policy = 'false';}

          if($request->g_l_project == 'true'){$g_l_option_project = 'true';}
          else {$g_l_option_project = 'false';}

          if($request->g_l_loc == 'true'){$g_l_option_loc = 'true';}
          else {$g_l_option_loc = 'false';}

          if($request->g_l_other == 'true'){$g_l_option_other = 'true';}
          else {$g_l_option_other = 'false';}
          /* general liability options limit */
          $optionslimitperData = array(
              'g_l_policy' => $g_l_option_policy,
              'g_l_project' => $g_l_option_project,
              'g_l_loc' => $g_l_option_loc,
              'g_l_other' => $g_l_option_other,
              'g_l_other_input' => $request->g_l_other_input,
            );
          $g_l_options_limit_per  = json_encode($optionslimitperData);
          $formcontrol->g_l_options_limit_per = $g_l_options_limit_per;

          /* considitional */
          if($request->g_l_option_addl == 'true'){$g_l_option_addl = 'true';}
          else {$g_l_option_addl = 'false';}

          if($request->g_l_option_subr == 'true'){$g_l_option_subr = 'true';}
          else {$g_l_option_subr = 'false';}

          /* general liability options addl subr */
          $optionsaddlsubrData = array(
              'g_l_options_addl' => $g_l_option_addl,
              'g_l_options_subr' => $g_l_option_subr,
            );
          $g_l_options_addl_subr  = json_encode($optionsaddlsubrData);
          $formcontrol->g_l_options_addl_subr = $g_l_options_addl_subr;
          /* auto liability */
          $autoliabilityData = array(
              'a_l_insurance_letter' => $request->a_l_insurance_letter,
              'a_l_policy_number' => $request->a_l_policy_number,
              'a_l_eff_date' => $request->a_l_eff_date,
              'a_l_exp_date' => $request->a_l_exp_date,
              'a_l_combined_single' => $request->a_l_combined_single,
              'a_l_bodily_person' => $request->a_l_bodily_person,
              'a_l_bodily_accident' => $request->a_l_bodily_accident,
              'a_l_property_damage' => $request->a_l_property_damage,
              'a_l_other2' => $request->a_l_other2,
              'a_l_other_input2' => $request->a_l_other_input2,
              'a_l_other3' => $request->a_l_other3,
              'a_l_other_input3' => $request->a_l_other_input3,
            );
            $autoliability  = json_encode($autoliabilityData);
            $formcontrol->auto_liability = $autoliability;
            /* considitional */
            if($request->a_l_any_auto == 'true'){$a_l_option_any_auto = 'true';}
            else {$a_l_option_any_auto = 'false';}

            if($request->a_l_all_owned == 'true'){$a_l_option_all_owned = 'true';}
            else {$a_l_option_all_owned = 'false';}

            if($request->a_l_sheduled == 'true'){$a_l_option_sheduled = 'true';}
            else {$a_l_option_sheduled = 'false';}

            if($request->a_l_home_autos == 'true'){$a_l_option_home_autos = 'true';}
            else {$a_l_option_home_autos = 'false';}

            if($request->a_l_hired_autos == 'true'){$a_l_option_hired_autos = 'true';}
            else {$a_l_option_hired_autos = 'false';}

            if($request->a_l_owned_autos== 'true'){$a_l_option_owned_autos = 'true';}
            else {$a_l_option_owned_autos = 'false';}

            if($request->a_l_other== 'true'){$a_l_option_other = 'true';}
            else {$a_l_option_other = 'false';}

          /* auto liability options */
          $optionsautoliabilityData = array(
              'a_l_any_auto' => $a_l_option_any_auto,
              'a_l_all_owned' => $a_l_option_all_owned,
              'a_l_sheduled' => $a_l_option_sheduled,
              'a_l_home_autos' => $a_l_option_home_autos,
              'a_l_hired_autos' => $a_l_option_hired_autos,
              'a_l_owned_autos' => $a_l_option_owned_autos,
              'a_l_other' => $a_l_option_other,
              'a_l_other_input' => $request->a_l_other_input,
            );
          $a_l_options  = json_encode($optionsautoliabilityData);
          $formcontrol->a_l_options = $a_l_options;
          /* considitional */
          if($request->a_l_options_addl == 'true'){$a_l_option_addl = 'true';}
          else {$a_l_option_addl = 'false';}

          if($request->a_l_options_subr == 'true'){$a_l_option_subr = 'true';}
          else {$a_l_option_subr = 'false';}

          /* auto liability options addl subr */
          $options_a_l_addlsubrData = array(
              'a_l_options_addl' => $a_l_option_addl,
              'a_l_options_subr' => $a_l_option_subr,
            );
          $a_l_options_addl_subr  = json_encode($options_a_l_addlsubrData);
          $formcontrol->a_l_options_addl_subr = $a_l_options_addl_subr;
          /* umbrella liability */
          $umbrellaliabilityData = array(
                'u_l_insurance_letter' => $request->u_l_insurance_letter,
                'u_l_policy_number' => $request->u_l_policy_number,
                'u_l_eff_date' => $request->u_l_eff_date,
                'u_l_exp_date' => $request->u_l_exp_date,
                'u_l_each_occurent' => $request->u_l_each_occurent,
                'u_l_aggregate' => $request->u_l_aggregate,
                'u_l_other' => $request->u_l_other,
                'u_l_other_input' => $request->u_l_other_input,
                'u_l_other2' => $request->u_l_other2,
                'u_l_other_input2' => $request->u_l_other_input2,
            );
          $umbrellaliability  = json_encode($umbrellaliabilityData);
          $formcontrol->umbrella_liability = $umbrellaliability;
          /* considitional */
          if($request->u_l_umbrella_liability == 'true'){$u_l_option_umbrella_liability = 'true';}
          else {$u_l_option_umbrella_liability = 'false';}

          if($request->u_l_occur == 'true'){$u_l_option_occur = 'true';}
          else {$u_l_option_occur = 'false';}

          if($request->u_l_excess_liability == 'true'){$u_l_option_excess_liability = 'true';}
          else {$u_l_option_excess_liability = 'false';}

          if($request->u_l_claims_made == 'true'){$u_l_option_claims_made = 'true';}
          else {$u_l_option_claims_made = 'false';}

          if($request->u_l_deductible == 'true'){$u_l_option_deductible = 'true';}
          else {$u_l_option_deductible = 'false';}

          if($request->u_l_retention == 'true'){$u_l_option_retention = 'true';}
          else {$u_l_option_retention = 'false';}
          /* umbrella liability options */
          $umbrellaliabilityoptionsData = array(
                'u_l_umbrella_liability' => $u_l_option_umbrella_liability,
                'u_l_occur' => $u_l_option_occur,
                'u_l_excess_liability' => $u_l_option_excess_liability,
                'u_l_claims_made' => $u_l_option_claims_made,
                'u_l_deductible' => $u_l_option_deductible,
                'u_l_retention' => $u_l_option_retention,
                'u_l_retention_input' => $request->u_l_retention_input,
            );
          $u_l_options  = json_encode($umbrellaliabilityoptionsData);
          $formcontrol->u_l_options = $u_l_options;
          /* considitional */
          if($request->u_l_options_addl == 'true'){$u_l_option_addl = 'true';}
          else {$u_l_option_addl = 'false';}

          if($request->u_l_options_subr == 'true'){$u_l_option_subr = 'true';}
          else {$u_l_option_subr = 'false';}
          /* umbrella liability options addl subr */
          $umbrellaliabilityoptionsaddlsubrData = array(
                'u_l_options_addl' => $u_l_option_addl,
                'u_l_options_subr' => $u_l_option_subr,
            );
          $u_l_options_addl_subr  = json_encode($umbrellaliabilityoptionsaddlsubrData);
          $formcontrol->u_l_options_addl_subr = $u_l_options_addl_subr;
          /* workers compensation */
          $formcontrol->W_C_insurance_letter = $request->W_C_insurance_letter;
          $formcontrol->W_C_propretor_yes = $request->W_C_propretor_yes;
          $formcontrol->W_C_propretor_no = $request->W_C_propretor_no;
          $formcontrol->W_C_office = $request->W_C_office;
          $formcontrol->W_C_options_addl_subr = $request->W_C_options_addl_subr;
          $formcontrol->W_C_policy_number = $request->W_C_policy_number;
          $formcontrol->W_C_eff_date = $request->W_C_eff_date;
          $formcontrol->W_C_exp_date = $request->W_C_exp_date;
          $formcontrol->W_C_statutory_limits = $request->W_C_statutory_limits;
          $formcontrol->W_C_other_input = $request->W_C_other_input;
          $formcontrol->W_C_other = $request->W_C_other;
          $formcontrol->W_C_each_accident = $request->W_C_each_accident;
          $formcontrol->W_C_ea_employee = $request->W_C_ea_employee;
          $formcontrol->W_C_policy_limit = $request->W_C_policy_limit;
          /* conditional */
          if($request->w_c_options_addl== 'true'){$w_c_options_addl = 'true';}
          else {$w_c_options_addl = 'false';}

          if($request->w_c_options_subr== 'true'){$w_c_options_subr = 'true';}
          else {$w_c_options_subr = 'false';}
          /* worker compensation options addl subr */
          $workerscompesationoptionsaddlsubrData = array(
                'w_c_options_addl' => $w_c_options_addl,
                'w_c_options_subr' => $w_c_options_subr,
            );
          $W_C_options_addl_subr  = json_encode($workerscompesationoptionsaddlsubrData);
          $formcontrol->W_C_options_addl_subr = $W_C_options_addl_subr;
          /* additional coverage */
          $formcontrol->A_C_a_insurance_letter = $request->A_C_a_insurance_letter;
          $formcontrol->A_C_a_policy_type = $request->A_C_a_policy_type;
          $formcontrol->A_C_a_options_add_insurance = $request->A_C_a_options_add_insurance;
          $formcontrol->A_C_a_options_surrogation = $request->A_C_a_options_surrogation;
          $formcontrol->A_C_a_policy_number = $request->A_C_a_policy_number;
          $formcontrol->A_C_a_eff_date = $request->A_C_a_eff_date;
          $formcontrol->A_C_a_exp_date = $request->A_C_a_exp_date;
          $formcontrol->A_C_a_coverage_limits = $request->A_C_a_coverage_limits;
          /* additional coverage 2 */
          $formcontrol->A_C_b_insurance_letter = $request->A_C_b_insurance_letter;
          $formcontrol->A_C_b_policy_type = $request->A_C_b_policy_type;
          $formcontrol->A_C_b_options_add_insurance = $request->A_C_b_options_add_insurance;
          $formcontrol->A_C_b_options_surrogation = $request->A_C_b_options_surrogation;
          $formcontrol->A_C_b_policy_number = $request->A_C_b_policy_number;
          $formcontrol->A_C_b_eff_date = $request->A_C_b_eff_date;
          $formcontrol->A_C_b_exp_date = $request->A_C_b_exp_date;
          $formcontrol->A_C_b_coverage_limits = $request->A_C_b_coverage_limits;
          /* description */
          $formcontrol->description = $request->description;

          $fechas = array();
          if($request->g_l_exp_date != null){
            array_push($fechas,$request->g_l_exp_date);
          }
          if($request->a_l_exp_date != null){
            array_push($fechas,$request->a_l_exp_date);
          }
          if($request->u_l_exp_date!= null){
            array_push($fechas,$request->u_l_exp_date);
          }
          if($request->W_C_exp_date!= null){
            array_push($fechas,$request->W_C_exp_date);
          }
          if($request->A_C_b_exp_date!= null){
            array_push($fechas,$request->A_C_b_exp_date);
          }
          if($request->A_C_a_exp_date!= null){
            array_push($fechas,$request->A_C_a_exp_date);
          }


          $count = count($fechas);
          if($count > 0){
            asort($fechas);
            $fecha_exp = array_values($fechas)[0];
          }else{
            $fecha_exp = '00/00/0000';
          }

          $formcontrol->exp_date = $fecha_exp;
          $formcontrol->save();


          return redirect('admin');
      }
}
