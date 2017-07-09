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
    <div class="container-fluid">
        <div class="row bg-title">
          <div class="row">
                <ol class="breadcrumb" style="float:left; margin-left:30px;">
                  <li><a href="/admin">Home</a></li>
                  <li class="active">Create Admin</li>
                </ol>
          </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-sm-12">
            <div class="row" style="padding-bottom:10px;">
              <div class="col-sm-6">
                <h3 class="box-title m-b-0">Create Admin</h3>
              </div>
              </div>
              <div class="white-box">
                      <form id="dataFormContainer" class="form-horizontal floating-labels" method="POST">
                          <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                          <input type="hidden" name="option_user" value="{{$option_user}}" />
                            <div class="panel-body">
                              <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" id="name_insured" name="name_insured" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="name_insured">Name</label>
                                      </div>
                                    </div>
                                    </div>
                                  <!--/span-->
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" id="address_insured" name="address_insured" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="address_insured">Address</label>
                                      </div>
                                    </div>
                                  </div>
                                  <!--/span-->
                              </div>
                              <!--/row-->
                              <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" id="phone_insured" name="phone_insured" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="phone_insured">Phone</label>
                                      </div>
                                    </div>
                                    </div>
                                  <!--/span-->
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" id="email_insured" name="email_insured" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="email_insured">Email</label>
                                      </div>
                                    </div>
                                  </div>
                                  <!--/span-->
                              </div>
                              <!--/row-->
                              <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" id="password_insured" name="password_insured" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="password_insured">Password</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" id="password_insured_repeat" name="password_insured_repeat" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="password_insured">Repeat Password</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-12 m-t-10">
                                    <button type="submit" id="sendForm" class="btn btn-info m-l-20 hidden-xs hidden-sm waves-effect waves-light">Save</button>
                                  </div>
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
</script>
@endsection
