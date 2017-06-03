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
        $user = new User();
        $user->name = $request->name;
        $user->save();



        $formcontrol = new FormControl();
        $formcontrol->user_id = $user->id;
          $datos = $request->name;
          $datos2 = $request->phone;
          $datos3 = $request->fax;
          $datos4 = $request->email;
          $datos5 = $request->customer_id;
          $datos6 = $request->P_I_name;
          $datos7 = $request->dba_name;
          $datos8 = $request->address;
          $datos8 = $request->city;
          $datos9 = $request->state;
          $datos10 = $request->zip_code;

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
          $datos11  = json_encode($insuranceData);

          $generalliabilityData = array(
              'g_l_insurance_letter' => $request->g_l_insurance_letter,
              'g_l_options' => $request->g_l_options,
              'g_l_general_aggregate_options' => $request->general_aggregate_options,
              'g_l_options_addl_subr' => $request->g_l_options_addl_subr,
              'g_l_eff_date' => $request->g_l_eff_date,
              'g_l_exp_date' => $request->g_l_exp_date,
              'g_l_each_ocurrence' => $request->g_l_each_ocurrence,
              'g_l_rented_permises' => $request->g_l_rented_permises,
              'g_l_medical_expenses' => $request->g_l_medical_expenses,
              'g_l_personal_adv' => $request->g_l_personal_adv,
              'g_l_general_aggregate' => $request->g_l_general_aggregate,
              'g_l_product_comp' => $request->g_l_product_comp,
              'g_l_product_comp2' => $request->g_l_product_comp2,
              'g_l_other' => $request->g_l_other,
            );

          $datos12  = json_encode($generalliabilityData);


          $autoliabilityData = array(
              'a_l_insurance_letter' => $request->a_l_insurance_letter,
              'a_l_options' => $request->a_l_options,
              'a_l_options_addl_subr' => $request->a_l_options_addl_subr,
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

            $datos13  = json_encode($autoliabilityData);

          $umbrellaliabilityData = array(
                'u_l_insurance_letter' => $request->u_l_insurance_letter,
                'u_l_options' => $request->u_l_options,
                'u_l_options_addl_subr' => $request->u_l_options_addl_subr,
                'u_l_policy_number' => $request->u_l_policy_number,
                'u_l_eff_date' => $request->u_l_eff_date,
                'u_l_exp_date' => $request->u_l_exp_date,
                'u_l_each_occurent' => $request->u_l_each_occurent,
                'u_l_aggregate' => $request->u_l_aggregate,
                'u_l_other' => $request->u_l_other,
                'u_l_other2' => $request->u_l_other2,
            );

          $datos14  = json_encode($umbrellaliabilityData);

          $datos15 = $request->W_C_insurance_letter;
          $datos16 = $request->W_C_propretor;

          $officeData = array(
                'W_C_office' => $request->W_C_office,
                'W_C_office2' => $request->W_C_office2,
                'W_C_office3' => $request->W_C_office3,
            );
          $datos17  = json_encode($officeData);
          $datos18 = $request->W_C_options_addl_subr;
          $datos18 = $request->W_C_policy_number;
          $datos19 = $request->W_C_eff_date;
          $datos20 = $request->W_C_exp_date;
          $datos21 = $request->W_C_statutory_limits;
          $datos22 = $request->W_C_other;
          $datos23 = $request->W_C_each_accident;
          $datos24 = $request->W_C_ea_employee;
          $datos25 = $request->W_C_policy_limit;

          $datos26 = $request->A_C_a_insurance_letter;
          $datos27 = $request->A_C_a_policy_type;
          $datos28 = $request->A_C_a_options_add_insurance_surrogation;
          $datos29 = $request->A_C_a_policy_number;
          $datos30 = $request->A_C_a_eff_date;
          $datos31 = $request->A_C_a_exp_date;
          $datos31 = $request->A_C_a_coverage_limits;

          $datos32 = $request->A_C_b_insurance_letter;
          $datos33 = $request->A_C_b_policy_type;
          $datos34 = $request->A_C_b_options_add_insurance_surrogation;
          $datos35 = $request->A_C_b_policy_number;
          $datos36 = $request->A_C_b_eff_date;
          $datos37 = $request->A_C_b_exp_date;
          $datos38 = $request->A_C_b_coverage_limits;

          $datos39 = $request->description;

          $formcontrol->save();

          var_dump($datos15);
      }
}
