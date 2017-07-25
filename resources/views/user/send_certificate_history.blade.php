@extends('layouts.master_user')

@section('library_css')
<!-- Wizard CSS -->
<link href="{{URL::asset('assets/plugins/bower_components/jquery-wizard-master/css/wizard.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/responsive-user.css')}}" rel="stylesheet">
@endsection

@section('style')
<style>
.wizard-steps{
  display: none;
}
.wizard-content {
    border: 0px;
}
hr {
    margin-top: 10px;
    margin-bottom: 10px;
    border: 0;
    border-top: 1px solid #eee;
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

  @include('layouts.menu_user')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row bg-title">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">HOME</h4> </div>
              <!-- /.col-lg-12 -->
          </div>
          @if (session()->has('alert'))
            <div class="alert alert-danger alert-dismissable">Your Policy Expires Soon Please Contact ARM Insurance Agency -  {{\Carbon\Carbon::parse(Session('alert'))->format('m/d/Y')}} </div>
          @endif
          <!-- /.row -->
          <div class="row">
              <div class="col-sm-12">
                  <div class="white-box">
                              <div class="col-lg-3" style="padding-left:0px; padding-bottom:40px;">
                                <h2 class="box-title m-b-0">SEND CERTIFICATE TO</h2>
                              </div>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                      <div id="WizardFormContainer" class="wizard">
                                          <ul class="wizard-steps" role="tablist">
                                              <li class="active" role="tab">
                                                  <h4><span><i class="ti-user"></i></span>1</h4> </li>
                                              <li role="tab">
                                                  <h4><span><i class="ti-credit-card"></i></span>2</h4> </li>
                                          </ul>
                                          <form id="dataFormContainer" class="form-horizontal floating-labels s-c" action="/user/certificate" method="POST">
                                              <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                                              <input type="hidden" name="client_value" value="{{$client->id }}" />
                                              <div class="wizard-content">
                                                  <div class="wizard-pane active" role="tabpanel">

                                                    <div class="row">
                                                      <div class="col-md-12">
                                                      <div class="form-group">
                                                        <div class="input-group-addon"><i class="fa fa-user grey"></i></div>
                                                        <div class="form-group f-style">
                                                            <input type="text" class="form-control input-sm" value="{{$client->certificate_holder_name}}" id="certificate_name" name="certificate_name" required><span class="highlight"></span> <span class="bar"></span>
                                                            <label for="certificate_name">Certificate Holders Name</label>
                                                        </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                          <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                                          <div class="form-group f-style">
                                                              <input type="text" class="form-control input-sm" value="{{$client->address}}" id="address_client" name="address_client" required><span class="highlight"></span> <span class="bar"></span>
                                                              <label for="address_client">Address</label>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                          <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                                          <div class="form-group f-style">
                                                              <input type="text" class="form-control input-sm" value="{{$client->city}}" id="city_client" name="city_client" required><span class="highlight"></span> <span class="bar"></span>
                                                              <label for="city_client">City</label>
                                                          </div>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                          <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                                          <div class="form-group f-style">
                                                              <input type="text" class="form-control input-sm" value="{{$client->state}}" id="state_client" name="state_client" required><span class="highlight"></span> <span class="bar"></span>
                                                              <label for="state_client">State</label>
                                                          </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                          <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                                          <div class="form-group f-style">
                                                              <input type="text" class="form-control input-sm" value="{{$client->zip_code}}" id="zipcode_client" name="zipcode_client" required><span class="highlight"></span> <span class="bar"></span>
                                                              <label for="zipcode_client">Zip Code</label>
                                                          </div>
                                                          </div>
                                                      </div>
                                                    </div>


                                                    <div class="form-group">
                                                      <div class="input-group-addon"><i class="fa fa-inbox"></i></div>
                                                      <div class="form-group f-style">
                                                          <input type="text" class="form-control input-sm" value="{{$client->email}}" id="email_client" name="email_client" ><span class="highlight"></span> <span class="bar"></span>
                                                          <label for="email_client">Email</label>
                                                      </div>
                                                    </div>

                                                    <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                          <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                          <div class="form-group f-style">
                                                              <input type="text" class="form-control input-sm" value="{{$client->phone_number }}" id="phone_client" name="phone_client"><span class="highlight"></span> <span class="bar"></span>
                                                              <label for="phone_client">Phone number</label>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                          <div class="input-group-addon"><i class="fa fa-fax"></i></div>
                                                          <div class="form-group f-style">
                                                              <input type="text" class="form-control input-sm" value="{{$client->fax}}" id="fax_client" data-mask="(999) 999-9999" name="fax_client" ><span class="highlight"></span> <span class="bar"></span>
                                                              <label for="fax_client">Fax</label>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>










                                                      <div class="form-group" style="display:none;">
                                                        <div class="checkbox checkbox checkbox-success">
                                                          <input type="checkbox" name="client_list" id="client_list" data-error="Before you wreck yourself">
                                                          <label for="terms4"> Save to clients list</label>
                                                          <div class="help-block with-errors"></div>
                                                        </div>
                                                      </div>

                                                  </div>
                                                  <div class="wizard-pane" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-xs-12">
                                                            <form>
                                                              <div class="form-group">
                                                                  <p class="control-label">Send to clients</p>
                                                                  <div class="radio-list">
                                                                      <div class="checkbox checkbox-success checkbox-circle">
                                                                          <input type="checkbox" name="email_option" checked>
                                                                          <label for="email_option" id="email_option">{{$client->email}}</label>
                                                                      </div>
                                                                      <hr>
                                                                      <div class="checkbox checkbox-success checkbox-circle fax_option">
                                                                          <input name="fax_option" type="checkbox" >
                                                                          <label for="fax_option" id="fax_option">{{$client->fax}}</label>
                                                                      </div>
                                                                      <hr class="fax_option">
                                                                  </div>
                                                              </div>
                                                              <div class="form-group">
                                                                  <p class="control-label">Send me a copy to</p>
                                                                  <div class="radio-list">
                                                                      <div class="checkbox checkbox-success checkbox-circle">
                                                                          <input id="email_to_me" name="email_to_me" type="checkbox" >
                                                                          <label for="email_to_me"> {{$user->email }}</label>
                                                                      </div>
                                                                      <hr>
                                                                      <div class="checkbox checkbox-success checkbox-circle">
                                                                          <input id="phone_to_me" name="phone_to_me" type="checkbox" >
                                                                          <label for="phone_to_me"> {{$user->phone }} (Fax)</label>
                                                                      </div>
                                                                      <hr>
                                                                  </div>
                                                              </div>
                                                              <input type="submit" id="sendForm" style="display:none;" />
                                                            </form>
                                                        </div>
                                                    </div>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>


                                    </div>
                                </div>
                            </div>
              </div>
          </div>
          <!-- ============================================================== -->
          <!-- wallet, & manage users widgets -->
          <!-- ============================================================== -->
      </div>
  </div>
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
(function() {


$('#email_client').change(function(){
  $('#email_option').html($('#certificate_name').val()+" ("+$('#email_client').val()+")");
});
$('#fax_client').change(function(){
  $('#fax_option').html($('#fax_client').val()+" (Fax)");
});



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
            }else{
              $('#email_option').html($('#certificate_name').val()+" ("+$('#email_client').val()+")");
              if($('#fax_client').val() != ""){
                $('#fax_option').html($('#fax_client').val()+" (Fax)");
              }else{
                $('.fax_option').fadeOut();
              }

              console.log("Correcto")
              return true;
            }

        },
        onFinish: function() {
          $("#sendForm").trigger("click");

        }
    });

    $('#WizardFormContainer').wizard('next');
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
