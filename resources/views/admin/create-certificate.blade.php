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
  </style>
@endsection

@section('body_content')
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
      <div class="row">
          <div class="col-sm-12">
              <div class="white-box">
                  <h3 class="box-title m-b-0">Validation</h3>
                  <p class="text-muted m-b-30 font-13"> This is the Validation wizard with validation.</p>
                  <div id="WizardFormContainer" class="wizard">
                      <ul class="wizard-steps" role="tablist">
                          <li class="active" role="tab">
                              <h4><span><i class="ti-user"></i></span>1</h4> </li>
                          <li role="tab">
                              <h4><span><i class="ti-credit-card"></i></span>2</h4> </li>
                          <li role="tab">
                              <h4><span><i class="ti-check"></i></span>3</h4> </li>
                          <li role="tab">
                              <h4><span><i class="ti-check"></i></span>4</h4> </li>
                          <li role="tab">
                              <h4><span><i class="ti-check"></i></span>5</h4> </li>
                      </ul>
                      <form id="dataFormContainer" class="form-horizontal" method="POST">
                          <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                          <div class="wizard-content">


                              @include('admin.options.tab_01')
                              @include('admin.options.tab_02')
                              @include('admin.options.tab_03')
                              @include('admin.options.tab_04')
                              @include('admin.options.tab_05')

                          </div>
                      </form>
                  </div>
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
@endsection

@section('script')
<script type="text/javascript">
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
        },
        onFinish: function() {
          $("#sendForm").trigger("click");

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
