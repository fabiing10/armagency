@extends('layouts.master')

@section('library_css')
      <!-- Wizard CSS -->
      <link href="{{URL::asset('assets/plugins/bower_components/jquery-wizard-master/css/wizard.css')}}" rel="stylesheet">
      <!-- summernotes CSS -->
      <link href="{{URL::asset('assets/plugins/bower_components/summernote/dist/summernote.css')}}" rel="stylesheet" />

      <link href="{{URL::asset('assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('style')

  <style media="screen">
    .wizard-buttons > a {
      margin-right: 5px;
      padding: 5px 10px;
      border: 1px solid #aaa;
      border-radius: 20px;
    }
    .wizard-steps>li {
    display: table-cell;
    padding: 10px 20px;
    background: #f7fafc;
    }
    .row p {
    padding-left: 15px;
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
<div id="wrapper">

  @include('layouts.navigation')

  @include('layouts.menu_admin')
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
          <div class="row">
                <ol class="breadcrumb" style="float:left; margin-left:30px;">
                  <li><a href="/admin">Home</a></li>
                  <li class="active">Edit Certificate</li>
                </ol>
          </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-sm-12">
            <div class="row" style="padding-bottom:10px;">
              <div class="col-sm-6">
                <h3 class="box-title m-b-0">Edit Certificate</h3>
              </div>
              </div>
              <div class="white-box">
                      <form id="dataFormContainer" class="form-horizontal floating-labels" method="POST">
                          <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                          <div class="wizard-content">
                              @include('admin.edit.tab_01')
                          </div>
                      </form>
              </div>
          </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
@endsection

@section('library_js')
    <script src="{{URL::asset('assets/plugins/bower_components/summernote/dist/summernote.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- Form Wizard JavaScript -->
    <script src="{{URL::asset('assets/plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js')}}"></script>
    <!-- FormValidation -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css')}}">
    <!-- FormValidation plugin and the class supports validating Bootstrap form -->
    <script src="{{URL::asset('assets/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/mask.js')}}"></script>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {

  $('.summernote').summernote({
      height: 350, // set editor height
      minHeight: null, // set minimum height of editor
      maxHeight: null, // set maximum height of editor
      focus: false // set focus to editable area after initializing summernote
  });
  $('.inline-editor').summernote({
      airMode: true
  });


  var SweetAlert = function() {};

  //examples
  SweetAlert.prototype.init = function() {
    //Parameter
    $('#sa-params{{$user->id}}').click(function(){
      console.log("Click")
      var id = $(this).attr("data-id");
      console.log(id)
        swal({
            title: "Update Form?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, I'm sure",
            cancelButtonText: "No, go back",
            closeOnConfirm: true,
            closeOnCancel: true
        }, function(isConfirm){
            if (isConfirm) {
              dataFormContainer.submit();
                /*$.post( "/create-certificate").done(function(data) {
                  console.log(data);
                  location.reload(true);
                });*/
            } else {
            }
        });
    });
  }
  $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
$.SweetAlert.init()
});
(function() {
    $('#WizardFormContainer').wizard({
        onInit: function() {
            $('#dataFormContainer').formValidation({
                framework: 'bootstrap',
                fields: {
                    username: {
                        validators: {
                            notEmpty: {
                                message: 'The username is required'
                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'The username must be more than 6 and less than 30 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_\.]+$/,
                                message: 'The username can only consist of alphabetical, number, dot and underscore'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'The email address is required'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            },
                            different: {
                                field: 'username',
                                message: 'The password cannot be the same as username'
                            }
                        }
                    }
                }
            });
        },
        validator: function() {
            var fv = $('#dataFormContainer').data('formValidation');
            var $this = $(this);
            // Validate the container
            fv.validateContainer($this);
            var isValidStep = fv.isValidContainer($this);
            if (isValidStep === false || isValidStep === null) {
                return false;
            }
            return true;
        }
    });
})();

jQuery('.mydatepicker, #datepicker').datepicker();
jQuery('#datepicker1, #datepicker2').datepicker({
    autoclose: true,
    todayHighlight: true
});
jQuery('#date-range').datepicker({
    toggleActive: true
});

</script>
@endsection
