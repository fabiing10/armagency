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
                  <h4 class="page-title">HOME</h4> </div>
                  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                      <li><a href="user/certificate">Home</a></li>
                    </ol>
                  </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-sm-12">
                  <div class="white-box">
                              <div class="col-lg-3" style="padding-left:0px; padding-bottom:40px;">
                                <h2 class="box-title m-b-0">SEND CERTIFICATE TO</h2>
                              </div>
                                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                  <a href="#" target="_blank" class="btn btn-info pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-align-left"></i>  Clients list</a>
                                </div>
                                <p class="text-muted m-b-30 font-13"></p>

                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form>
                                            <div class="form-group">
                                                <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user grey"></i></div>
                                                <input type="text" class="form-control" id="exampleInputuname" placeholder="Certificate holders name"> </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-world grey"></i></div>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Address"> </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-phone grey"></i></div>
                                                <input type="tel" class="form-control" id="exampleInputphone" placeholder="phone number"> </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-fax grey"></i></div>
                                                <input type="password" class="form-control" id="exampleInputpwd2" placeholder="Fax"> </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-envelope grey"></i></div>
                                                <input type="password" class="form-control" id="exampleInputpwd1" placeholder="Email"> </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="checkbox checkbox checkbox-success">
                                                <input type="checkbox" id="terms4" data-error="Before you wreck yourself" required>
                                                <label for="terms4"> Save to clients list</label>
                                                <div class="help-block with-errors"></div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="col-lg-12" style="padding-left:0px;">
                                                <a href="send-via" class="btn btn-info pull-left hidden-xs hidden-sm waves-effect waves-light">Next</a>
                                              </div>
                                            </div>
                                        </form>
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
