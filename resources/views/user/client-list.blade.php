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
                      <li><a href="index.html">Home</a></li>
                      <li class="active">Client list</li>
                    </ol>
                  </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-sm-12">
                            <div class="col-sm-12">
                                <div class="white-box">
                                  <div class="row">
                                  <div class="col-sm-6">
                                    <h3 class="box-title m-b-0">CLIENT LIST</h3>
                                    <p>Select a client from your list</p>
                                  </div>
                                    <div class="col-sm-6">
                                      <div id="editable-datatable_filter" class="dataTables_filter">
                                        <input type="search" class="form-control input-sm" placeholder="Enter search" aria-controls="editable-datatable">
                                      </div>
                                    </div>
                                  </div>
                                    <div class="table-responsive">
                                        <table id="myTable" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Sent date</th>
                                                    <th>address</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>2011/04/25</td>
                                                    <td>4511 HWY 6 N, HOUSTON, TX 77084</td>
                                                </tr>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>2011/04/25</td>
                                                    <td>4511 HWY 6 N, HOUSTON, TX 77084</td>
                                                </tr>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>2011/04/25</td>
                                                    <td>4511 HWY 6 N, HOUSTON, TX 77084</td>
                                                </tr>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>2011/04/25</td>
                                                    <td>4511 HWY 6 N, HOUSTON, TX 77084</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-lg-1" style="padding-left:0px;">
                                        <a href="send-via.html" class="btn btn-default pull-left hidden-xs hidden-sm waves-effect waves-light">Back</a>
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
