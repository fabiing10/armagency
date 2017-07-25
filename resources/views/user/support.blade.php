@extends('layouts.master_user')

@section('library_css')
    <link href="{{URL::asset('assets/css/responsive-user.css')}}" rel="stylesheet">
@endsection

@section('style')
<style>
hr {
    margin-top: 10px;
    margin-bottom: 2px;
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
                  <h4 class="page-title">SUPPORT</h4> </div>
              <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                  <li><a href="/user">Home</a></li>
                  <li class="active">Support</li>
                </ol>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          @if (session()->has('alert'))
            <div class="alert alert-danger alert-dismissable">Your Policy Expires Soon Please Contact ARM Insurance Agency -  {{\Carbon\Carbon::parse(Session('alert'))->format('m/d/Y')}} </div>
          @endif
          <!-- /.row -->
          <div class="white-box">
              <h2 class="box-title m-b-0 t-center">NEED HELP?</h2>
              <p class="text-muted m-b-30 font-13 disable t-center">We are here to help</p>
              <div class="row ">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                        <img src="{{URL::asset('assets/plugins/images/arm_logo.png')}}" alt="home" class="light-logo text-center support-logo"></div>
                        <h1 class="box-title titlesupport m-b-0 block" style="text-align:center; display:none;">NEED HELP?</h1>
                        <p class="text-muted m-b-30 font-13 titlesupport block" style="text-align:center; display:none;">Please contact us with any questions or concerns.

.<br>ARM Insurance Agency is here to help with all your insurance needs.</p>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                          <div class="input-group">
                          <i class="fa fa-phone p-10"></i>
                          <label>281-550-1720</label>
                          </div>
                      </div>
                      <hr>
                      <div class="form-group">
                          <div class="input-group">
                          <i class="fa fa-envelope p-10"></i>
                          <label>info@armagencyonline.com</label>
                          </div>
                      </div>
                      <hr>
                      <div class="form-group">
                          <div class="input-group">
                          <i class="fa fa-globe p-10"></i>
                          <label> www.armagencyonline.com</label>
                          </div>
                      </div>
                      <hr>
                      <div class="form-group">
                          <div class="input-group">
                          <i class="ti-map p-10"></i>
                          <label> 4511 Highway 6 N. Ste. A Houston, TX 77084</label>
                          </div>
                      </div>
                      <hr>
              </div>
          </div>
          <!-- ============================================================== -->
          <!-- wallet, & manage users widgets -->
          <!-- ============================================================== -->
      </div>
@endsection

@section('library_js')

@endsection

@section('script')

@endsection
