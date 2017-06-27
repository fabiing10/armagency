

  <style media="screen">
  * {
    line-height: 10px !important;
    font-size: 11px !important;

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

  <table style="width:100%">
    <td colspan="2" ><h1 style="text-align:center; font-size:35px !important; vertical-align:bottom;">CERTIFICATE OF LIABILITY INSURANCE</h1></td>
    <td style="width:40px; text-align:right !important; padding-right:80px;"> <p style="border-top:1px solid; border-left:1px solid; border-right:1px solid; padding:10px;"> Date:{{$formcontrol->exp_date}} <p></td>

  </table>
  <div class="row">
  <table style="width:90% !important; border:1px solid;">

    <tr>
      <th colspan="2" style="border-bottom:1px solid; font-size:15px !important; padding-left: 5px!important; padding-right:5px !important;">THIS CERTIFICATE IS ISSUED AS A MATTER OF INFORMATION ONLY AND CONFERS NO RIGHTS UPON THE CERTIFICATE HOLDER. THIS CERTIFICATE DOES NOT AFFIRMATIVELY OR NEGATIVELY AMEND, EXTEND OR ALTER THE COVERAGE AFFORDED BY THE POLICIES  BELOW. THIS CERTIFICATE OF INSURANCE DOES NOT CONSTITUTE A CONTRACT BETWEEN THE ISSUING INSURER(S), AUTHORIZED REPRESENTATIVE OR PRODUCER, AND THE CERTIFICATE HOLDER.</th>
    </tr>
    <tr>
      <td colspan="2" style="border-bottom:1px solid; font-weight:bold; font-size:15px !important;" >IMPORTANT: if the certificate holder is an ADDITIONAL INSURED. the policy(ies) must be endorsed. if SUBROGATION IS WAIVED, subject to the terms and conditions of the policy, certain policies may require and endorsement. A statement on this certificate does not confer rights to the certificate holder in lieu of such endorsement(s).</td>
    </tr>
      <tr>
      <td style=" width: 200px !important; border-bottom: 1px solid; border-right:1px solid;"><b>PRODUCDER</b><br>
        {{$formcontrol->P_I_name}}<br>
        {{$formcontrol->P_I_address}}<br>
        {{$formcontrol->P_I_dba_state}},{{$formcontrol->P_I_city}},TX {{$formcontrol->P_I_dba_zip_code}}
      </td>
          <td><table border="0">
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
            <td colspan="2" style="border-bottom:1px solid !important; font-weight:bold; vertical-align:bottom; padding:0px;">
            <center>INSURER(S) AFFORDING COVERAGE</center>
            </td>
            <td style="border-bottom:1px solid !important; border-left:1px solid; font-weight:bold; vertical-align:bottom; padding:0px;">
            <center>NAIC #</center>
            </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid !important; font-weight:bold;">
      INSURER A:
      </td>
      <td style="border-bottom:1px solid !important;">{{$Ensured_a}}</td>
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
      <td style="border-bottom:1px solid !important; font-weight:bold;">
      INSURER F:
      </td>
      <td style="border-bottom:1px solid !important;">{{$Ensured_f}}</td>
      <td style="border-bottom:1px solid !important; border-left:1px solid;">
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
      <td style="border-bottom:1px solid !important;">
      <b>COVERAGES</b>
      </td>
      <td style="border-bottom:1px solid !important;">
      <b>CERTIFICATE NUMBER:</b>
      <label>ARMINS0008723</label>
      </td>
      <td style="border-bottom:1px solid !important;">
      <b>REVISION NUMBER</b>
      </td>
      </tr>
      </table>
    </td>
    </tr>
    <tr>
      <td colspan="2" style="border-bottom:1px solid !important; font-size:15px !important;">
      THIS IS TO CERTIFY THAT THE POLICES OF INSURANCE LISTED BELOW BEEN ISSUED TO THE INSURED NAMED ABOVE FOR THE POLICY PERIOD INDICATED. NOTWITHSTANDING ANY REQUIREMENT, TERM OR CONDITION OF ANY CONTACT OR OTHER DOCUMENT WITH RESPECT TO WHICH THIS CERTIFICATE MAY BE ISSUED OR MAY PERTAIN, THE INSURANCE AFFORDED BY THE POLICIES DESCRIBED HERE IN IS SUBJECT TO ALL THE TERMS, EXCLUSIONS AND CONDITIONS OF SUCH POLICIES. LIMITS SHOWN MAY HAVE BEEN RECUDED BY PAID CLAIMS.
    </td>
    </tr>
      <tr>
      <td colspan="2">
        <table>
          <tr>
            <td class="center l-height15" style="line-height:10px !important; width:42px; !important; border-bottom: 1px solid !important;">
              <b>INSR<br/>
              LTR</b>
            </td>
            <td class="center" style="width:250px; border-bottom:1px solid; border-left:1px solid; vertical-align:bottom;">
              <b>TYPE OF INSURANCE</b>
            </td>
            <td class="center l-height15" style="width:42px; border-bottom:1px solid; border-left:1px solid; vertical-align:bottom;">
              <b>ADDL<br/>
              INSR</b>
            </td>
            <td class="center l-height15" style="width:42px; border-bottom:1px solid; border-left:1px solid;">
              <b>SUBR<br/>
              WVD</b>
            </td>
            <td class="center" style="border-bottom:1px solid; border-left:1px solid;">
              <b>POLICY NUMBER</b>
            </td>
            <td class="center l-height15" style="width:90px; border-bottom:1px solid; border-left:1px solid;">
              <b>POLICY EFF<br/>
              (MM/DD/YYYY)</b>
            </td>
            <td class="center l-height15" style="width:90px; border-bottom:1px solid; border-left:1px solid;">
              <b>POLICY EXP<br/>
              (MM/DD/YYYY)</b>
            </td>
            <td class="center" style="width:350px; border-bottom:1px solid; border-left:1px solid; vertical-align:bottom;">
              <b>LIMITS</b>
            </td>
          </tr>
          <tr>
            <td style="border-right:1px solid; border-bottom:1px solid;">
              {{$glinsuranceletter}}
            </td>
            <td style="border-bottom:1px solid; border-right:1px solid;">
              <b>GENERAL LIABILITY</b><br>
              <div class="row">
                @if ( $gloptioncommercial === 'true')
                  <input type="checkbox" name="" value="" checked=""> COMMERCIAL GENERAL LIABILITY<br/>
                @else
                  <input type="checkbox" name="" value=""> COMMERCIAL GENERAL LIABILITY<br/>
                @endif
              </div>
              <div class="row">
                @if ( $gloptionclaims_made === 'true')
                <input type="checkbox" name="" value="" checked=""> CLAIMS-MADE<br/>
                @else
                <input type="checkbox" name="" value=""> CLAIMS-MADE<br/>
                @endif
              </div>
              <div class="row">
                @if ( $gloptionoccur === 'true')
                <input type="checkbox" name="" value="" checked=""> OCCUR<br/>
                @else
                <input type="checkbox" name="" value=""> OCCUR<br/>
                @endif
              </div>
              <div class="row">
                @if ($glother2 === 'true')
                <input type="checkbox" name="" value="" checked=""> <input name="" type="text" class="form-control" >{{$glotherinput2}}<br/>
                @else
                <input type="checkbox" name="" value=""> <input name="" type="text" class="form-control" placeholder=""><br/>
                @endif
              </div>
              <div class="row">
                GEN'L AGGREGATE LIMIT APPLIES PER:<br>
                @if ( $gloptionpolicy === 'true')
                <input type="checkbox" name="" value="" checked=""> POLICY<br>
                @else
                <input type="checkbox" name="" value=""> POLICY<br>
                @endif
              </div>
              <div class="row">
                @if ( $gloptionpolicy === 'true')
                <input type="checkbox" name="" value="" checked=""> PROJECT<br>
                @else
                <input type="checkbox" name="" value=""> PROJECT<br>
                @endif
              </div>
              <div class="row">
                @if ( $gloptionloc === 'true')
                <input type="checkbox" name="" value="" checked=""> LOC<br>
                @else
                <input type="checkbox" name="" value=""> LOC<br>
                @endif
              </div>
            </td>
            <td style="width:47px; border-bottom:1px solid; border-right:1px solid;">
              @if ( $gloptionaddl === 'true')
              <input type="checkbox" name="" value="" checked="">
              @else
              <input type="checkbox" name="" value="">
              @endif
            </td>
            <td style="width:48px; border-bottom:1px solid; border-right:1px solid;">
              @if ( $gloptionsubr === 'true')
              <input type="checkbox" name="" value="" checked="">
              @else
              <input type="checkbox" name="" value="">
              @endif
            </td>
            <td style="border-bottom:1px solid; border-right:1px solid;">
              {{$glpolicynumber}}
            </td>
            <td style="border-bottom:1px solid; border-right:1px solid;">
              {{$gleffdate}}
            </td>
            <td style="border-bottom:1px solid; border-right:1px solid;">
              {{$glexpdate}}
            </td>
            <td style="border-bottom:1px solid;">
              <table>
                <tr>
                  <td style="width:200px; border-bottom:1px solid;">
                    EACH OCURRENCE
                  </td>
                  <td style="border-bottom:1px solid; border-left:1px solid;">
                    $ {{$gleachocurrence}}
                  </td>
                </tr>
                <tr>
                  <td style="border-bottom:1px solid;">
                    DAMAGE TO RENTED PREMISES(Ea ocurrence)
                  </td>
                  <td style="border-bottom:1px solid; border-left:1px solid;">
                    $ {{$glrentedpermises}}
                  </td>
                </tr>
                <tr>
                  <td style="border-bottom:1px solid;">
                    MED EXP(Amy one person)
                  </td>
                  <td style="border-bottom:1px solid; border-left:1px solid;">
                    $ {{$glmedicalexpenses}}
                  </td>
                </tr>
                <tr>
                  <td style="border-bottom:1px solid;">
                    PERSONAL & ADV INJURY
                  </td>
                  <td style="border-bottom:1px solid; border-left:1px solid;">
                    $ {{$glpersonaladv}}
                  </td>
                </tr>
                <tr>
                  <td style="border-bottom:1px solid;">
                    GENERAL AGGREGATE
                  </td>
                  <td style="border-bottom:1px solid; border-left:1px solid;">
                    $ {{$glgeneralaggregate}}
                  </td>
                </tr>
                <tr>
                  <td style="border-bottom:1px solid;">
                    PRODUCTS-COMPO OP AGG
                  </td>
                  <td style="border-bottom:1px solid; border-left:1px solid;">
                    $ {{$glproductcomp}}
                  </td>
                </tr>
                <tr>
                  <td style="border-bottom:1px solid;">
                      {{$glotherinput}}
                  </td>
                  <td style="border-bottom:1px solid; border-left:1px solid;">
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
        <table style="width: 100% !important;">
        <tr>
          <td style="width:42px; border-bottom:1px solid; border-right:1px solid;">
            {{$alinsuranceletter}}
          </td>
          <td style="width:250px; border-bottom:1px solid;" >
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
          <td style="width:47px; border-bottom:1px solid; border-left:1px solid; border-right:1px solid;">
            @if ($aloptionaddl === 'true')
            <input type="checkbox" name="" value="" checked="">
            @else
            <input type="checkbox" name="" value="">
            @endif
          </td>
          <td style="width:48px; border-bottom:1px solid; border-right:1px solid;">
            @if ($aloptionsubr === 'true')
            <input type="checkbox" name="" value="" checked="">
            @else
            <input type="checkbox" name="" value="">
            @endif
          </td>
          <td style="border-bottom:1px solid; border-right:1px solid;">
            {{$alpolicynumber}}
          </td>
          <td style="width:90px; border-bottom:1px solid; border-right:1px solid;">
            {{$aleffdate}}
          </td>
          <td style="width:90px; border-bottom:1px solid; border-right:1px solid;">
            {{$alexpdate}}
          </td>
          <td style="width:350px; border-bottom:1px solid;">
            <table>
              <tr>
                <td style="width:200px; border-bottom:1px solid;">
                  COMBINED SINGLE LIMIT<br/>
                  (EA accident)
                </td>
                <td style="border-left:1px solid; border-bottom:1px solid;">
                  $ {{$alcombinedsingle}}
                </td>
              </tr>
              <tr>
                <td style="width:200px; border-bottom:1px solid;">
                  BODILY INJURY(Per person)
                </td>
                <td style="border-left:1px solid; border-bottom:1px solid;">
                  $ {{$albodilyperson}}
                </td>
              </tr>
              <tr>
                <td style="width:200px; border-bottom:1px solid;">
                  BODILY INJURY(Per accident)
                </td>
                <td style="border-left:1px solid; border-bottom:1px solid;">
                  $ {{$albodilyaccident}}
                </td>
              </tr>
              <tr>
                <td style="width:200px; border-bottom:1px solid;">
                  PROPERTY DAMAGE<br/>
                  (Per accident)
                </td>
                <td style="border-left:1px solid; border-bottom:1px solid;">
                  $ {{$alpropertydamage}}
                </td>
              </tr>
              <tr>
                <td style="width:200px; border-bottom:1px solid;">
                  {{$alotherinput2}}
                </td>
                <td style="border-left:1px solid; border-bottom:1px solid;">
                  $ {{$alother2}}
                </td>
              </tr>
              <tr>
                <td >
                  {{$alotherinput3}}
                </td>
                <td style="border-left:1px solid;">
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
        <table style="widht: 100% !important;">
        <tr>
          <td style="width:42px; border-bottom:1px solid; border-right:1px solid;">
            {{$ulinsuranceletter}}
          </td>
          <td style="width:250px; border-bottom:1px solid;">
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
          <td style="width:47px; border-bottom:1px solid; border-left:1px solid;">
            @if ($uloptionaddl === 'true')
            <input type="checkbox" name="" value="" checked="">
            @else
            <input type="checkbox" name="" value="" checked="">
            @endif
          </td>
          <td style="width:48px; border-bottom:1px solid; border-left:1px solid;">
            @if ($uloptionsubr === 'true')
            <input type="checkbox" name="" value="" checked="">
            @else
            <input type="checkbox" name="" value="">
            @endif
          </td>
          <td style="border-bottom:1px solid; border-left:1px solid;">
            {{$ulpolicynumber}}
          </td>
          <td style="width:90px; border-bottom:1px solid; border-left:1px solid;">
            {{$uleffdate}}
          </td>
          <td style="width:90px; border-bottom:1px solid; border-left:1px solid;">
            {{$ulexpdate}}
          </td>
          <td style="width:350px; border-bottom:1px solid; border-left:1px solid;">
            <table>
              <tr>
                <td style="width:200px; border-bottom:1px solid;">
                  EACH OCURRENCE
                </td>
                <td style="border-bottom:1px solid; border-left:1px solid;">
                  $ {{$uleachoccurent}}
                </td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid;">
                  AGGREGATE<br/>
                </td>
                <td style="border-bottom:1px solid; border-left:1px solid;">
                  $ {{$ulaggregate}}
                </td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid;">
                  {{$ulotherinput}}
                </td>
                <td style="border-bottom:1px solid; border-left:1px solid;">
                  $ {{$ulother}}
                </td>
              </tr>
              <tr>
                <td>
                  {{$ulotherinput2}}
                </td>
                <td style="border-left:1px solid;">
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
          <td style="width:42px; border-bottom:1px solid;">
            {{$formcontrol->W_C_insurance_letter}}
          </td>
          <td style="width:250px; border-bottom:1px solid; border-left:1px solid;">
            <b>WORKERS COMPESATION<br>
            AND EMPLOYERS' LIABILITY </b><br>
            ANY PROPRIETOR/PARTNER/EXECUTIVE OFFICER/MEMBER EXCLUDED?<input type="checkbox" name="" value=""><b> Y/N</b><br>
            <b>(Mandatory in NH)<br>
            if yes, describe under<br>
            SPECIAL PROVISIONS below
          </td>
          <td style="width:47px; border-bottom:1px solid; border-left:1px solid;">
            N/A
          </td>
          <td style="width:48px; border-bottom:1px solid; border-left:1px solid;">
            @if ($wcoptionsubr === 'true')
            <input type="checkbox" name="" value="" checked="">
            @else
            <input type="checkbox" name="" value="">
            @endif
          </td>
          <td style="border-bottom:1px solid; border-left:1px solid;">
            {{$formcontrol->W_C_policy_number}}
          </td>
          <td style="width:90px; border-bottom:1px solid; border-left:1px solid;">
            {{$formcontrol->W_C_eff_date}}
          </td>
          <td style="width:90px; border-bottom:1px solid; border-left:1px solid;">
            {{$formcontrol->W_C_exp_date}}
          </td>
          <td style="width:350px; border-bottom:1px solid; border-left:1px solid;">
            <table>
              <tr>
                <td style="width:200px; border-bottom:1px solid;">
                  <input type="checkbox" name="" value="">EACH OCURRENCE <input type="checkbox" name="" value="">{{$formcontrol->W_C_other_input}}
                </td>
                <td style="border-bottom:1px solid; border-left:1px solid;">
                  $ {{$formcontrol->W_C_other}}
                </td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid;">
                  E.L. EACH ACCIDENT
                </td>
                <td style="border-bottom:1px solid; border-left:1px solid;">
                  $ {{$formcontrol->W_C_each_accident}}
                </td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid;">
                  E.L. DISEABLE - EA EMPLOYEE</td>
                <td style="border-bottom:1px solid; border-left:1px solid;">
                  $ {{$formcontrol->W_C_ea_employee}}
                </td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid;">
                  E.L. DISEABLE - POLICY LIMIT
                </td>
                <td style="border-bottom:1px solid; border-left:1px solid;">
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
          <td style="width:42px; border-bottom:1px solid;">
            {{$formcontrol->A_C_a_insurance_letter}}<br>
            {{$formcontrol->A_C_b_insurance_letter}}
          </td>
          <td style="width:250px; border-bottom:1px solid; border-left:1px solid;">
            {{$formcontrol->A_C_a_policy_type}}<br>
            {{$formcontrol->A_C_b_policy_type}}
          </td>
          <td style="width:47px; border-bottom:1px solid; border-left:1px solid;">
            @if ($formcontrol->A_C_a_options_add_insurance === 'Additonal insurance')
            <input type="checkbox" name="" value="" checked=""><br>
            @else
            <input type="checkbox" name="" value=""><br>
            @endif
            @if ($formcontrol->A_C_b_options_add_insurance === 'Additonal insurance')
            <input type="checkbox" name="" value="" checked="">
            @else
            <input type="checkbox" name="" value="">
            @endif
          </td>
          <td style="width:48px; border-bottom:1px solid; border-left:1px solid;">
            @if ($formcontrol->A_C_a_options_surrogation === 'Surrogation')
            <input type="checkbox" name="" value="" checked=""><br>
            @else
            <input type="checkbox" name="" value=""><br>
            @endif
            @if ($formcontrol->A_C_b_options_surrogation === 'Surrogation')
            <input type="checkbox" name="" value="" checked="">
            @else
            <input type="checkbox" name="" value="">
            @endif
          </td>
          <td style="border-bottom:1px solid; border-left:1px solid;">
            {{$formcontrol->A_C_a_policy_number}}<br>
            {{$formcontrol->A_C_b_policy_number}}
          </td>
          <td style="width:90px; border-bottom:1px solid; border-left:1px solid;">
            {{$formcontrol->A_C_a_eff_date}}<br>
            {{$formcontrol->A_C_b_eff_date}}
          </td>
          <td style="width:90px; border-bottom:1px solid; border-left:1px solid;">
            {{$formcontrol->A_C_a_exp_date}}<br>
            {{$formcontrol->A_C_b_exp_date}}
          </td>
          <td style="width:350px; border-bottom:1px solid; border-left:1px solid;">
            <table>
              <tr>
                <td style="width:200px; border-bottom:1px solid;">
                  COVERAGE LIMITS 1 / DEDUCTIBLE
                </td>
                <td style="border-bottom:1px solid; border-left:1px solid;">
                  $ {{$formcontrol->A_C_a_coverage_limits}}
                </td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid;">
                  COVERAGE LIMITS 2 / DEDUCTIBLE
                </td>
                <td style="border-bottom:1px solid; border-left:1px solid;">
                  $ {{$formcontrol->A_C_b_coverage_limits}}
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td colspan="2" style="height:90px; border-bottom:1px solid;">
        <b>DESCRIPTION OF OPERATIONS / VEHICLES (Atthach ACORD 101, Additional Remarks Schedule, if more space is required)</b><br>
        {{$formcontrol->description}}
      </td>
    </tr>
    <tr>
      <th>
        CERTIFICATE HOLDER
      </th>
      <th style="border-left:1px solid;">
        CANCELLATION
      </th>
    </tr>
    <tr>
      <td rowspan="2" style="height:150px;">

      </td>
      <th style="border-bottom:1px solid; border-left:1px solid;">
        SHOULD ANY OF THE ABOVE DESCRIBED POLICIES BE CANCELLED BEFORE THE EXPIRATION DATE THEREOF, NOTICE WILL BE DELIVERED IN A ACCORDANCE WITH THE POLICY PROVISIONS.
      </th>
    </tr>
    <tr>
      <th style="border-left:1px solid;">
        AUTHORIZED REPRESENTATIVE
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
