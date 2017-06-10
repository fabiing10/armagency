@extends('layouts.master')

@section('library_css')
@endsection

@section('style')

  <style media="screen">
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    th, td {
        padding: 5px;
        text-align: left;
        vertical-align: top;
    }
    table{
      width: 100%;
    }
    .row {
    margin: 20px;
    }
    body{
      background: white !important;
    }
    .center{
      text-align: center;
    }
    .l-height15{
      line-height: 15px;
    }
    .form-control {
    display: -webkit-inline-box !important;
    width: 80% !important;
    height: 34px !important;
    padding: 6px 12px !important;
  }
  </style>
@endsection

@section('body_content')

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
<!-- Preloader -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
</div>
<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
  <div class="row">
  <table style="width:100%">
    <tr>
      <th colspan="2">THIS CERTIFICATE IS ISSUED AS A MATTER OF INFORMATION ONLY AND CONFERS NO RIGHTS UPON THE CERTIFICATE HOLDER. THIS CERTIFICATE DOES NOT AFFIRMATIVELY OR NEGATIVELY AMEND, EXTEND OR ALTER THE COVERAGE AFFORDED BY THE POLICIES  BELOW. THIS CERTIFICATE OF INSURANCE DOES NOT CONSTITUTE A CONTRACT BETWEEN THE ISSUING INSURER(S), AUTHORIZED REPRESENTATIVE OR PRODUCER, AND THE CERTIFICATE HOLDER.</th>
    </tr>
    <tr>
      <td colspan="2">IMPORTANT: if the certificate holder is an ADDITIONAL INSURED. the policy(ies) must be endorsed. if SUBROGATION IS WAIVED, subject to the terms and conditions of the policy, certain policies may require and endorsement. A statement on this certificate does not confer rights to the certificate holder in lieu of such endorsement(s).</td>
    </tr>
      <tr>
      <td style=" width: 635px !important; ">PRODUCDER<br>
        {{$formcontrol->P_I_name}}<br>
        {{$formcontrol->P_I_address}}<br>
        {{$formcontrol->P_I_dba_state}},{{$formcontrol->P_I_city}},TX {{$formcontrol->P_I_dba_zip_code}}
      </td>
          <td><table border="0">
          <tr>
            <td class="l-height15">
            CONTACT<br/>
            NAME:
            </td>
            <td colspan="3">
              {{$formcontrol->C_I_name}}
            </td>
          </tr>
          <tr>
            <td class="l-height15">
            PHONE<br/>
            (A/C, No, Ext):
            </td>
            <td>
            {{$formcontrol->C_I_phone}}
            </td>
            <td class="l-height15">
            FAX<br/>
            (A/C, No):
            </td>
            <td>
            {{$formcontrol->C_I_fax}}
            </td>
          </tr>
          <tr>
            <td class="l-height15">
            E-MAIL<br/>
            ADDRESS:
            </td>
            <td colspan="3">
            {{$formcontrol->C_I_email}}
            </td>
          </tr>
          <tr>
            <td class="l-height15">
            PRODUCER<br/>
            CUSTOMER ID #:
            </td>
            <td colspan="3">
            {{$formcontrol->C_I_producer_id}}
            </td>
          </tr>
          </table></td>
    </tr>
    <tr>
    <td>
      INSURED<br>
      {{$user->name}}<br>
      {{$user->address}}<br>
      {{$user->phone}}
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
    <td>
    <table>
    <tr>
            <td colspan="2">
            <center>INSURER(S) AFFORDING COVERAGE</center>
            </td>
            <td>
            <center>NAIC #</center><br/>
            </td>
    </tr>
    <tr>
      <td colspan="2">
      INSURER A: {{$Ensured_a}}
      </td>
      <td>
        {{$Naic_a}}
      </td>
    </tr>
    <tr>
      <td colspan="2">
      INSURER B: {{$Ensured_b}}
      </td>
      <td>
        {{$Naic_b}}
      </td>
    </tr>
    <tr>
      <td colspan="2">
      INSURER C: {{$Ensured_c}}
      </td>
      <td>
        {{$Naic_c}}
      </td>
    </tr>
    <tr>
      <td colspan="2">
      INSURER D: {{$Ensured_d}}
      </td>
      <td>
        {{$Naic_d}}
      </td>
    </tr>
    <tr>
      <td colspan="2">
      INSURER E: {{$Ensured_e}}
      </td>
      <td>
        {{$Naic_e}}
      </td>
    </tr>
    <tr>
      <td colspan="2">
      INSURER F: {{$Ensured_f}}
      </td>
      <td>
        {{$Naic_f}}
      </td>
    </tr>
    </table>
    </td>
    </tr>
    <tr>
      <td colspan="2">
      <table>
      <tr>
      <td>
      COVERAGES
      </td>
      <td>
      CERTIFICATE NUMBER:
      <label>ARMINS0008723</label>
      </td>
      <td>
      REVISION NUMBER
      </td>
      </tr>
      </table>
    </td>
    </tr>
    <tr>
      <th colspan="2">
      THIS IS TO CERTIFY THAT THE POLICES OF INSURANCE LISTED BELOW BEEN ISSUED TO THE INSURED NAMED ABOVE FOR THE POLICY PERIOD INDICATED. NOTWITHSTANDING ANY REQUIREMENT, TERM OR CONDITION OF ANY CONTACT OR OTHER DOCUMENT WITH RESPECT TO WHICH THIS CERTIFICATE MAY BE ISSUED OR MAY PERTAIN, THE INSURANCE AFFORDED BY THE POLICIES DESCRIBED HERE IN IS SUBJECT TO ALL THE TERMS, EXCLUSIONS AND CONDITIONS OF SUCH POLICIES. LIMITS SHOWN MAY HAVE BEEN RECUDED BY PAID CLAIMS.
    </th>
    </tr>
      <tr>
      <td colspan="2">
        <table>
          <tr>
            <td class="center l-height15" style="width:42px; !important">
              INSR<br/>
              LTR
            </td>
            <td class="center" style="width:250px;">
              TYPE OF INSURANCE
            </td>
            <td class="center l-height15" style="width:42px;">
              ADDL<br/>
              INSR
            </td>
            <td class="center l-height15" style="width:42px;">
              SUBR<br/>
              WVD
            </td>
            <td class="center">
              POLICY NUMBER
            </td>
            <td class="center l-height15" style="width:110px;">
              POLICY EFF<br/>
              (MM/DD/YYYY)
            </td>
            <td class="center l-height15" style="width:110px;">
              POLICY EXP<br/>
              (MM/DD/YYYY)
            </td>
            <td class="center" style="width:350px;">
              LIMITS
            </td>
          </tr>
          <tr>
            <td>
              {{$glinsuranceletter}}
            </td>
            <td>
              <b>GENERAL LIABILITY</b><br>
              @if ( $gloptioncommercial === 'true')
                <input type="checkbox" name="" value="" checked=""> COMMERCIAL GENERAL LIABILITY<br/>
              @else
                <input type="checkbox" name="" value=""> COMMERCIAL GENERAL LIABILITY<br/>
              @endif
              @if ( $gloptionclaims_made === 'true')
              <input type="checkbox" name="" value="" checked=""> CLAIMS-MADE
              @else
              <input type="checkbox" name="" value=""> CLAIMS-MADE
              @endif
              @if ( $gloptionoccur === 'true')
              <input type="checkbox" name="" value="" checked=""> OCCUR<br/>
              @else
              <input type="checkbox" name="" value=""> OCCUR<br/>
              @endif
              @if ($glother2 === 'true')
              <input type="checkbox" name="" value="" checked=""> <input name="" type="text" class="form-control" value="{{$glotherinput2}}"><br/>
              @else
              <input type="checkbox" name="" value=""> <input name="" type="text" class="form-control" placeholder=""><br/>
              @endif
              @if ($glother2 === 'true')
              <input type="checkbox" name="" value="" checked=""> <input name="" type="text" class="form-control" value="{{$glotherinput2}}">
              @else
              <input type="checkbox" name="" value=""> <input name="" type="text" class="form-control" placeholder="">
              @endif
              GEN'L AGGREGATE LIMIT APPLIES PER:
              @if ( $gloptionpolicy === 'true')
              <input type="checkbox" name="" value="" checked=""> POLICY
              @else
              <input type="checkbox" name="" value=""> POLICY
              @endif
              @if ( $gloptionpolicy === 'true')
              <input type="checkbox" name="" value="" checked=""> PROJECT
              @else
              <input type="checkbox" name="" value=""> PROJECT
              @endif
              @if ( $gloptionloc === 'true')
              <input type="checkbox" name="" value="" checked=""> LOC
              @else
              <input type="checkbox" name="" value=""> LOC
              @endif
            </td>
              {{$glpolicynumber}}
            <td>
              @if ( $gloptionaddl === 'true')
              <input type="checkbox" name="" value="" checked="">
              @else
              <input type="checkbox" name="" value="">
              @endif
            </td>
            <td>
              @if ( $gloptionsubr === 'true')
              <input type="checkbox" name="" value="" checked="">
              @else
              <input type="checkbox" name="" value="">
              @endif
            </td>
            <td>
              {{$glpolicynumber}}
            </td>
            <td>
              {{$gleffdate}}
            </td>
            <td>
              {{$glexpdate}}
            </td>
            <td>
              <table>
                <tr>
                  <td style="width:200px;">
                    EACH OCURRENCE
                  </td>
                  <td>
                    $ {{$gleachocurrence}}
                  </td>
                </tr>
                <tr>
                  <td>
                    DAMAGE TO RENTED<br/>
                    PREMISES(Ea ocurrence)
                  </td>
                  <td>
                    $ {{$glrentedpermises}}
                  </td>
                </tr>
                <tr>
                  <td>
                    MED EXP(Amy one person)
                  </td>
                  <td>
                    $ {{$glmedicalexpenses}}
                  </td>
                </tr>
                <tr>
                  <td>
                    PERSONAL & ADV INJURY
                  </td>
                  <td>
                    $ {{$glpersonaladv}}
                  </td>
                </tr>
                <tr>
                  <td>
                    GENERAL AGGREGATE
                  </td>
                  <td>
                    $ {{$glgeneralaggregate}}
                  </td>
                </tr>
                <tr>
                  <td>
                    PRODUCTS-COMPO OP AGG
                  </td>
                  <td>
                    $ {{$glproductcomp}}
                  </td>
                </tr>
                <tr>
                  <td>
                      {{$glotherinput}}
                  </td>
                  <td>
                    $ {{$glother}}
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <table style="width: 100%">
        <tr>
          <td style="width:42px;">
            {{$alinsuranceletter}}
          </td>
          <td style="width:250px;">
            <b>AUTOMOBILE LIABILITY<br>
            @if ($aloptionanyauto === 'true')
            <input type="checkbox" name="" value="" checked=""> ANY AUTO<br>
            @else
            <input type="checkbox" name="" value=""> ANY AUTO<br>
            @endif
            @if ($aloptionallowned === 'true')
            <input type="checkbox" name="" value="" checked=""> ALL OWNED AUTOS<br>
            @else
            <input type="checkbox" name="" value=""> ALL OWNED AUTOS<br>
            @endif
            @if ($aloptionsheduled === 'true')
            <input type="checkbox" name="" value="" checked=""> SHEDULED AUTOS<br>
            @else
            <input type="checkbox" name="" value=""> SHEDULED AUTOS<br>
            @endif
            @if ($aloptionalhiredautos === 'true')
            <input type="checkbox" name="" value="" checked=""> HIRED AUTOS<br>
            @else
            <input type="checkbox" name="" value=""> HIRED AUTOS<br>
            @endif
            @if ($aloptionalownedautos === 'true')
            <input type="checkbox" name="" value="" checked=""> NON-OWNED AUTOS<br>
            @else
            <input type="checkbox" name="" value=""> NON-OWNED AUTOS<br>
            @endif
            @if ($aloptionother === 'true')
            <input type="checkbox" name="" value="" checked=""> {{$aloptionotherinput}}
            @else
            <input type="checkbox" name="" value="">
            @endif
          </td>
          <td style="width:47px;">
            @if ($aloptionaddl === 'true')
            <input type="checkbox" name="" value="" checked="">
            @else
            <input type="checkbox" name="" value="">
            @endif
          </td>
          <td style="width:48px;">
            @if ($aloptionsubr === 'true')
            <input type="checkbox" name="" value="" checked="">
            @else
            <input type="checkbox" name="" value="">
            @endif
          </td>
          <td>
            {{$alpolicynumber}}
          </td>
          <td style="width:110px;">
            {{$aleffdate}}
          </td>
          <td style="width:110px;">
            {{$alexpdate}}
          </td>
          <td style="width:350px;">
            <table>
              <tr>
                <td style="width:200px;">
                  COMBINED SINGLE LIMIT<br/>
                  (EA accident)
                </td>
                <td>
                  $ {{$alcombinedsingle}}
                </td>
              </tr>
              <tr>
                <td>
                  BODILY INJURY(Per person)
                </td>
                <td>
                  $ {{$albodilyperson}}
                </td>
              </tr>
              <tr>
                <td>
                  BODILY INJURY(Per accident)
                </td>
                <td>
                  $ {{$albodilyaccident}}
                </td>
              </tr>
              <tr>
                <td>
                  PROPERTY DAMAGE<br/>
                  (Per accident)
                </td>
                <td>
                  $ {{$alpropertydamage}}
                </td>
              </tr>
              <tr>
                <td>
                  {{$alotherinput2}}
                </td>
                <td>
                  $ {{$alother2}}
                </td>
              </tr>
              <tr>
                <td>
                  {{$alotherinput3}}
                </td>
                <td>
                  $ {{$alother3}}
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      </td>
    </tr>
        <tr>
      <td colspan="2">
        <table style="widht: 100%">
        <tr>
          <td style="width:42px;">
            {{$ulinsuranceletter}}
          </td>
          <td style="width:250px;">
            @if ($uloptionumbrellaliability === 'true')
            <input type="checkbox" name="" value="" checked=""><b> UMBRELLA LIAB </b>
            @else
            <input type="checkbox" name="" value=""><b> UMBRELLA LIAB </b>
            @endif
            @if ($uloptionoccur === 'true')
             <input type="checkbox" name="" value="" checked=""> OCCUR <br>
            @else
              <input type="checkbox" name="" value=""> OCCUR <br>
            @endif
            @if ($uloptionexcessliability === 'true')
            <input type="checkbox" name="" value="" checked=""><b> EXCESS LAB </b>
            @else
            <input type="checkbox" name="" value=""><b> EXCESS LAB </b>
            @endif
            @if ($uloptionclaimsmade === 'true')
            <input type="checkbox" name="" value="" checked=""> CLAIMS-MADE
            @else
            <input type="checkbox" name="" value=""> CLAIMS-MADE
            @endif
            <hr>
            @if ($uloptiondeductible === 'true')
            <input type="checkbox" name="" value="" checked=""> DEDUCTIBLE <br/>
            @else
            <input type="checkbox" name="" value=""> DEDUCTIBLE <br/>
            @endif
            @if ($uloptionretention === 'true')
            <input type="checkbox" name="" value="" checked=""> RETENTION <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span><input name="g_l_other2" type="text" id="example-input3-group1" class="form-control" value="{{$uloptionretentioninput}}"/></div>
            @else
            <input type="checkbox" name="" value=""> RETENTION <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span><input name="g_l_other2" type="text" id="example-input3-group1" class="form-control"></div>
            @endif
          </td>
          <td style="width:47px;">
            @if ($uloptionaddl === 'true')
            <input type="checkbox" name="" value="" checked="">
            @else
            <input type="checkbox" name="" value="" checked="">
            @endif
          </td>
          <td style="width:48px;">
            @if ($uloptionsubr === 'true')
            <input type="checkbox" name="" value="" checked="">
            @else
            <input type="checkbox" name="" value="">
            @endif
          </td>
          <td>
            {{$ulpolicynumber}}
          </td>
          <td style="width:110px;">
            {{$uleffdate}}
          </td>
          <td style="width:110px;">
            {{$ulexpdate}}
          </td>
          <td style="width:350px;">
            <table>
              <tr>
                <td style="width:200px;">
                  EACH OCURRENCE
                </td>
                <td>
                  $ {{$uleachoccurent}}
                </td>
              </tr>
              <tr>
                <td>
                  AGGREGATE<br/>
                </td>
                <td>
                  $ {{$ulaggregate}}
                </td>
              </tr>
              <tr>
                <td>
                  {{$ulotherinput}}
                </td>
                <td>
                  $ {{$ulother}}
                </td>
              </tr>
              <tr>
                <td>
                  {{$ulotherinput2}}
                </td>
                <td>
                  $ {{$ulother2}}
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <table style="widht: 100%">
        <tr>
          <td style="width:42px;">
            {{$formcontrol->W_C_insurance_letter}}
          </td>
          <td style="width:250px;">
            <b>WORKERS COMPESATION<br>
            AND EMPLOYERS' LIABILITY </b><br>
            ANY PROPRIETOR/PARTNER/EXECUTIVE OFFICER/MEMBER EXCLUDED?<input type="checkbox" name="" value=""><b> Y/N</b><br>
            <b>(Mandatory in NH)<br>
            if yes, describe under<br>
            SPECIAL PROVISIONS below
          </td>
          <td style="width:47px;">
            N/A
          </td>
          <td style="width:48px;">
            @if ($wcoptionsubr === 'true')
            <input type="checkbox" name="" value="" checked="">
            @else
            <input type="checkbox" name="" value="">
            @endif
          </td>
          <td>
            {{$formcontrol->W_C_policy_number}}
          </td>
          <td style="width:110px;">
            {{$formcontrol->W_C_eff_date}}
          </td>
          <td style="width:110px;">
            {{$formcontrol->W_C_exp_date}}
          </td>
          <td style="width:350px;">
            <table>
              <tr>
                <td style="width:200px;">
                  <input type="checkbox" name="" value="">EACH OCURRENCE <input type="checkbox" name="" value="">OTHER
                </td>
                <td>
                  $ {{$formcontrol->W_C_other}}
                </td>
              </tr>
              <tr>
                <td>
                  E.L. EACH ACCIDENT
                </td>
                <td>
                  $ {{$formcontrol->W_C_each_accident}}
                </td>
              </tr>
              <tr>
                <td>
                  E.L. DISEABLE - EA EMPLOYEE</td>
                <td>
                  $ {{$formcontrol->W_C_ea_employee}}
                </td>
              </tr>
              <tr>
                <td>
                  E.L. DISEABLE - POLICY LIMIT
                </td>
                <td>
                  $ {{$formcontrol->W_C_policy_limit}}
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <table style="widht: 100%">
        <tr>
          <td style="width:42px; height: 50px;">

          </td>
          <td style="width:250px;">

          </td>
          <td style="width:47px;">
            <input type="checkbox" name="" value="">
          </td>
          <td style="width:48px;">
            <input type="checkbox" name="" value="">
          </td>
          <td>

          </td>
          <td style="width:110px;">
          </td>
          <td style="width:110px;">
          </td>
          <td style="width:350px;">
          </td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <th colspan="2" style="height:100px;">
        DESCRIPTION OF OPERATIONS / VEHICLES (Atthach ACORD 101, Additional Remarks Schedule, if more space is required)
      </th>
    </tr>
    <tr>
      <th>
        CERTIFICATE HOLDER
      </th>
      <th>
        CANCELLATION
      </th>
    </tr>
    <tr>
      <td rowspan="2" style="height:150px;">

      </td>
      <th>
        SHOULD ANY OF THE ABOVE DESCRIBED POLICIES BE CANCELLED BEFORE THE EXPIRATION DATE THEREOF, NOTICE WILL BE DELIVERED IN A ACCORDANCE WITH THE POLICY PROVISIONS.
      </th>
    </tr>
    <tr>
      <th>
        AUTHORIZED REPRESENTATIVE
      </th>
    </tr>
  </table>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
@endsection

@section('library_js')
@endsection

@section('script')
<script type="text/javascript">

</script>
@endsection
