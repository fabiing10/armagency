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
                  <li class="active">Account</li>
                </ol>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="white-box">
              <h2 class="box-title m-b-0">NEED HELP?</h2>
              <p class="text-muted m-b-30 font-13">We are here to help</p>
              <div class="row m-t-30">
                      <div class="form-group">
                        <div class="col-lg-4 col-md-8 col-xs-12">
                            <img src="{{URL::asset('assets/plugins/images/icono2.png')}}" style="width: 10%;"></img>
                            <label> Account status:</label><span style="color:green;"> Active</span>
                        </div>
                      </div>
                      <hr>
                      <div class="form-group">
                        <div class="col-lg-4 col-md-8 col-xs-12">
                            <i class="fa fa-calendar p-10"></i>
                            <label> Issue date:</label><span> 19/02/2017</span>
                        </div>
                        <div class="col-lg-4 col-md-8 col-xs-12">
                            <i class="fa fa-calendar-o p-10"></i>
                            <label> Expiration date:</label><span> 19/02/2017</span>
                        </div>
                      </div>
                      <br>
                      <hr>
                      <div class="form-group">
                          <div class="col-lg-4 col-md-8 col-xs-12"><i class="fa fa-lock p-10"></i>
                          <label> My Password</label></div>
                          <div class="col-md-8 col-xs-12 text-right"><button type="submit" class="btn btn-info" onclick="window.location.href='reset-password'"> <i class="fa fa-pencil"></i> Edit</button></div>
                      </div><br>
                      <hr>
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
