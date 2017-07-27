@extends('layouts.master')

@section('library_css')
      <!-- Wizard CSS -->
    <link href="{{URL::asset('assets/css/responsive-user.css')}}" rel="stylesheet">
@endsection

@section('title') Login @endsection

@section('style')

  <style media="screen">
  .new-login-register .new-login-box {
      margin-left: 380px;
  }
  .alert.alert-error {
    margin-bottom: 0pc;
    background-color: #ff8888;
    color: white;
    text-align: center;
    padding: 10px;
    border-bottom: 2px solid red;
}
  </style>
@endsection

@section('body_content')
<!-- Preloader -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
</div>
<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<nav class="navbar navbar-default navbar-static-top m-b-0 loginnav">
    <div class="navbar-header">
        <div class="pl-50">
            <!-- Logo -->
            <a class="logo" href="index.html">
              <b>
                <img src="{{URL::asset('assets/plugins/images/arm_logo2.png')}}" alt="home" class="light-logo" />
             </b>
            </a>
        </div>
        <!-- /Logo -->
        <ul class="nav navbar-top-links navbar-right pull-right pr-50">
          <li class="dropdown">
              <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b class="hidden-xs"><i class="fa fa-language"></i>  English </b><span class="caret"></span> </a>
              <ul class="dropdown-menu dropdown-user animated flipInY">
                  <li><a href="#" class="text-right"> Spanish</a></li>
                  <li><a href="#" class="text-right"> Germany</a></li>
              </ul>
              <!-- /.dropdown-language -->
          </li>
            <!-- /.dropdown -->
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
<!-- End Top Navigation -->
<!-- ============================================================== -->
<section id="wrapper" class="new-login-register">

      <div class="new-login-box">
                <div class="white-box contentlogin" style="margin-top:130px;">
                    <h1 class="m-b-0 text-center login">Reset your password </h1>
                    <center><img src="{{URL::asset('assets/plugins/images/logo3.png')}}" alt="home" style="width:25%; display:none;" class="light-logo logo-login" /></center>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal new-lg-form" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-xs-12">
                               <p class="t-mobile">Enter your email and we'll send you a link to reset your password</p>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Enter a Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light btnlogin">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
      </div>


</section>
@endsection
