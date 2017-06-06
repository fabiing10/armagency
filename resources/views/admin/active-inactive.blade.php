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
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
              <div class="row">
                    <ol class="breadcrumb" style="float:left; margin-left:15px;">
                      <li><a href="index.html">Home</a></li>
                      <li class="active">Active-Cancelled</li>
                    </ol>
              </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-sm-12">
              <div class="row" style="padding-bottom:10px;">
                <div class="col-sm-6">
                  <h3 class="box-title m-b-0">Active - Cancelled</h3>
                </div>
                  <div class="col-sm-6">
                    <div id="editable-datatable_filter" class="dataTables_filter">
                      <input type="search" class="form-control input-sm" placeholder="Enter search" aria-controls="editable-datatable">
                    </div>
                  </div>
                </div>
                  <div class="white-box">
                      <div class="table-responsive">
                          <table id="myTable" class="table table-striped">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Exp date</th>
                                      <th>Insurance #</th>
                                      <th>Manage</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>Perez Correa Juan Pablo </td>
                                      <td>04-20-17</td>
                                      <td>21114404-C200746</td>
                                      <td>Active</td>
                                  </tr>
                                  <tr>
                                      <td>Perez Correa Juan Pablo </td>
                                      <td>04-20-17</td>
                                      <td>21114404-C200746</td>
                                      <td>canceled</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- wallet, & manage users widgets -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
@endsection

@section('library_js')

@endsection

@section('script')

@endsection
