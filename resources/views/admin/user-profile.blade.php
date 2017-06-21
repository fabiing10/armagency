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
              <div class="col-sm-6">
                <button type="submit" class="pull-right btn btn-info btnaccount2" onclick="window.location.href='/admin/table/{{$user->id}}'"><i class="fa fa-eye"></i> View Certificate </button>
              </div>
            </div>
            <div class="white-box">
              <form class="" action="" method="POST">
                          <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
              <div class="form-body">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            User Information
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <div class="row">
        <div class="col-md-6">
          <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                      <input name="name" value="{{$formcontrol->C_I_name}}" type="text" class="form-control"  placeholder="Contact name">
                  </div>
          </div>
          </div>
        <!--/span-->
        <div class="col-md-6">
          <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                    <input name="phone" value="{{$formcontrol->C_I_phone}}" type="text" class="form-control" placeholder="Phone number">
                  </div>
          </div>
        </div>
        <!--/span-->
    </div>
    <!--/row-->
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-fax"></i></div>
                      <input name="fax" value="{{$formcontrol->C_I_fax}}" type="text" class="form-control" placeholder="FAX">
                  </div>
          </div>
          </div>
        <!--/span-->
        <div class="col-md-6">
          <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                    <input name="email" value="{{$formcontrol->C_I_email}}" type="text" class="form-control" placeholder="email">
                  </div>
          </div>
        </div>
        <!--/span-->
    </div>
    <!--/row-->
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                      <input name="customer_id" value="{{$formcontrol->C_I_producer_id}}" type="text" class="form-control" placeholder="Producer customer ID number">
                  </div>
          </div>
          </div>
    </div>
  </div>
  </div>
  </div>
    <!--/row-->
  <div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingTwo">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Insurance information
      </a>
    </h4>
  </div>
  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
    <div class="panel-body">
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                      <input name="P_I_name" value="{{$formcontrol->P_I_name}}" type="text" class="form-control" placeholder="name">
                  </div>
          </div>
          </div>
        <!--/span-->
        <div class="col-md-6">
          <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-question"></i></div>
                    <input name="dba_name" value="{{$formcontrol->P_I_dba_name}}" type="text" class="form-control" placeholder="DBA name">
                  </div>
          </div>
        </div>
        <!--/span-->
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                      <input name="address" value="{{$formcontrol->P_I_address}}" type="text" class="form-control" placeholder="Address">
                  </div>
          </div>
        </div>
    </div>
    <!--/row-->
    <div class="row">
      <div class="col-md-4">
          <div class="form-group">
            <input name="city" value="{{$formcontrol->P_I_city}}" type="text" class="form-control" placeholder="City">
          </div>
      </div>
      <div class="col-md-4">
          <div class="form-group">
            <input name="state" value="{{$formcontrol->P_I_dba_state}}" type="text" class="form-control" placeholder="State">
          </div>
      </div>
        <div class="col-md-4">
            <div class="form-group">
                <input name="zip_code" value="{{$formcontrol->P_I_dba_zip_code}}" type="text" class="form-control" placeholder="Zip code"> </div>
        </div>
    </div>
  </div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="headingThree">
  <h4 class="panel-title">
    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Account information
    </a>
  </h4>
</div>
<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
  <div class="panel-body">
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                      <input name="name_insured" value="{{$user->name}}" type="text" class="form-control" id="name_insured" placeholder="Name">
                  </div>
          </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                        <input name="dba_name" type="text" class="form-control" value="{{$user->dba_name}}" id="dba_name" placeholder="DBA name">
                    </div>
            </div>
            </div>
        <!--/span-->
    </div>
    <!--/row-->
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                  <input name="address_insured" value="{{$user->address}}" type="text" class="form-control" id="address_insured" placeholder="Address">
                </div>
        </div>
      </div>
        <div class="col-md-4">
          <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-fax"></i></div>
                      <input name="phone_insured" value="{{$user->phone}}" type="number" class="form-control" id="phone_insured" placeholder="Phone">
                  </div>
          </div>
          </div>
        <!--/span-->
        <div class="col-md-4">
          <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                    <input name="email_insured" value="{{$user->email}}" type="text" class="form-control" id="email_insured" placeholder="Email">
                  </div>
          </div>
        </div>
        <!--/span-->
    </div>
    <!--/row-->
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                      <input name="password_insured" type="password" class="form-control" id="password_insured" placeholder="Password">
                  </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                      <input name="password_insured_repeat" type="password" class="form-control" id="password_insured_repeat" placeholder="Repeat Password">
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

@endsection

@section('script')
<script type="text/javascript">
onFinish: function() {
  $("#sendForm").trigger("click");

}
</script>
@endsection
