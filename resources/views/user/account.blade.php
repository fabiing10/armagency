@extends('layouts.master_user')

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
          @if (session()->has('alert'))
            <div class="alert alert-danger alert-dismissable">Your Account expires soon -  {{\Carbon\Carbon::parse(Session('alert'))->format('m/d/Y')}} </div>
          @endif
          <div class="white-box">
              <h2 class="box-title m-b-0">NEED HELP?</h2>
              <p class="text-muted m-b-30 font-13 subtitleaccount">We are here to help</p>
              @if (Session::has('sweet_alert.alert'))
                  <script>
                      swal({!! Session::get('sweet_alert.alert') !!});
                  </script>
              @endif

                      <div class="row">
                        <div class="col-xs-12">

                            @if ($FormControl->status === 'active')
                            <label> Account status:</label><span style="color:green;"> ACTIVE</span>
                            @else
                            <label> Account status:</label><span style="color:red;"> CANCEL</span>
                            @endif
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-lg-4 issueaccount">
                            <i class="fa fa-calendar p-10"></i>
                            <label> Issue date:</label><span> {{$FormControl->exp_date}}</span>
                        </div>
                        <div class="col-lg-4">
                            <i class="fa fa-calendar-o p-10"></i>
                            <label> Expiration date:</label><span> {{$FormControl->exp_date}}</span>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                          <div class="col-lg-12"><i class="fa fa-lock p-10"></i>
                          <label> My Password</label>
                          <button type="submit" style="float:right;" class="btn btn-info btnaccount" onclick="window.location.href='reset-password'"> <i class="fa fa-pencil"></i> Edit</button></div>

                      </div>
                      <hr>

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
$(document).ready(function() {
  $('.titlenavigation').html('Account');
});
</script>
@endsection
