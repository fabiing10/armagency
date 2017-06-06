@extends('layouts.master')

@section('library_css')
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
                            <div class="white-box">
                                <h2 class="box-title m-b-0">RESET PASSWORD</h2>
                                <p class="text-muted m-b-30 font-13"></p>

                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-lock grey"></i></div>
                                                    <input type="password" class="form-control" id="exampleInputpwd2" placeholder="Enter pwd">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-lock grey"></i></div>
                                                    <input type="password" class="form-control" id="exampleInputpwd2" placeholder="Re Enter pwd">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-lock grey"></i></div>
                                                    <input type="password" class="form-control" id="exampleInputpwd2" placeholder="Re Enter pwd">
                                                </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-xs-12 col-sm-12 col-md-12 m-t-10">
                                                <a href="" id="to-recover" class="blue text-center"><i class="fa fa-question-circle m-r-5 blue"></i> Forgot your password?</a> </div>
                                              </div>
                                              <br>
                                              <div class="col-xs-12 col-sm-12 col-md-12 m-t-10">
                                                <a href="reset-password" class="btn btn-default m-l-20 hidden-xs hidden-sm waves-effect waves-light">Back</a>
                                                <a href="get-password" class="btn btn-info m-l-20 hidden-xs hidden-sm waves-effect waves-light">Next</a>
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

@endsection
