@extends('layouts.master')

@section('title') Login @endsection

@section('style')

  <style media="screen">
  .new-login-register .new-login-box {
      margin-left: 380px;
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
<nav class="navbar navbar-default navbar-static-top m-b-0">
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
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b class="hidden-xs"><i class="fa fa-user"></i>  Login </b><span class="caret"></span> </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li><a href="#" class="text-right"> User Login</a></li>
                    <li><a href="#" class="text-right"> Admin Login</a></li>
                </ul>
                <!-- /.dropdown-login -->
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
                <div class="white-box" style="margin-top:130px;">
                    <h1 class="m-b-0 text-center">Admin login</h1>


                    {!! Form::open(['url' => '/login','class' => 'form-horizontal new-lg-form','method' => 'POST']) !!}

                    <div class="form-group  m-t-20">
                      <div class="col-xs-12">
                        <input class="form-control" type="text" required="" name="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12">
                        <input class="form-control" type="password" required="" name="password" placeholder=" Password">
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Login</button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                        <a href="javascript:void(0)" id="to-recover" class="text-dark2 text-center"> Forgot your password?</a> </div>
                      </div>
                    </div>
                  </form>
                  <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                      <div class="col-xs-12">
                        <h3>Recover Password</h3>
                        <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                      </div>
                    </div>
                    <div class="form-group ">
                      <div class="col-xs-12">
                        <input class="form-control" type="text" required="" name="" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                      </div>
                    </div>
                  {!! Form::close() !!}
                </div>
      </div>


</section>
@endsection
