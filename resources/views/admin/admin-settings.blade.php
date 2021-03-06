@extends('layouts.master')

@section('library_css')
@endsection

@section('style')
<style>
hr{
  margin-top: 9px;
  margin-bottom: 5px;
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

  @include('layouts.menu_admin')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row bg-title">
            <div class="row">
                  <ol class="breadcrumb" style="float:left; margin-left:30px;">
                    <li><a href="/admin">Home</a></li>
                    <li class="active">Admin settings</li>
                  </ol>
            </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-sm-12">
              <div class="row" style="padding-bottom:20px;">
                <div class="col-sm-6">
                  <h3 class="box-title m-b-0">Admin Settings</h3>
                </div>
                </div>
              <div class="white-box">
                  <h2 class="box-title m-b-0">Full access admin</h2>
                          <hr>
                          @foreach ($admins as $u)
                          <div class="row">
                          <div class="form-group">
                              <div class="col-lg-4">
                                <i class="fa fa-key p-10"></i>
                                <label> {{$u->name}}</label>
                              </div>
                              <div class="col-md-8 text-right"><button type="button" class="btn btn-info delete-user" data-user="{{$u->id}}"><i class="fa fa-trash-o"></i> Delete</button>
                                </div>
                          </div>
                          </div>
                          <hr>
                          @endforeach
                          <div class="form-group" style="margin-top:15px; margin-bottom: 25px;">
                              <div class="input-group">
                                <div class="col-md-8 col-xs-12 text-right"><button type="submit" onclick="window.location.href='create-admin/admin'" class="btn btn-default btn-outline"><i class="fa fa-plus-circle"></i> Add new</button></div>
                              </div>
                          </div>
                          <h2 class="box-title m-b-0">Limited access admin</h2>
                            <hr>
                          @foreach ($users as $u)
                          <div class="row">
                          <div class="form-group">
                              <div class="col-lg-4">
                                <i class="fa fa-key p-10"></i>
                                <label> {{$u->name}}</label>
                              </div>
                              <div class="col-md-8 text-right"><button type="button" class="btn btn-info delete-user" data-user="{{$u->id}}"><i class="fa fa-trash-o"></i> Delete</button>
                                </div>
                          </div>
                          </div>
                          <hr>
                          @endforeach
                          <div class="form-group" style="margin-top:15px; margin-bottom: 25px;">
                              <div class="input-group">
                                <div class="col-md-8 col-xs-12 text-right"><button type="submit" onclick="window.location.href='create-admin/user'"  class="btn btn-default btn-outline"><i class="fa fa-plus-circle"></i> Add new</button></div>
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

<script type="text/javascript">

$(document).ready(function() {




  var SweetAlert = function() {};

  //examples
  SweetAlert.prototype.init = function() {
    //Parameter
    $('.delete-user').click(function(){
value =  $(this).attr("data-user");
console.log(value);
        swal({
            title: "Delete User",
            text: "Are You Sure You Want To Delete?",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, I'm sure",
            cancelButtonText: "No, go back",
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
            closeOnCancel: true
        }, function(isConfirm){
            if (isConfirm) {


                swal("Deleted!", "The user has been removed.", "success");
                setTimeout(function(){
                  window.location.href='/admin/admin-settings/delete/'+value;
                }, 2000);

            } else {
                window.location.href='/admin/admin-settings/';
            }
        });
    });
  }
  $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
  $.SweetAlert.init();


});



</script>
@endsection
