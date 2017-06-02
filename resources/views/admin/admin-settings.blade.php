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

  @include('layouts.menu_admin')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row bg-title">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">Admin settings</h4> </div>
                  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                      <li><a href="index.html">Home</a></li>
                      <li class="active">Admin settings</li>
                    </ol>
                  </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-sm-12">
              <div class="white-box">
                  <h2 class="box-title m-b-0">Full access admin</h2>
                          <hr>
                          <div class="form-group">
                              <div class="col-lg-4 col-md-8 col-xs-12">
                                <i class="fa fa-key p-10"></i>
                                <label> Arias Alex</label>
                              </div>
                              <div class="col-md-8 col-xs-12 text-right"><button type="submit" class="btn btn-info"><i class="fa fa-trash-o"></i> Delete</button>
                                </div>
                          </div>
                          <hr>
                          <hr>
                          <hr>
                          <div class="form-group">
                              <div class="input-group">
                                <div class="col-md-8 col-xs-12 text-right"><button type="submit" class="btn btn-default btn-outline"><i class="fa fa-plus-circle"></i> Add new</button></div>
                              </div>
                          </div>
                          <h2 class="box-title m-b-0">Limited access admin</h2>
                                  <hr>
                                  <div class="form-group">
                                      <div class="col-lg-4 col-md-8 col-xs-12">
                                        <i class="fa fa-users p-10"></i>
                                        <label> Zapata Fabian</label>
                                      </div>
                                      <div class="col-md-8 col-xs-12 text-right"><button type="submit" class="btn btn-info"><i class="fa fa-trash-o"></i> Delete</button>
                                        </div>
                                  </div>
                                  <hr>
                                  <hr>
                                  <hr>
                                  <div class="form-group">
                                      <div class="col-lg-4 col-md-8 col-xs-12">
                                        <i class="fa fa-users p-10"></i>
                                        <label> Zapata Fabian</label>
                                      </div>
                                      <div class="col-md-8 col-xs-12 text-right"><button type="submit" class="btn btn-info"><i class="fa fa-trash-o"></i> Delete</button>
                                        </div>
                                  </div>
                                  <hr>
                                  <hr>
                                  <hr>
                                  <div class="form-group">
                                      <div class="col-lg-4 col-md-8 col-xs-12">
                                        <i class="fa fa-users p-10"></i>
                                        <label> Zapata Fabian</label>
                                      </div>
                                      <div class="col-md-8 col-xs-12 text-right"><button type="submit" class="btn btn-info"><i class="fa fa-trash-o"></i> Delete</button>
                                        </div>
                                  </div>
                                  <hr>
                                  <hr>
                                  <hr>
                                  <div class="form-group">
                                      <div class="input-group">
                                        <div class="col-md-8 col-xs-12 text-right"><button type="submit" class="btn btn-default btn-outline"><i class="fa fa-plus-circle"></i> Add new</button></div>
                                      </div>
                                  </div>
                                  <hr>
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
