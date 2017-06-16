@extends('layouts.master')

@section('library_css')
    <link href="{{URL::asset('assets/css/responsive-user.css')}}" rel="stylesheet">
@endsection

@section('style')
<style>
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
                  <h4 class="page-title">ACCOUNT</h4> </div>
              <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                  <li><a href="/user">Home</a></li>
                  <li class="active">Account</li>
                </ol>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="white-box" style="padding:20px;">
              <h2 class="box-title m-b-0">NEED HELP?</h2>
              <p class="text-muted m-b-30 font-13 subtitleaccount">We are here to help</p>
              <div class="row m-t-30">
                      <div class="row">
                        <div class="col-xs-12">
                            <img src="{{URL::asset('assets/plugins/images/icono2.png')}}" class="w-6-reponsive" style="width: 3%;"></img>
                            @if ($FormControl->status === 'active')
                            <label> Account status:</label><span style="color:green;"> Active</span>
                            @else
                            <label> Account status:</label><span style="color:red;"> Desactive</span>
                            @endif
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-lg-4 issueaccount">
                            <i class="fa fa-calendar p-10"></i>
                            <label> Issue date:</label><span> {{$FormControl->W_C_exp_date}}</span>
                        </div>
                        <div class="col-lg-4">
                            <i class="fa fa-calendar-o p-10"></i>
                            <label> Expiration date:</label><span> {{$FormControl->W_C_exp_date}}</span>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                          <div class="col-lg-4"><i class="fa fa-lock p-10"></i>
                          <label> My Password</label> <button style="display:none;" type="submit" class="btn btn-info btnaccount" onclick="window.location.href='reset-password'"> <i class="fa fa-pencil"></i> Edit</button></div>
                          <div class="col-md-8 text-right"><button type="submit" class="btn btn-info btnaccount2" onclick="window.location.href='reset-password'"> <i class="fa fa-pencil"></i> Edit</button></div>
                      </div>
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
