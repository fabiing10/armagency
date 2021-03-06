@extends('layouts.master_user')

@section('library_css')
    <link href="{{URL::asset('assets/css/responsive-user.css')}}" rel="stylesheet">
@endsection

@section('style')

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
                <h4 class="page-title">ACCOUNT</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
              <ol class="breadcrumb">
                <li><a href="user/certificate">Home</a></li>
                <li><a href="account">Account</a></li>
                <li class="active">Reset Password</li>
              </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-sm-12">
                      <div class="panel panel-default">
                            <div class="white-box m-30-responsive">
                                <h2 class="box-title m-b-0">GET PASSWORD</h2>
                                <p class="text-muted m-b-30 font-13">Enter your email address, press send and check your email. You'll get a password</p>

                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                      <form id="dataFormContainer" class="form-horizontal" method="POST">
                                          <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                                          <div class="form-group">
                                              <div class="input-group">
                                              <div class="input-group-addon"><i class="fa fa-envelope grey"></i></div>
                                              <input type="email" class="form-control" name="email" placeholder="Enter email address"> </div>
                                          </div>
                                              <br>
                                              <div class="col-xs-12 col-sm-12 col-md-12 m-t-10">
                                                <a href="account" class="btn btn-default m-l-20 hidden-xs hidden-sm waves-effect waves-light">Cancel</a>
                                                <button type="submit" id="sendForm" class="btn btn-info m-l-20 hidden-xs hidden-sm waves-effect waves-light">Next</button>
                                                <button type="submit"  style="display:none;" id="sendForm" class="btn btn-info hidden-sm waves-effect waves-light changereset">Reset password</button>
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

@endsection

@section('script')
<script>
        onFinish: function() {
          $("#sendForm").trigger("click");

        }
</script>
@endsection
