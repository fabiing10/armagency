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
              'g_l_other' => $request->g_l_other,
              'g_l_other_input' => $request->g_l_other_input,
            );
          $generalliability  = json_encode($generalliabilityData);
          $formcontrol->general_liability = $generalliability;
          /* general liability options */
          $optionsData = array(
              'g_l_commercial' => $request->g_l_commercial,
              'g_l_claims_made' => $request->g_l_claims_made,
              'g_l_claims_made' => $request->g_l_claims_made,
            );
          $g_l_options  = json_encode($optionsData);
          $formcontrol->g_l_options = $g_l_options;

          /* general liability options limit */
          $optionslimitperData = array(
              'g_l_policy' => $request->g_l_policy,
              'g_l_project' => $request->g_l_project,
              'g_l_loc' => $request->g_l_loc,
              'g_l_other' => $request->g_l_other,
              'g_l_other_input2' => $request->g_l_other_input2,
            );
          $g_l_options_limit_per  = json_encode($optionslimitperData);
          $formcontrol->g_l_options_limit_per = $g_l_options_limit_per;
          /* general liability options addl subr */
          $optionsaddlsubrData = array(
              'g_l_options_addl' => $request->g_l_options_addl,
              'g_l_options_subr' => $request->g_l_options_subr,
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
              'a_l_other' => $request->a_l_other,
              'a_l_other2' => $request->a_l_other2,
            );
            $autoliability  = json_encode($autoliabilityData);
            $formcontrol->auto_liability = $autoliability;
          /* auto liability options */
          $optionsautoliabilityData = array(
              'a_l_any_auto' => $request->a_l_any_auto,
              'a_l_all_owned' => $request->a_l_all_owned,
              'a_l_sheduled' => $request->a_l_sheduled,
              'a_l_home_autos' => $request->a_l_home_autos,
              'a_l_hired_autos' => $request->a_l_hired_autos,
              'a_l_owned_autos' => $request->a_l_owned_autos,
              'a_l_other' => $request->a_l_other,
              'a_l_other_input' => $request->a_l_other_input,
            );
          $a_l_options  = json_encode($optionsautoliabilityData);
          $formcontrol->a_l_options = $a_l_options;
          /* auto liability options addl subr */
          $options_a_l_addlsubrData = array(
              'a_l_options_addl' => $request->a_l_options_addl,
              'a_l_options_subr' => $request->a_l_options_subr,
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
                'u_l_other2' => $request->u_l_other2,
            );
          $umbrellaliability  = json_encode($umbrellaliabilityData);
          $formcontrol->umbrella_liability = $umbrellaliability;
          /* umbrella liability options */
          $umbrellaliabilityoptionsData = array(
                'u_l_umbrella_liability' => $request->u_l_umbrella_liability,
                'u_l_occur' => $request->u_l_occur,
                'u_l_excess_liability' => $request->u_l_excess_liability,
                'u_l_claims_made' => $request->u_l_claims_made,
                'u_l_deductible' => $request->u_l_deductible,
                'u_l_retention' => $request->u_l_retention,
                'u_l_retention_input' => $request->u_l_retention_input,
            );
          $u_l_options  = json_encode($umbrellaliabilityoptionsData);
          $formcontrol->u_l_options = $u_l_options;
          /* umbrella liability options addl subr */
          $umbrellaliabilityoptionsaddlsubrData = array(
                'u_l_options_addl' => $request->u_l_options_addl,
                'u_l_options_subr' => $request->u_l_options_subr,
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
          $formcontrol->W_C_other = $request->W_C_other;
          $formcontrol->W_C_each_accident = $request->W_C_each_accident;
          $formcontrol->W_C_ea_employee = $request->W_C_ea_employee;
          $formcontrol->W_C_policy_limit = $request->W_C_policy_limit;
          /*  */
          $workerscompesationoptionsaddlsubrData = array(
                'w_c_options_addl' => $request->u_l_options_addl,
                'w_c_options_subr' => $request->u_l_options_subr,
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
}
