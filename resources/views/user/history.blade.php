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
                  <h4 class="page-title">HISTORY</h4> </div>
              <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">History</li>
                </ol>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="white-box">
          <div class="row">
            <div class="col-sm-6">
              <h2 class="box-title m-b-0">RECENTLY SEND</h2>
              <p class="text-muted m-b-30 font-13">Certificates sent this month</p>
            </div>
              <div class="col-sm-6">
                <div id="editable-datatable_filter" class="dataTables_filter">
                  <input type="search" class="form-control input-sm" placeholder="Enter search" aria-controls="editable-datatable">
                </div>
              </div>
            </div>
                      <div class="table-responsive">
                          <table class="table table-hover manage-u-table">
                              <thead>
                                  <tr>
                                      <th>NAME</th>
                                      <th>SENT DATE</th>
                                      <th width="300">MANAGE</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>Daniel Kristeen
                                          <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                      <td>15 Mar 1988
                                          <br/><span class="text-muted">10: 55 AM</span></td>
                                      <td>
                                          <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                          <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Daniel Kristeen
                                          <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                      <td>15 Mar 1988
                                          <br/><span class="text-muted">10: 55 AM</span></td>
                                      <td>
                                          <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                          <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Daniel Kristeen
                                          <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                      <td>15 Mar 1988
                                          <br/><span class="text-muted">10: 55 AM</span></td>
                                      <td>
                                          <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                          <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Daniel Kristeen
                                          <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                      <td>15 Mar 1988
                                          <br/><span class="text-muted">10: 55 AM</span></td>
                                      <td>
                                          <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                          <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Daniel Kristeen
                                          <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                      <td>15 Mar 1988
                                          <br/><span class="text-muted">10: 55 AM</span></td>
                                      <td>
                                          <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                          <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Daniel Kristeen
                                          <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                      <td>15 Mar 1988
                                          <br/><span class="text-muted">10: 55 AM</span></td>
                                      <td>
                                          <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                          <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
@endsection

@section('library_js')

@endsection

@section('script')

@endsection
