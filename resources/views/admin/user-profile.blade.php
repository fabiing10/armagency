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
        <div class="row">
              <ol class="breadcrumb" style="float:left; margin-left:30px;">
                <li><a href="/admin">Home</a></li>
                <li class="active">User</li>
              </ol>
        </div>
          <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-sm-12">
          <div class="row" style="padding-bottom:10px;">
            <div class="col-sm-6">
              <h3 class="box-title m-b-0">User Profile</h3>
            </div>
          </div>
            <div class="white-box">
              <form class="form-horizontal floating-labels" action="" method="POST">
                          <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
              <div class="form-body">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="headingThree">
  <h4 class="panel-title">
    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Account information
    </a>
  </h4>
</div>
<div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
  <div class="panel-body">
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <div class="input-group-addon"><i class="fa fa-user"></i></div>
            <div class="form-group f-style">
                <input type="text" class="form-control input-sm" value="{{$user->name}}" id="name_insured" name="name_insured" required><span class="highlight"></span> <span class="bar"></span>
                <label for="name_insured">Name Insured</label>
            </div>
          </div>

          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
              <div class="form-group f-style">
                  <input type="text" class="form-control input-sm" value="{{$user->dba_name}}" id="I_I_dba_name" name="I_I_dba_name" required><span class="highlight"></span> <span class="bar"></span>
                  <label for="I_I_dba_name">DBA name</label>
              </div>
            </div>
            </div>
        <!--/span-->
    </div>
    <!--/row-->
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
          <div class="form-group f-style">
              <input type="text" class="form-control input-sm" value="{{$user->address}}" id="address_insured" name="address_insured" required><span class="highlight"></span> <span class="bar"></span>
              <label for="address_insured">Address</label>
          </div>
        </div>
      </div>
        <div class="col-md-4">
          <div class="form-group">
            <div class="input-group-addon"><i class="fa fa-fax"></i></div>
            <div class="form-group f-style">
                <input type="text" class="form-control input-sm" value="{{$user->phone}}" id="phone_insured" name="phone_insured" data-mask="(999) 999-9999" required><span class="highlight"></span> <span class="bar"></span>
                <label for="phone_insured">Fax</label>
            </div>
          </div>
          </div>
        <!--/span-->
        <div class="col-md-4">
          <div class="form-group">
            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
            <div class="form-group f-style">
                <input type="text" class="form-control input-sm" value="{{$user->email}}" id="email_insured" name="email_insured" required><span class="highlight"></span> <span class="bar"></span>
                <label for="email_insured">Email</label>
            </div>
          </div>
        </div>
        <!--/span-->
    </div>
    <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <div class="form-group f-style">
                <input type="text" class="form-control input-sm" value="{{$user->city}}" id="I_I_city" name="I_I_city" required><span class="highlight"></span> <span class="bar"></span>
                <label for="I_I_city">City</label>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <div class="form-group f-style">
                <input type="text" class="form-control input-sm" value="{{$user->state}}" id="I_I_state" name="I_I_state" required><span class="highlight"></span> <span class="bar"></span>
                <label for="I_I_state">State</label>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <div class="form-group f-style">
                <input type="text" class="form-control input-sm" value="{{$user->zip_code}}" id="I_I_zip_code" name="I_I_zip_code" required><span class="highlight"></span> <span class="bar"></span>
                <label for="I_I_zip_code">Zip code</label>
            </div>
          </div>
        </div>
    </div>
    <!--/row-->
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <div class="input-group-addon"><i class="fa fa-lock"></i></div>
            <div class="form-group f-style">
                <input type="text" class="form-control input-sm" id="password_insured" name="password_insured"><span class="highlight"></span> <span class="bar"></span>
                <label for="password_insured">Password</label>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <div class="input-group-addon"><i class="fa fa-lock"></i></div>
            <div class="form-group f-style">
                <input type="text" class="form-control input-sm" id="password_insured_repeat" name="password_insured_repeat"><span class="highlight"></span> <span class="bar"></span>
                <label for="password_insured_repeat">Repeat Password</label>
            </div>
          </div>
        </div>
    </div>
  </div>
  </div>
  </div>

</div>
</div>
<button type="submit" id="sendForm" class="btn btn-info m-l-20 hidden-xs hidden-sm waves-effect waves-light">Save</button>

</form>

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
<script src="{{URL::asset('assets/js/mask.js')}}"></script>
@endsection

@section('script')
<script type="text/javascript">
onFinish: function() {
  $("#sendForm").trigger("click");

}
</script>
@endsection
