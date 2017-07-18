@extends('layouts.master_user')

@section('library_css')
    <link href="{{URL::asset('assets/css/responsive-user.css')}}" rel="stylesheet">
@endsection

@section('style')
<style>
hr {
    margin-top: 10px;
    margin-bottom: 10px;
    border: 0;
    border-top: 1px solid #eee;
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

  @include('layouts.menu_user')
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row bg-title">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">ACCOUNT</h4> </div>
              <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                  <li><a href="/user">Home</a></li>
                  <li class="active">Account</li>
                </ol>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="white-box">
              <h2 class="box-title" style="margin-bottom:30px;">Edit Client</h2>
              <form id="dataFormContainer" class="form-horizontal floating-labels s-c" action="" method="POST">
              <input type="hidden" name="_token" value="{!! csrf_token() !!}" />


              <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group-addon"><i class="fa fa-user grey"></i></div>
                  <div class="form-group f-style">
                      <input type="text" class="form-control input-sm" value="{{$client->certificate_holder_name}}" id="certificate_name" name="certificate_name" required><span class="highlight"></span> <span class="bar"></span>
                      <label for="certificate_name">Certificate holders name</label>
                  </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                    <div class="form-group f-style">
                        <input type="text" class="form-control input-sm" value="{{$client->address}}" id="address_client" name="address_client" required><span class="highlight"></span> <span class="bar"></span>
                        <label for="address_client">Address</label>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                    <div class="form-group f-style">
                        <input type="text" class="form-control input-sm" value="{{$client->city}}"  id="city_client" name="city_client" required><span class="highlight"></span> <span class="bar"></span>
                        <label for="city_client">City</label>
                    </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                    <div class="form-group f-style">
                        <input type="text" class="form-control input-sm" value="{{$client->state}}"  id="state_client" name="state_client" required><span class="highlight"></span> <span class="bar"></span>
                        <label for="state_client">State</label>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                    <div class="form-group f-style">
                        <input type="text" class="form-control input-sm" value="{{$client->zip_code}}"  id="zipcode_client" name="zipcode_client" required><span class="highlight"></span> <span class="bar"></span>
                        <label for="zipcode_client">Zip Code</label>
                    </div>
                    </div>
                </div>
              </div>


              <div class="form-group">
                <div class="input-group-addon"><i class="fa fa-inbox"></i></div>
                <div class="form-group f-style">
                    <input type="text" class="form-control input-sm" value="{{$client->email}}" id="email_client" name="email_client"  ><span class="highlight"></span> <span class="bar"></span>
                    <label for="email_client">Email</label>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                    <div class="form-group f-style">
                        <input type="text" class="form-control input-sm" value="{{$client->phone_number }}" id="phone_client" name="phone_client" ><span class="highlight"></span> <span class="bar"></span>
                        <label for="phone_client">Phone number</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group-addon"><i class="fa fa-fax"></i></div>
                    <div class="form-group f-style">
                        <input type="text" class="form-control input-sm" value="{{$client->fax}}" id="fax_client" data-mask="(999) 999-9999" name="fax_client" ><span class="highlight"></span> <span class="bar"></span>
                        <label for="fax_client">Fax</label>
                    </div>
                  </div>
                </div>
              </div>





                  <div class="form-group">

                      <input type="submit" class="btn btn-info" value="Actualizar"/>

                  </div>
             </form>

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
