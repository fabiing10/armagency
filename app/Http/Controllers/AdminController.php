<?php

namespace App\Http\Controllers;

use App\User;
use App\FormControl;
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
        /* user */
        $user = new User();
        $user->name = $request->name_insured;
        $user->phone = $request->phone_insured;
        $user->address = $request->address_insured;
        $user->email = $request->email_insured;
        $user->userType = "user";
        $user->password = bcrypt($request->password_insured);
        $user->save();

        $formcontrol = new FormControl();
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
          if($request->g_l_options_addl == 'true'){$g_l_option_addl = 'true';}
          else {$g_l_option_addl = 'false';}

          if($request->g_l_options_subr == 'true'){$g_l_option_subr = 'true';}
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
              'a_l_eff_date' => $request->g_l_eff_date,
              'a_l_exp_date' => $request->g_l_exp_date,
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
          $formcontrol->W_C_propretor = $request->W_C_propretor;
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
          $formcontrol->A_C_a_options_add_insurance_surrogation = $request->A_C_a_options_add_insurance_surrogation;
          $formcontrol->A_C_a_policy_number = $request->A_C_a_policy_number;
          $formcontrol->A_C_a_eff_date = $request->A_C_a_eff_date;
          $formcontrol->A_C_a_exp_date = $request->A_C_a_exp_date;
          $formcontrol->A_C_a_coverage_limits = $request->A_C_a_coverage_limits;
          /* additional coverage 2 */
          $formcontrol->A_C_b_insurance_letter = $request->A_C_b_insurance_letter;
          $formcontrol->A_C_b_policy_type = $request->A_C_b_policy_type;
          $formcontrol->A_C_b_options_add_insurance_surrogation = $request->A_C_b_options_add_insurance_surrogation;
          $formcontrol->A_C_b_policy_number = $request->A_C_b_policy_number;
          $formcontrol->A_C_b_eff_date = $request->A_C_b_eff_date;
          $formcontrol->A_C_b_exp_date = $request->A_C_b_exp_date;
          $formcontrol->A_C_b_coverage_limits = $request->A_C_b_coverage_limits;
          /* description */
          $formcontrol->description = $request->description;

          $formcontrol->save();

          return $formcontrol;
      }


      public function loadResult($id){
        $user = User::find($id);
        $formQuery = FormControl::where('userId','=',$user->id)->get();
        foreach($formQuery as $f){
          $form_id = $f->id;
        }
        $FormControl = FormControl::find($form_id);
        return view('admin.table')->with('user',$user)->with('formcontrol',$FormControl);

      }
}
