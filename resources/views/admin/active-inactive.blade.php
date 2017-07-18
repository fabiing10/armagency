@extends('layouts.master')

@section('library_css')
<link href="{{URL::asset('/assets/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('/assets/plugins/bower_components/switchery/dist/switchery.min.css')}}" rel="stylesheet">
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
                <ol class="breadcrumb" style="float:left; margin-left:30px;">
                  <li><a href="/admin">Home</a></li>
                  <li class="active">Active - cancelled</li>
                </ol>
          </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-sm-12">
            <div class="row" style="padding-bottom:10px;">
              <div class="col-sm-6">
                <h3 class="box-title m-b-0">Active - Cancelled</h3>
              </div>
              </div>
                  <div class="white-box">
                      <div class="table-responsive">
                          <table id="myTable" class="table table-striped">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>email</th>
                                      <th>Exp date</th>
                                      <th>Status</th>
                                      <th>Manage</th>
                                  </tr>
                              </thead>
                              <tbody>

                                    @foreach($users as $user)
                                    <tr>
                                      <td>{{$user->name}}</td>
                                      <td>{{$user->email}}</td>
                                      <td>{{\Carbon\Carbon::parse($user->exp_date)->format('m/d/Y')}}</td>
                                      <td>{{$user->status}}</td>
                                      @if ($user->status == 'active')
                                      <td><button data-id="{{$user->id}}" type="submit" class="btn sa-params-cancel btn-gray"> Cancel </button></td>
                                      @else
                                      <td><button data-id="{{$user->id}}" type="submit" class="btn sa-params-activate btn-green"> Activate </button></td>
                                      @endif
                                      </tr>
                                    @endforeach

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
<script src="../plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="{{URL::asset('assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bower_components/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

<script src="{{URL::asset('assets/plugins/bower_components/switchery/dist/switchery.min.js')}}"></script>
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function() {
    var SweetAlert = function() {};

    //examples
    SweetAlert.prototype.init = function() {

      //Parameter
      $('.sa-params-cancel').click(function(){
        console.log("Click")
        var id = $(this).attr("data-id");
        console.log(id)
          swal({
              title: "Cancel account",
              text: "Are you sure you want to cancel account?",

              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, I'm sure",
              cancelButtonText: "No, go back",
              closeOnConfirm: true,
              closeOnCancel: true
          }, function(isConfirm){
              if (isConfirm) {


                  $.get( "active-inactive/status/"+id).done(function(data) {
                    console.log(data);
                    location.reload(true);
                  });

              } else {
              }
          });
      });
      $('.sa-params-activate').click(function(){
        console.log("Click")
        var id = $(this).attr("data-id");
        console.log(id)
          swal({
              title: "Activate account",
              text: "Are you sure you want to cancel account?",

              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, I'm sure",
              cancelButtonText: "No, go back",
              closeOnConfirm: true,
              closeOnCancel: true
          }, function(isConfirm){
              if (isConfirm) {


                  $.get( "active-inactive/status/"+id).done(function(data) {
                    console.log(data);
                    location.reload(true);
                  });

              } else {
              }
          });
      });
    }
    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
    $.SweetAlert.init()

    $('#myTable').DataTable();

});


</script>
@endsection
