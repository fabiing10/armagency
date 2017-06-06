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
                  <div class="col-lg-6 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                      <li><a href="/user">Home</a></li>
                      <li class="active">Send via</li>
                    </ol>
                  </div>
                  <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">
                    <a href="#" target="_blank" class="btn btn-info pull-left m-l-20 hidden-xs hidden-sm waves-effect waves-light">Dowloand Certificate PDF</a>
                  </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-sm-12">
                  <div class="white-box">

                                <h2 class="box-title m-b-0">SEND VIA</h2>
                                <p class="text-muted m-b-30 font-13"></p>

                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form>
                                          <div class="form-group">
                                              <label class="control-label">Send to clients</label>
                                              <div class="radio-list">
                                                  <div class="checkbox checkbox-success checkbox-circle">
                                                      <input id="checkbox-10" type="checkbox" checked="">
                                                      <label for="checkbox-10"> client@email.com </label>
                                                  </div>
                                                  <hr>
                                                  <div class="checkbox checkbox-success checkbox-circle">
                                                      <input id="checkbox-10" type="checkbox" >
                                                      <label for="checkbox-10"> 800-363-4806 </label>
                                                  </div>
                                                  <hr>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">Send me a copy to</label>
                                              <div class="radio-list">
                                                  <div class="checkbox checkbox-success checkbox-circle">
                                                      <input id="checkbox-10" type="checkbox" >
                                                      <label for="checkbox-10"> nando2008@hotmail.com </label>
                                                  </div>
                                                  <hr>
                                                  <div class="checkbox checkbox-success checkbox-circle">
                                                      <input id="checkbox-10" type="checkbox" >
                                                      <label for="checkbox-10"> 558-430-0002 </label>
                                                  </div>
                                                  <hr>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                            <div class="col-lg-1" style="padding-left:0px;">
                                              <a href="send-certificate-to.html" class="btn btn-default pull-left hidden-xs hidden-sm waves-effect waves-light">Back</a>
                                            </div>
                                            <div class="col-lg-1" style="padding-left:0px;">
                                              <a href="client-list" class="btn btn-info pull-left hidden-xs hidden-sm waves-effect waves-light">Next</a>
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
