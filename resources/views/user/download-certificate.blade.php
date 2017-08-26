

  <style media="screen">
  html{margin:10px 35px}
  * {
    line-height: 9px !important;
    font-size: 11px !important;

  }
  .certificate_field{
    text-transform: uppercase;
    text-align: left;
    padding: 1px;
    margin-left: 30px;

  }
  table, th, td {
    border: 0px solid black;
    border-collapse: collapse;
    }
    th, td {
        padding: 2px 5px;
        text-align: left;
        vertical-align: top;
        font-size: 16px;
    }
    table{
      width: 100%;
    }
    .m-0{
      margin: 0px !important;
    }
    .p-0{
      padding: 0px !important;
    }
    body{
      background: white !important;
      margin: 0px !important;
      padding: 0px !important;
    }
    .center{
      text-align: center;
    }
    .l-height15{
      line-height: 15px;
    }
    .form-control {
    display: -webkit-inline-box !important;
    width: 95% !important;
    height: 34px !important;
  }
  </style>


<?php
// insurance json
$ensuredResult = json_decode($formcontrol->insurance);
  $Ensured_a = $ensuredResult->ensured_a;
  $Naic_a = $ensuredResult->naic_a;
  $Ensured_b = $ensuredResult->ensured_b;
  $Naic_b = $ensuredResult->naic_b;
  $Ensured_c = $ensuredResult->ensured_c;
  $Naic_c = $ensuredResult->naic_c;
  $Ensured_d = $ensuredResult->ensured_d;
  $Naic_d = $ensuredResult->naic_d;
  $Ensured_e = $ensuredResult->ensured_e;
  $Naic_e = $ensuredResult->naic_e;
  $Ensured_f = $ensuredResult->ensured_f;
  $Naic_f = $ensuredResult->naic_f;
// general libiality json
$generalliabilityResult = json_decode($formcontrol->general_liability);
  $glinsuranceletter = $generalliabilityResult->g_l_insurance_letter;
  $gleffdate = $generalliabilityResult->g_l_eff_date;
  $glexpdate = $generalliabilityResult->g_l_exp_date;
  $glpolicynumber = $generalliabilityResult->g_l_policy_number;
  $gleachocurrence = $generalliabilityResult->g_l_each_ocurrence;
  $glrentedpermises = $generalliabilityResult->g_l_rented_permises;
  $glmedicalexpenses = $generalliabilityResult->g_l_medical_expenses;
  $glpersonaladv = $generalliabilityResult->g_l_personal_adv;
  $glgeneralaggregate = $generalliabilityResult->g_l_general_aggregate;
  $glproductcomp = $generalliabilityResult->g_l_product_comp;
  $glother = $generalliabilityResult->g_l_other2;
  $glotherinput = $generalliabilityResult->g_l_other_input2;
// general libiality options json
$generalliabilityoptionsResult = json_decode($formcontrol->g_l_options);
  $gloptioncommercial = $generalliabilityoptionsResult->g_l_commercial;
  $gloptionclaims_made = $generalliabilityoptionsResult->g_l_claims_made;
  $gloptionoccur = $generalliabilityoptionsResult->g_l_occur;
// general libiality options limit per json
$generalliabilityoptionsperResult = json_decode($formcontrol->g_l_options_limit_per);
  $gloptionpolicy = $generalliabilityoptionsperResult->g_l_policy;
  $gloptionproject = $generalliabilityoptionsperResult->g_l_project;
  $gloptionloc = $generalliabilityoptionsperResult->g_l_loc;
  $glother2 = $generalliabilityoptionsperResult->g_l_other;
  $glotherinput2 = $generalliabilityoptionsperResult->g_l_other_input;
// general libiality options addl subr json
$gloptionsaddlsubrResult = json_decode($formcontrol->g_l_options_addl_subr);
  $gloptionaddl = $gloptionsaddlsubrResult->g_l_options_addl;
  $gloptionsubr = $gloptionsaddlsubrResult->g_l_options_subr;
// auto libiality json
$autolliabilityResult = json_decode($formcontrol->auto_liability);
  $alinsuranceletter = $autolliabilityResult->a_l_insurance_letter;
  $alpolicynumber = $autolliabilityResult->a_l_policy_number;
  $aleffdate = $autolliabilityResult->a_l_eff_date;
  $alexpdate = $autolliabilityResult->a_l_exp_date;
  $alcombinedsingle = $autolliabilityResult->a_l_combined_single;
  $albodilyperson = $autolliabilityResult->a_l_bodily_person;
  $albodilyaccident = $autolliabilityResult->a_l_bodily_accident;
  $alpropertydamage = $autolliabilityResult->a_l_property_damage;
  $alother2 = $autolliabilityResult->a_l_other2;
  $alotherinput2 = $autolliabilityResult->a_l_other_input2;
  $alother3 = $autolliabilityResult->a_l_other3;
  $alotherinput3 = $autolliabilityResult->a_l_other_input3;
// Auto libiality options json
$aloptionsResult = json_decode($formcontrol->a_l_options);
  $aloptionanyauto = $aloptionsResult->a_l_any_auto;
  $aloptionallowned = $aloptionsResult->a_l_all_owned;
  $aloptionsheduled = $aloptionsResult->a_l_sheduled;
  $aloptionalhomeautos = $aloptionsResult->a_l_home_autos;
  $aloptionalhiredautos = $aloptionsResult->a_l_hired_autos;
  $aloptionalownedautos = $aloptionsResult->a_l_owned_autos;
  $aloptionother = $aloptionsResult->a_l_other;
  $aloptionotherinput = $aloptionsResult->a_l_other_input;
// Auto libiality options addl subr json
$aloptionsaddlsubrResult = json_decode($formcontrol->a_l_options_addl_subr);
  $aloptionaddl = $aloptionsaddlsubrResult->a_l_options_addl;
  $aloptionsubr = $aloptionsaddlsubrResult->a_l_options_subr;
// auto libiality json
$umbrellaliabilityResult = json_decode($formcontrol->umbrella_liability);
  $ulinsuranceletter = $umbrellaliabilityResult->u_l_insurance_letter;
  $ulpolicynumber = $umbrellaliabilityResult->u_l_policy_number;
  $uleffdate = $umbrellaliabilityResult->u_l_eff_date;
  $ulexpdate = $umbrellaliabilityResult->u_l_exp_date;
  $uleachoccurent = $umbrellaliabilityResult->u_l_each_occurent;
  $ulaggregate = $umbrellaliabilityResult->u_l_aggregate;
  $ulother = $umbrellaliabilityResult->u_l_other;
  $ulotherinput = $umbrellaliabilityResult->u_l_other_input;
  $ulother2 = $umbrellaliabilityResult->u_l_other2;
  $ulotherinput2 = $umbrellaliabilityResult->u_l_other_input2;
// umbrella liability options
$uloptionsResult = json_decode($formcontrol->u_l_options);
  $uloptionumbrellaliability = $uloptionsResult->u_l_umbrella_liability;
  $uloptionoccur = $uloptionsResult->u_l_occur;
  $uloptionexcessliability = $uloptionsResult->u_l_excess_liability;
  $uloptionclaimsmade = $uloptionsResult->u_l_claims_made;
  $uloptiondeductible = $uloptionsResult->u_l_deductible;
  $uloptionretention = $uloptionsResult->u_l_retention;
  $uloptionretentioninput = $uloptionsResult->u_l_retention_input;

// umbrella liability options addl subr
$uloptionsaddlsubrResult = json_decode($formcontrol->u_l_options_addl_subr);
  $uloptionaddl = $uloptionsaddlsubrResult->u_l_options_addl;
  $uloptionsubr = $uloptionsaddlsubrResult->u_l_options_subr;

$wcoptionsaddlsubrResult = json_decode($formcontrol->W_C_options_addl_subr);
  $wcoptionaddl = $wcoptionsaddlsubrResult->w_c_options_addl;
  $wcoptionsubr = $wcoptionsaddlsubrResult->w_c_options_subr;

?>

<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->

  <table style="position:relative;top:15px;">
    <td width="100">
      <img src="../public/assets/plugins/images/acord.png" width="150" alt="" class="light-logo" />
    <td style="vertical-align:bottom;">
      <h1 style="text-align:center; font-size:30px !important; vertical-align:bottom">CERTIFICATE OF LIABILITY INSURANCE</h1>
    </td>
    <td style="width:130px; text-align:right !important; padding-right:4px;">
        <table style="width:130px; border:1px solid;position:relative;top:10px !important;" border="1">
          <tr style="border:1px solid;">
            <td style="width:130px; border:1px solid;">DATE (MM/DD/YYYY)</td>
          </tr>
          <tr>
            <td><center>{{\Carbon\Carbon::parse(date('Y/m/d'))->format('m/d/Y')}}</center></td>
          </tr>
        </table>

    </td>

  </table>
  <div class="row">
  <table style="width:1040px !important; border:1px solid;">

    <tr>
      <th colspan="2" style="border-bottom:2px solid; font-size:15px !important; padding-left: 5px!important; padding-right:5px !important;">THIS CERTIFICATE IS ISSUED AS A MATTER OF INFORMATION ONLY AND CONFERS NO RIGHTS UPON THE CERTIFICATE HOLDER. THIS CERTIFICATE DOES NOT AFFIRMATIVELY OR NEGATIVELY AMEND, EXTEND OR ALTER THE COVERAGE AFFORDED BY THE POLICIES  BELOW. THIS CERTIFICATE OF INSURANCE DOES NOT CONSTITUTE A CONTRACT BETWEEN THE ISSUING INSURER(S), AUTHORIZED REPRESENTATIVE OR PRODUCER, AND THE CERTIFICATE HOLDER.</th>
    </tr>
    <tr>
      <td colspan="2" style="border-bottom:2px solid; font-weight:bold; font-size:15px !important;" >IMPORTANT: if the certificate holder is an ADDITIONAL INSURED. the policy(ies) must be endorsed. if SUBROGATION IS WAIVED, subject to the terms and conditions of the policy, certain policies may require and endorsement. A statement on this certificate does not confer rights to the certificate holder in lieu of such endorsement(s).</td>
    </tr>
      <tr>
      <td style=" width: 500px !important; border-bottom: 1px solid; border-right:1px solid;"><b>PRODUCDER</b><br>
        {{$formcontrol->P_I_name}}<br>
        {{$formcontrol->P_I_address}}<br>
        {{$formcontrol->P_I_city}},{{$formcontrol->P_I_dba_state}} {{$formcontrol->P_I_dba_zip_code}}
      </td>
        <td style="margin:0px !important; padding:0px !important;">
        <table border="1" style="">
          <tr>
            <td class="l-height15" style="border-bottom:1px solid !important; font-weight:bold;">
            CONTACT NAME:
            </td>
            <td colspan="3" style="border-bottom:1px solid !important;">
              {{$formcontrol->C_I_name}}
            </td>
          </tr>
          <tr>
            <td class="l-height15" style="border-bottom:1px solid !important; font-weight:bold;">
            PHONE(A/C, No, Ext):
            </td>
            <td style="border-bottom:1px solid !important;">
            {{$formcontrol->C_I_phone}}
            </td>
            <td class="l-height15" style="border-bottom:1px solid !important; border-left:1px solid; font-weight:bold;" >
            FAX (A/C, No):
            </td>
            <td style="border-bottom:1px solid !important;">
            {{$formcontrol->C_I_fax}}
            </td>
          </tr>
          <tr>
            <td class="l-height15" style="border-bottom:1px solid !important; font-weight:bold;">
            E-MAIL ADDRESS:
            </td>
            <td colspan="3" style="border-bottom:1px solid !important;">
            {{$formcontrol->C_I_email}}
            </td>
          </tr>
          <tr>
            <td class="l-height15" style="border-bottom:1px solid !important; font-weight:bold;">
            PRODUCER CUSTOMER ID #:
            </td>
            <td colspan="3" style="border-bottom:1px solid !important;">
            {{$formcontrol->C_I_producer_id}}
            </td>
          </tr>
          </table></td>
    </tr>
    <tr>
    <td style="border-bottom:1px solid !important; border-right:1px solid;">
      <b>INSURED</b><br>
      {{$user->name}}<br>
      {{$user->address}}<br>
      {{$user->city}}, {{$user->state}} {{$user->zip_code}}
      <!--
    	<table>
      <tr>
      <td colspan="2">
      INSURED
      </td>
      </tr>
      <tr>
      <td>
      <input type="checkbox" name="vehicle" value="Bike">
      <label>Change<br/>Name</label>
      </td>
      <td>
      <input type="text" name="FirstName" value="MANA TRUCKING LLC">		<br/>211 WESTERN VALLEY DRIVE
      <br/>KATY, TX 77449
      </td>
      </tr>
    </table> -->
    </td>
    <td style="margin:0; padding:0;">
    <table>
    <tr>
            <td colspan="2" style="border-bottom:1px solid !important; width:350px; font-weight:bold; vertical-align:bottom; padding:0px;">
            <center>INSURER(S) AFFORDING COVERAGE</center>
            </td>
            <td style="border-bottom:1px solid !important; width:100px; border-left:1px solid; font-weight:bold; vertical-align:bottom; padding:0px;">
            <center>NAIC #</center>
            </td>
    </tr>
    <tr style="text-align:left;">
      <td style="width:50px !important; border-bottom:1px solid !important; font-weight:bold;">INSURER A:</td>
      <td style="width:200px !important; border-bottom:1px solid !important;">{{$Ensured_a}}</td>
      <td style="border-bottom:1px solid !important; border-left:1px solid;">
        {{$Naic_a}}
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid !important; font-weight:bold;">
      INSURER B:
      </td>
      <td style="border-bottom:1px solid !important;">{{$Ensured_b}}</td>
      <td style="border-bottom:1px solid !important; border-left:1px solid;">
        {{$Naic_b}}
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid !important; font-weight:bold;">
      INSURER C:
      </td>
      <td style="border-bottom:1px solid !important;">{{$Ensured_c}}</td>
      <td style="border-bottom:1px solid !important; border-left:1px solid;">
        {{$Naic_c}}
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid !important; font-weight:bold;">
      INSURER D:
      </td>
      <td style="border-bottom:1px solid !important;">{{$Ensured_d}}</td>
      <td style="border-bottom:1px solid !important; border-left:1px solid;">
        {{$Naic_d}}
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid !important; font-weight:bold;">
      INSURER E:
      </td>
      <td style="border-bottom:1px solid !important;">{{$Ensured_e}}</td>
      <td style="border-bottom:1px solid !important; border-left:1px solid;">
        {{$Naic_e}}
      </td>
    </tr>
    <tr>
      <td style="font-weight:bold;">
      INSURER F:
      </td>
      <td>{{$Ensured_f}}</td>
      <td style="border-left:1px solid;">
        {{$Naic_f}}
      </td>
    </tr>
    </table>
    </td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="2">
      <table>
      <tr>
      <td>
      <b>COVERAGES</b>
      </td>
      <td>
      <b>CERTIFICATE NUMBER:</b>
      <label>ARMWEB000000{{$formcontrol->id}}</label>
      </td>
      <td>
      <b>REVISION NUMBER</b>
      </td>
      </tr>
      </table>
    </td>
    </tr>
    <tr>
      <td colspan="2" style=" border:1px solid !important; border-bottom:1px solid !important; font-size:15px !important; margin:0px !important; padding:0px !important;">
      THIS IS TO CERTIFY THAT THE POLICES OF INSURANCE LISTED BELOW BEEN ISSUED TO THE INSURED NAMED ABOVE FOR THE POLICY PERIOD INDICATED. NOTWITHSTANDING ANY REQUIREMENT, TERM OR CONDITION OF ANY CONTACT OR OTHER DOCUMENT WITH RESPECT TO WHICH THIS CERTIFICATE MAY BE ISSUED OR MAY PERTAIN, THE INSURANCE AFFORDED BY THE POLICIES DESCRIBED HERE IN IS SUBJECT TO ALL THE TERMS, EXCLUSIONS AND CONDITIONS OF SUCH POLICIES. LIMITS SHOWN MAY HAVE BEEN RECUDED BY PAID CLAIMS.
    </td>
    </tr>
  </table>
      <table>
          <tr>
            <td class="center l-height15" width="15" style="border-bottom:2px solid !important; border-left:1px solid; line-height:5px!important; font-size:10px !important;">
              <b style="font-size:10px !important;">INSR<br/>
              LTR</b>
            </td>
            <td class="center" style="border-bottom:2px solid !important; width:250px; border-left:1px solid; vertical-align:bottom;">
              <b>TYPE OF INSURANCE</b>
            </td>
            <td class="center l-height15" width="15" style="width:15px; border-bottom:2px solid !important; width:10px; border-left:1px solid;padding:0px !important;margin:0px !important;">
              <b>ADDL</b>
            </td>
            <td class="center l-height15" width="15" style="width:15px; border-bottom:2px solid !important; border-left:1px solid;padding:0px !important;margin:0px !important;">
              <b>SUBR</b>
            </td>
            <td class="center" style="border-bottom:2px solid !important; border-left:1px solid;">
              <b>POLICY NUMBER</b>
            </td>
            <td class="center l-height15" style="width:83px; border-bottom:2px solid !important; border-left:1px solid;">
              <b>POLICY EFF<br/>
              (MM/DD/YYYY)</b>
            </td>
            <td class="center l-height15" style="width:83px; border-bottom:2px solid !important; border-left:1px solid;">
              <b>POLICY EXP<br/>
              (MM/DD/YYYY)</b>
            </td>
            <td class="center" style="width:290px; border-bottom:2px solid !important; border-left:1px solid; border-right:1px solid; vertical-align:bottom;">
              <b>LIMITS</b>
            </td>
          </tr>
          <tr>
            <td style="border:1px solid; border-bottom:2px solid !important;">
              {{$glinsuranceletter}}
            </td>
            <td style="border-bottom:2px solid !important; border-right:1px solid; margin:0; padding:0;">
              <b>GENERAL LIABILITY</b><br>
              <div class="row" style="vertical-align:middle; padding-top:5px;">
                @if ( $gloptioncommercial === 'true')
                  <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> COMMERCIAL GENERAL LIABILITY<br/>
                @else
                  <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /> COMMERCIAL GENERAL LIABILITY<br/>
                @endif
              </div>
              <div class="row" style="vertical-align:middle;">
                @if ( $gloptionclaims_made === 'true')
                <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> CLAIMS-MADE<br/>
                @else
                <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /> CLAIMS-MADE<br/>
                @endif
              </div>
              <div class="row" style="vertical-align:middle;">
                @if ( $gloptionoccur === 'true')
                <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> OCCUR<br/>
                @else
                <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /> OCCUR<br/>
                @endif
              </div>
              <div class="row" style="vertical-align:middle;">
                @if ($glother2 === 'true')
                <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> {{$glotherinput2}}<br/>
                @else
                <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /><br>
                @endif
              </div>
              <div class="row" style="vertical-align:middle;">
                <p style="padding-bottom:0px;margin-bottom:3px;">GEN'L AGGREGATE LIMIT APPLIES PER:</p><br>
                @if ( $gloptionpolicy === 'true')
                <img style="padding-top:10px;" src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> POLICY
                @else
                <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /> POLICY
                @endif
                @if ( $gloptionproject === 'true')
                <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> PROJECT
                @else
                <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /> PROJECT
                @endif
                @if ( $gloptionloc === 'true')
                <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> LOC
                @else
                <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /> LOC
                @endif
              </div>
            </td>
            <td style="border-bottom:2px solid !important; border-right:1px solid;">
              @if ( $gloptionaddl === 'true')
              <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo p-0 m-0" />
              @else
              <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo p-0 m-0" />
              @endif
            </td>
            <td style="border-bottom:2px solid !important; border-right:1px solid;">
              @if ( $gloptionsubr === 'true')
              <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" />
              @else
              <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" />
              @endif
            </td>
            <td style="border-bottom:2px solid !important; border-right:1px solid; text-align:center;">
              {{$glpolicynumber}}
            </td>
            <td style="border-bottom:2px solid !important; border-right:1px solid;">
              {{$gleffdate}}
            </td>
            <td style="border-bottom:2px solid !important; border-right:1px solid;">
              {{$glexpdate}}
            </td>
            <td style="border-bottom:2px solid !important; border-right:1px solid !important; margin:0px !important; padding:0px !important;">
              <table style=" font-size:5px !important;">
                <tr>
                  <td style="width:155px !important; border-bottom:1px solid; font-size:10px !important;">
                    EACH OCURRENCE
                  </td>
                  <td style="width:115px !important; border-bottom:1px solid; border-left:1px solid; font-size:10px !important;">
                    $ {{$gleachocurrence}}
                  </td>
                </tr>
                <tr>
                  <td style="border-bottom:1px solid; font-size:10px !important;">
                    DAMAGE TO RENTED PREMISES(Ea ocurrence)
                  </td>
                  <td style="border-bottom:1px solid; border-left:1px solid; font-size:10px !important;">
                    $ {{$glrentedpermises}}
                  </td>
                </tr>
                <tr>
                  <td style="border-bottom:1px solid; font-size:10px !important;">
                    MED EXP(Amy one person)
                  </td>
                  <td style="border-bottom:1px solid; border-left:1px solid; font-size:10px !important;">
                    $ {{$glmedicalexpenses}}
                  </td>
                </tr>
                <tr>
                  <td style="border-bottom:1px solid; font-size:10px !important;">
                    PERSONAL & ADV INJURY
                  </td>
                  <td style="border-bottom:1px solid; border-left:1px solid; font-size:10px !important;">
                    $ {{$glpersonaladv}}
                  </td>
                </tr>
                <tr>
                  <td style="border-bottom:1px solid; font-size:10px !important;">
                    GENERAL AGGREGATE
                  </td>
                  <td style="border-bottom:1px solid; border-left:1px solid; font-size:10px !important;">
                    $ {{$glgeneralaggregate}}
                  </td>
                </tr>
                <tr>
                  <td style="border-bottom:1px solid; font-size:10px !important;">
                    PRODUCTS-COMPO OP AGG
                  </td>
                  <td style="border-bottom:1px solid; border-left:1px solid; font-size:10px !important;">
                    $ {{$glproductcomp}}
                  </td>
                </tr>
                <tr>
                  <td style="font-size:10px !important; border-bottom:1px solid;">
                      {{$glotherinput}}
                  </td>
                  <td style="border-bottom:1px solid; border-left:1px solid; font-size:10px !important;">
                    $ {{$glother}}
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <table>
        <tr>
          <td width="15" style="border:1px solid; border-bottom:2px solid !important;">
            {{$alinsuranceletter}}
          </td>
          <td style="width:260px; border-bottom:2px solid !important; margin:0; padding:0;" >
            <b>AUTOMOBILE LIABILITY<br>
            @if ($aloptionanyauto === 'true')
            <img style="padding-top:5px;" src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> ANY AUTO<br>
            @else
            <img style="padding-top:5px;" src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /> ANY AUTO<br>
            @endif
            @if ($aloptionallowned === 'true')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> ALL OWNED AUTOS<br>
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /> ALL OWNED AUTOS<br>
            @endif
            @if ($aloptionsheduled === 'true')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> SHEDULED AUTOS<br>
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /> SHEDULED AUTOS<br>
            @endif
            @if ($aloptionalhiredautos === 'true')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> HIRED AUTOS<br>
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /> HIRED AUTOS<br>
            @endif
            @if ($aloptionalownedautos === 'true')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> NON-OWNED AUTOS<br>
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /> NON-OWNED AUTOS<br>
            @endif
            @if ($aloptionother === 'true')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> {{$aloptionotherinput}}
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" />
            @endif
          </td>
          <td style="width:10px; border-bottom:2px solid !important; border-left:1px solid; border-right:1px solid;">
            @if ($aloptionaddl === 'true')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" />
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" />
            @endif
          </td>
          <td style="width:10px; border-bottom:2px solid !important; border-right:1px solid;">
            @if ($aloptionsubr === 'true')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" />
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" />
            @endif
          </td>
          <td style="border-bottom:2px solid !important; border-right:1px solid; text-align:center;">
            {{$alpolicynumber}}
          </td>
          <td style="width:83px !important; border-bottom:2px solid !important; border-right:1px solid;">
            {{$aleffdate}}
          </td>
          <td style=" width:83px !important; border-bottom:2px solid !important; border-right:1px solid;">
            {{$alexpdate}}
          </td>
          <td style="width:300px !important; border-right:1px solid; border-bottom:2px solid !important; margin:0px !important; padding:0px !important;">
            <table>
              <tr>
                <td style="width:155px !important; border-bottom:1px solid; font-size:10px !important;">
                  COMBINED SINGLE LIMIT<br/>
                  (EA accident)
                </td>
                <td style="width:115px !important; border-left:1px solid; border-bottom:1px solid; font-size:10px !important;">
                  $ {{$alcombinedsingle}}
                </td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid; font-size:10px !important;">
                  BODILY INJURY(Per person)
                </td>
                <td style="border-left:1px solid; border-bottom:1px solid; font-size:10px !important;">
                  $ {{$albodilyperson}}
                </td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid; font-size:10px !important;">
                  BODILY INJURY(Per accident)
                </td>
                <td style="border-left:1px solid; border-bottom:1px solid; font-size:10px !important;">
                  $ {{$albodilyaccident}}
                </td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid; font-size:10px !important;">
                  PROPERTY DAMAGE<br/>
                  (Per accident)
                </td>
                <td style="border-left:1px solid; border-bottom:1px solid; font-size:10px !important;">
                  $ {{$alpropertydamage}}
                </td>
              </tr>
              @if($alotherinput2 != "" || $alotherinput3 != "")
              <tr>
                <td style="border-bottom:1px solid; font-size:10px !important;">
                  {{$alotherinput2}}
                </td>
                <td style="border-left:1px solid; border-bottom:1px solid; font-size:10px !important;">
                  $ {{$alother2}}
                </td>
              </tr>
              <tr>
                <td style="font-size:10px !important; border-bottom:1px solid;">
                  {{$alotherinput3}}
                </td>
                <td style="border-left:1px solid; font-size:10px !important; border-bottom:1px solid;">
                  $ {{$alother3}}
                </td>
              </tr>
              @endif
            </table>
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td width="15" style="border-bottom:2px solid !important; border:1px solid; border-right:1px solid;">
            {{$ulinsuranceletter}}
          </td>
          <td style="width:260px; border-bottom:2px solid !important; margin:0; padding-top:10px; padding-left:0px; padding-right:0px;">
            @if ($uloptionumbrellaliability === 'true')
            <img style="padding-top:10px;" src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> UMBRELLA LIAB </b>
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /> UMBRELLA LIAB </b>
            @endif
            @if ($uloptionoccur === 'true')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" style="margin-left:10px;" /> OCCUR <br>
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" style="margin-left:10px;"/> OCCUR <br>
            @endif
            @if ($uloptionexcessliability === 'true')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> EXCESS LAB </b>
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /> EXCESS LAB </b>
            @endif
            @if ($uloptionclaimsmade === 'true')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" style="margin-left:28px;" /> CLAIMS-MADE
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" style="margin-left:28px;" /> CLAIMS-MADE
            @endif
            <hr>
            @if ($uloptiondeductible === 'true')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> DEDUCTIBLE <br/>
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /> DEDUCTIBLE <br/>
            @endif
            @if ($uloptionretention === 'true')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" /> RETENTION
            <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span><input name="g_l_other2" type="text" id="example-input3-group1" class="form-control" value="{{$uloptionretentioninput}}"/></div>
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" /> RETENTION
            <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span><input name="g_l_other2" type="text" id="example-input3-group1" class="form-control"></div>
            @endif
          </td>
          <td style="width:21px; border-bottom:2px solid !important; border-left:1px solid;">
            @if ($uloptionaddl === 'true')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" />
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" />
            @endif
          </td>
          <td style="width:20px; border-bottom:2px solid !important; border-left:1px solid;">
            @if ($uloptionsubr === 'true')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" />
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" />
            @endif
          </td>
          <td style="border-bottom:2px solid !important; border-left:1px solid; text-align:center;">
            {{$ulpolicynumber}}
          </td>
          <td style="width:83px !important; border-bottom:2px solid !important; border-left:1px solid;">
            {{$uleffdate}}
          </td>
          <td style="width:83px !important; border-bottom:2px solid !important; border-left:1px solid;">
            {{$ulexpdate}}
          </td>
          <td style="width:300px; border-right:1px solid; border-bottom:2px solid !important; border-left:1px solid; margin:0px !important; padding:0px !important;">
            <table>
              <tr>
                <td style="width:155px; border-bottom:1px solid; font-size:10px !important;">
                  EACH OCURRENCE
                </td>
                <td style="width:115px; border-bottom:1px solid; border-left:1px solid; font-size:10px !important;">
                  $ {{$uleachoccurent}}
                </td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid; font-size:10px !important;">
                  AGGREGATE<br/>
                </td>
                <td style="border-bottom:1px solid; border-left:1px solid; font-size:10px !important;">
                  $ {{$ulaggregate}}
                </td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid; font-size:10px !important;">
                  {{$ulotherinput}}
                </td>
                <td style="border-bottom:1px solid; border-left:1px solid; font-size:10px !important;">
                  $ {{$ulother}}
                </td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid; font-size:10px !important;">
                  {{$ulotherinput2}}
                </td>
                <td style="border-bottom:1px solid; border-left:1px solid; font-size:10px !important;">
                  $ {{$ulother2}}
                </td>
              </tr>
            </table>
      </td>
    </tr>
  </table>
  <table>
        <tr>
          <td width="15" style="border-bottom:2px solid !important; border:1px solid;">
            {{$formcontrol->W_C_insurance_letter}}
          </td>
          <td style="width:260px; border-bottom:2px solid !important; border-left:1px solid; margin:0; padding:0;">
            <b>WORKERS COMPESATION<br>
            AND EMPLOYERS' LIABILITY </b><br>
            ANY PROPRIETOR/PARTNER/EXECUTIVE OFFICER/MEMBER EXCLUDED?<input type="checkbox" name="" value=""><b> Y/N</b><br>
            <b>(Mandatory in NH)<br>
            if yes, describe under<br>
            SPECIAL PROVISIONS below
          </td>
          <td style="width:21px; border-bottom:2px solid !important; border-left:1px solid;">
            N/A
          </td>
          <td style="width:20px; border-bottom:2px solid !important; border-left:1px solid;">
            @if ($wcoptionsubr === 'true')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" />
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" />
            @endif
          </td>
          <td style="border-bottom:2px solid !important; border-left:1px solid; text-align:center;">
            {{$formcontrol->W_C_policy_number}}
          </td>
          <td style="width:83px !important; border-bottom:2px solid !important; border-left:1px solid;">
            {{$formcontrol->W_C_eff_date}}
          </td>
          <td style="width:83px !important; border-bottom:2px solid !important; border-left:1px solid;">
            {{$formcontrol->W_C_exp_date}}
          </td>
          <td style="width:300px; border-right:1px solid; border-bottom:2px solid !important; border-left:1px solid; margin:0px !important; padding:0px !important;">
            <table>
              <tr>
                <td style="width:155px; border-bottom:1px solid; font-size:10px !important; margin:0; padding:0;">
                  <table>
                    <tr>
                      <td><img style="padding-top:5px;" src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" />WC STA-<br>TUTORY </td>
                      <td><img style="padding-top:5px;" src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" />OTHER</td>
                </table>
                </td>
                <td style="width:115px; border-bottom:1px solid; border-left:1px solid; font-size:10px !important;">
                  $ {{$formcontrol->W_C_other}}
                </td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid; font-size:10px !important;">
                  E.L. EACH ACCIDENT
                </td>
                <td style="border-bottom:1px solid; border-left:1px solid; font-size:10px !important;">
                  $ {{$formcontrol->W_C_each_accident}}
                </td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid; font-size:10px !important;">
                  E.L. DISEABLE - EA EMPLOYEE</td>
                <td style="border-bottom:1px solid; border-left:1px solid; font-size:10px !important;">
                  $ {{$formcontrol->W_C_ea_employee}}
                </td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid; font-size:10px !important;">
                  E.L. DISEABLE - POLICY LIMIT
                </td>
                <td style="border-bottom:1px solid; border-left:1px solid; font-size:10px !important;">
                  $ {{$formcontrol->W_C_policy_limit}}
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td width="15" style="border-left:1px solid;">
            {{$formcontrol->A_C_a_insurance_letter}}
          </td>
          <td style="width:250px; border-bottom:0px solid !important; border-left:1px solid;">
            {{$formcontrol->A_C_a_policy_type}}
          </td>
          <td style="width:21px; border-bottom:0px solid !important; border-left:1px solid;">
            @if ($formcontrol->A_C_a_options_add_insurance === 'Additonal insurance')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" />
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" />
            @endif
          </td>
          <td style="width:20px; border-bottom:0px solid !important; border-left:1px solid;">
            @if ($formcontrol->A_C_a_options_surrogation === 'Surrogation')
            <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" />
            @else
            <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" />
            @endif
          </td>
          <td style="border-bottom:0px solid !important; border-left:1px solid; text-align:center;">
            {{$formcontrol->A_C_a_policy_number}}
          </td>
          <td style="width:83px; border-bottom:0px solid !important; border-left:1px solid;">
            {{$formcontrol->A_C_a_eff_date}}
          <td style="width:83px; border-bottom:0px solid !important; border-left:1px solid;">
            {{$formcontrol->A_C_a_exp_date}}
          </td>
          <td style="width:300px; border-right:1px solid; border-bottom:0px solid !important; border-left:1px solid; margin:0px !important; padding:0px !important;">
            <table>
              <tr>
                <td style="width:155px; font-size:9px !important;">
                  COVERAGE LIMITS / DEDUCTIBLE
                </td>
                <td style="width:115px; font-size:10px !important; vertical-align:top;">
                  $ {{$formcontrol->A_C_a_coverage_limits}}
                </td>
              </tr>
            </table>
          </td>
        </tr>
        </table>
        <table>
          <tr>
            <td width="15" style="border-bottom:2px solid !important; border-left:1px solid;">
              {{$formcontrol->A_C_b_insurance_letter}}
            </td>
            <td style="width:250px; border-bottom:2px solid !important; border-left:1px solid;">
              {{$formcontrol->A_C_b_policy_type}}
            </td>
            <td style="width:21px; border-bottom:2px solid !important; border-left:1px solid;">
              @if ($formcontrol->A_C_b_options_add_insurance === 'Additonal insurance')
              <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" />
              @else
              <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" />
              @endif
            </td>
            <td style="width:20px; border-bottom:2px solid !important; border-left:1px solid;">
              @if ($formcontrol->A_C_b_options_surrogation === 'Surrogation')
              <img src="../public/assets/plugins/images/cuadro-lleno.png" width="20" height="20" alt="" class="light-logo" />
              @else
              <img src="../public/assets/plugins/images/cuadro.png" width="20" height="20" alt="" class="light-logo" />
              @endif
            </td>
            <td style="border-bottom:2px solid !important; border-left:1px solid; text-align:center;">
              {{$formcontrol->A_C_b_policy_number}}
            </td>
            <td style="width:83px; border-bottom:2px solid !important; border-left:1px solid;">
              {{$formcontrol->A_C_b_eff_date}}
            </td>
            <td style="width:83px; border-bottom:2px solid !important; border-left:1px solid;">
              {{$formcontrol->A_C_b_exp_date}}
            </td>
            <td style="width:300px; border-right:1px solid; border-bottom:2px solid !important; border-left:1px solid; margin:0px !important; padding:0px !important;">
              <table>
                <tr>
                  <td style="width:155px; font-size:9px !important; vertical-align:top;">
                    COVERAGE LIMITS / DEDUCTIBLE
                  </td>
                  <td style="width:115px; font-size:10px !important; text-align:left;">
                    $ {{$formcontrol->A_C_b_coverage_limits}}
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          </table>
        <table>
        <tr>
          <td colspan="2" style="height:50px; border:1px solid;">
            <b>DESCRIPTION OF OPERATIONS / VEHICLES (Atthach ACORD 101, Additional Remarks Schedule, if more space is required)</b><br>
            {!! $formcontrol->description !!}
          </td>
        </tr>
      </table>
      <table>
    <tr>
      <th>
        CERTIFICATE HOLDER
      </th>
      <th>
        CANCELLATION
      </th>
    </tr>
  </table>
  <table>
    <tr>
      <th rowspan="2" style="border:1px solid; height:100px; width:550px;">
        <p class="certificate_field">{{$dataCertificate['certificate_holder_name']}}</p>
          <p class="certificate_field">{{$dataCertificate['address_client']}}</p>
        <p class="certificate_field">{{$dataCertificate['city']}},{{$dataCertificate['state']}}  {{$dataCertificate['zip_code']}} </p>


      </th>
      <th style="border:1px solid;">
        SHOULD ANY OF THE ABOVE DESCRIBED POLICIES BE CANCELLED BEFORE THE EXPIRATION DATE THEREOF, NOTICE WILL BE DELIVERED IN A ACCORDANCE WITH THE POLICY PROVISIONS.
      </th>
    </tr>
    <tr>
      <th style="border:1px solid; height:100px;">
        AUTHORIZED REPRESENTATIVE<br>
        <center><img src="../public/assets/plugins/images/Firma.png" width="200" alt="" class="light-logo" / style="position:absolute; "></center>
      </th>
    </tr>
  </table>
  <table style="width:95%;">
  <tr>
    <th style="font-size:15px !important;">
      ACORD 25 (2010/05)
    </th>
    <th style="text-align:right !important; font-size:15px !important;">
      © 1988-2010 ACORD CORPORATION.  All rights reserved.
    </th>
  </tr>
</table>
<center><b style="font-size:15px !important;">The ACORD name and logo are registered marks of ACORD</b></center>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
