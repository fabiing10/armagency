@extends('layouts.master')

@section('library_css')
      <!-- Wizard CSS -->
      <link href="{{URL::asset('assets/plugins/bower_components/jquery-wizard-master/css/wizard.css')}}" rel="stylesheet">
      <!-- summernotes CSS -->
      <link href="{{URL::asset('assets/plugins/bower_components/summernote/dist/summernote.css')}}" rel="stylesheet" />

      <link href="{{URL::asset('assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('style')

  <style media="screen">
    .wizard-buttons > a {
      margin-right: 5px;
      padding: 5px 10px;
      border: 1px solid #aaa;
      border-radius: 20px;
    }
    .wizard-steps>li {
    display: table-cell;
    padding: 10px 20px;
    background: #f7fafc;
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
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
      <div class="row">
          <div class="col-sm-12">
              <div class="white-box">
                  <h3 class="box-title m-b-0">Validation</h3>
                  <p class="text-muted m-b-30 font-13"> This is the Validation wizard with validation.</p>
                  <div id="WizardFormContainer" class="wizard">
                      <ul class="wizard-steps" role="tablist">
                          <li class="active" role="tab">
                              <h4><span><i class="ti-user"></i></span>1</h4> </li>
                          <li role="tab">
                              <h4><span><i class="ti-credit-card"></i></span>2</h4> </li>
                          <li role="tab">
                              <h4><span><i class="ti-check"></i></span>3</h4> </li>
                          <li role="tab">
                              <h4><span><i class="ti-check"></i></span>4</h4> </li>
                          <li role="tab">
                              <h4><span><i class="ti-check"></i></span>5</h4> </li>
                      </ul>
                      <form id="dataFormContainer" class="form-horizontal" method="POST">
                          <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                          <div class="wizard-content">
                              <div class="wizard-pane active" role="tabpanel">
                                  <div class="form-group p-50">

                                  <div class="form-body">
                                      <h3 class="box-title">1. Contact info agency</h3>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                                        <input name="name" type="text" class="form-control" id="exampleInputpwd2" placeholder="Contact name">
                                                    </div>
                                            </div>
                                            </div>
                                          <!--/span-->
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                      <input name="phone" type="text" class="form-control" id="exampleInputpwd2" placeholder="Phone number">
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
                                                        <input name="fax" type="text" class="form-control" id="exampleInputpwd2" placeholder="FAX">
                                                    </div>
                                            </div>
                                            </div>
                                          <!--/span-->
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                      <input name="email" type="text" class="form-control" id="exampleInputpwd2" placeholder="email">
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
                                                        <input name="customer_id" type="text" class="form-control" id="exampleInputpwd2" placeholder="Producer customer ID number">
                                                    </div>
                                            </div>
                                            </div>
                                      </div>
                                      <!--/row-->
                                      <h3 class="box-title m-t-40">2. Producer information</h3>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                                        <input name="P_I_name" type="text" class="form-control" id="exampleInputpwd2" placeholder="name">
                                                    </div>
                                            </div>
                                            </div>
                                          <!--/span-->
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-question"></i></div>
                                                      <input name="dba_name" type="text" class="form-control" id="exampleInputpwd2" placeholder="DBA name">
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
                                                        <input name="address" type="text" class="form-control" id="exampleInputpwd2" placeholder="Address">
                                                    </div>
                                            </div>
                                          </div>
                                      </div>
                                      <!--/row-->
                                      <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="city" class="form-control">
                                                    <option value="">City</option>
                                                    <option value="india">India</option>
                                                    <option value="sri_lanka">Sri Lanka</option>
                                                    <option value="usa">USA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="state" class="form-control">
                                                  <option value="">City</option>
                                                  <option value="india">India</option>
                                                  <option value="sri_lanka">Sri Lanka</option>
                                                  <option value="usa">USA</option>
                                                </select>
                                            </div>
                                        </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <input name="zip_code" type="text" class="form-control" placeholder="Zip code"> </div>
                                          </div>
                                          <!--/span-->


                                          <!--/span-->
                                      </div>
                                      <h3 class="box-title m-t-40">3. Insurance</h3>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-9">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                                        <input name="ensured_a" type="text" class="form-control" id="exampleInputpwd2" placeholder="Ensured A">
                                                    </div>
                                            </div>
                                            </div>
                                          <!--/span-->
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-question"></i></div>
                                                      <input name="naic_a" type="text" class="form-control" id="exampleInputpwd2" placeholder="NAIC #">
                                                    </div>
                                            </div>
                                          </div>
                                          <!--/span-->
                                      </div>
                                      <div class="row">
                                          <div class="col-md-9">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                                        <input name="ensured_b" type="text" class="form-control" id="exampleInputpwd2" placeholder="Ensured B">
                                                    </div>
                                            </div>
                                            </div>
                                          <!--/span-->
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-question"></i></div>
                                                      <input name="naic_b" type="text" class="form-control" id="exampleInputpwd2" placeholder="NAIC #">
                                                    </div>
                                            </div>
                                          </div>
                                          <!--/span-->
                                      </div>
                                      <div class="row">
                                          <div class="col-md-9">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                                        <input name="ensured_c" type="text" class="form-control" id="exampleInputpwd2" placeholder="Ensured C">
                                                    </div>
                                            </div>
                                            </div>
                                          <!--/span-->
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-question"></i></div>
                                                      <input name="naic_c" type="text" class="form-control" id="exampleInputpwd2" placeholder="NAIC #">
                                                    </div>
                                            </div>
                                          </div>
                                          <!--/span-->
                                      </div>
                                      <div class="row">
                                          <div class="col-md-9">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                                        <input name="ensured_d" type="text" class="form-control" id="exampleInputpwd2" placeholder="Ensured D">
                                                    </div>
                                            </div>
                                            </div>
                                          <!--/span-->
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-question"></i></div>
                                                      <input name="naic_d" type="text" class="form-control" id="exampleInputpwd2" placeholder="NAIC #">
                                                    </div>
                                            </div>
                                          </div>
                                          <!--/span-->
                                      </div>
                                      <div class="row">
                                          <div class="col-md-9">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                                        <input name="ensured_e" type="text" class="form-control" id="exampleInputpwd2" placeholder="Ensured E">
                                                    </div>
                                            </div>
                                            </div>
                                          <!--/span-->
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-question"></i></div>
                                                      <input name="naic_e" type="text" class="form-control" id="exampleInputpwd2" placeholder="NAIC #">
                                                    </div>
                                            </div>
                                          </div>
                                          <!--/span-->
                                      </div>
                                      <div class="row">
                                          <div class="col-md-9">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                                        <input name="ensured_f" type="text" class="form-control" id="exampleInputpwd2" placeholder="Ensured F">
                                                    </div>
                                            </div>
                                            </div>
                                          <!--/span-->
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-question"></i></div>
                                                      <input name="naic_f" type="text" class="form-control" id="exampleInputpwd2" placeholder="NAIC #">
                                                    </div>
                                            </div>
                                          </div>
                                          <!--/span-->
                                      </div>
                                  </div>
                                  </div>
                              </div>
                              <div class="wizard-pane" role="tabpanel">
                                  <div class="form-group p-50">
                                  <div class="form-body">
                                      <h3 class="box-title">4. General liability</h3>
                                      <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                <input name="g_l_insurance_letter" type="text" placeholder="Insurance letter" class="form-control">
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>
                                                  <div class="radio radio-success">
                                                    <input type="radio" name="g_l_options" id="radioclientPhone" value="Commercial general liability">
                                                    <label for="radio_options">Commercial general liability</label>
                                                  </div>
                                              </label>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>
                                                  <div class="radio radio-success">
                                                    <input type="radio" name="g_l_options" id="radioclientPhone" value="Claims made">
                                                    <label for="radio_options">Claims made</label>
                                                  </div>
                                              </label>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>
                                                  <div class="radio radio-success">
                                                    <input type="radio" name="g_l_options" id="radioclientPhone" value="Occur">
                                                    <label for="radio_options">Occur</label>
                                                  </div>
                                              </label>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <!--/row-->
                                      <p> GENERAL AGGREGATE LIMIT APPLIES PER</p>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>
                                                  <div class="radio radio-success">
                                                    <input type="radio" name="general_aggregate_options" value="Policy">
                                                    <label for="general_aggregate_options">Policy</label>
                                                  </div>
                                              </label>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>
                                                  <div class="radio radio-success">
                                                    <input type="radio" name="general_aggregate_options" value="Project">
                                                    <label for="general_aggregate_options">Project</label>
                                                  </div>
                                              </label>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>
                                                  <div class="radio radio-success">
                                                    <input type="radio" name="general_aggregate_options" value="Loc">
                                                    <label for="general_aggregate_options">Loc</label>
                                                  </div>
                                              </label>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>
                                                  <div class="radio radio-success">
                                                    <input type="radio" name="general_aggregate_options" value="Other">
                                                    <label for="general_aggregate">Other</label>
                                                  </div>
                                              </label>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>
                                                  <div class="radio radio-success">
                                                    <input type="radio" name="g_l_options_addl_subr" value="ADDL INSR">
                                                    <label for="options_addl_subr">ADDL INSR</label>
                                                  </div>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>
                                                  <div class="radio radio-success">
                                                    <input type="radio" name="g_l_options_addl_subr" value="SUBR WVD">
                                                    <label for="options_addl_subr">SUBR WVD</label>
                                                  </div>
                                              </label>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <div class="example">
                                                  <div class="input-group">
                                                      <input name="g_l_eff_date" type="text" class="form-control" id="datepicker2" placeholder="EFF(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <div class="example">
                                                  <div class="input-group">
                                                      <input name="g_l_exp_date" type="text" class="form-control" id="datepicker1" placeholder="EXP(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                              </div>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <h3 class="box-title m-b-0">Each ocurrence </h3>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                  <input name="g_l_each_ocurrence" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                              </div>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <h3 class="box-title m-b-0">Damages to rented permises</h3>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                  <input name="g_l_rented_permises" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                              </div>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <h3 class="box-title m-b-0">Medical expenses (any one person)</h3>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                  <input name="g_l_medical_expenses" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                              </div>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <h3 class="box-title m-b-0">Personal & adv injury </h3>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                  <input name="g_l_personal_adv" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                              </div>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <h3 class="box-title m-b-0">General aggregate </h3>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                  <input name="g_l_general_aggregate" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                              </div>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <h3 class="box-title m-b-0">Product - comp/op agg </h3>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                  <input name="g_l_product_comp" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                              </div>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <h3 class="box-title m-b-0">Product - comp/op agg </h3>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                  <input name="g_l_product_comp2" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                              </div>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <h3 class="box-title m-b-0">Other </h3>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                  <input name="g_l_other" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                              </div>
                                            </div>
                                            </div>
                                      </div>
                                      <hr>
                                  </div>
                                  </div>
                              </div>
                              <div class="wizard-pane" role="tabpanel">
                                  <div class="form-group p-50">
                                    <div class="form-body">
                                        <h3 class="box-title">5. Auto liability</h3>
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <div class="col-md-12">
                                                  <input name="a_l_insurance_letter" type="text" placeholder="Insurance letter" class="form-control">
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="a_l_options" value="Any auto">
                                                      <label for="radio_options2">Any auto</label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="a_l_options" value="All owned autos">
                                                      <label for="radio_options2">All owned autos</label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="a_l_options" value="Scheduled autos">
                                                      <label for="radio_options2">Scheduled autos</label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="a_l_options" value="Home autos<">
                                                      <label for="radio_options2">Home autos</label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="a_l_options" value="Hired autos">
                                                      <label for="radio_options2">Hired autos</label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="a_l_options" value="Non-owned autos">
                                                      <label for="radio_options2">Non-owned autos</label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="a_l_options" value="Non-owned autos">
                                                      <label for="radio_options2">Non-owned autos</label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="a_l_options" value="Other">
                                                      <label for="radio_options2">Other</label>
                                                    </div>
                                                </label>
                                              </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="a_l_options_addl_subr" value="ADDL INSR">
                                                      <label for="radio_options_addl_subr2">ADDL INSR</label>
                                                    </div>
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="a_l_options_addl_subr" value="SUBR WVD">
                                                      <label for="radio_options_addl_subr2">SUBR WVD</label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <div class="col-md-12">
                                                  <input name="a_l_policy_number" type="text" placeholder="Enter policy number" class="form-control">
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="example">
                                                    <div class="input-group">
                                                        <input name="a_l_eff_date" type="text" class="form-control" id="datepicker2" placeholder="EFF(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="example">
                                                    <div class="input-group">
                                                        <input name="a_l_exp_date" type="text" class="form-control" id="datepicker1" placeholder="EXP(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">Combined single limit (Ea accident) </h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="a_l_combined_single" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">Bodily injury (per person)</h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="a_l_bodily_person" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">Bodily injury (per accident)</h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="a_l_bodily_accident" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">Property damage (per accident) </h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="a_l_property_damage" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">Other </h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="a_l_other" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">Other </h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="a_l_other2" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                    </div>
                                  </div>
                              </div>
                              <div class="wizard-pane" role="tabpanel">
                                  <div class="form-group p-50">
                                    <div class="form-body">
                                        <h3 class="box-title">6. Umbrella liability</h3>
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <div class="col-md-12">
                                                  <input name="u_l_insurance_letter" type="text" placeholder="Insurance letter" class="form-control">
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="u_l_options" value="Umbrella liability">
                                                      <label for="radio_options3">Umbrella liability</label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="u_l_options" value="Occur ">
                                                      <label for="radio_options3">Occur </label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="u_l_options" value="Excess liability">
                                                      <label for="radio_options3">Excess liability</label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="u_l_options" value="Claims-made">
                                                      <label for="radio_options3">Claims-made</label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="u_l_options" value="Deductible">
                                                      <label for="radio_options3">Deductible</label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="u_l_options" value="Retention">
                                                      <label for="radio_options3">Retention</label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="u_l_options_addl_subr" value="ADDL INSR">
                                                      <label for="radio_options_addl_subr3">ADDL INSR</label>
                                                    </div>
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="u_l_options_addl_subr" value="SUBR WVD">
                                                      <label for="radio_options_addl_subr3">SUBR WVD</label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <div class="col-md-12">
                                                  <input name="u_l_policy_number" type="text" placeholder="Enter policy number" class="form-control">
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="example">
                                                    <div class="input-group">
                                                        <input name="u_l_eff_date" type="text" class="form-control" id="datepicker2" placeholder="EFF(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="example">
                                                    <div class="input-group">
                                                        <input name="u_l_exp_date" type="text" class="form-control" id="datepicker1" placeholder="EXP(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">Each occurent </h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="u_l_each_occurent" type="text" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">Aggregate </h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="u_l_aggregate" type="text" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">Other </h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="u_l_other" type="text" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">Other </h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="u_l_other2" type="text" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                    </div>

                                  </div>
                              </div>
                              <div class="wizard-pane" role="tabpanel">
                                  <div class="form-group p-50">
                                    <div class="form-body">
                                        <h3 class="box-title">7. Workers compensation</h3>
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <div class="col-md-12">
                                                  <input name="W_C_insurance_letter" type="text" placeholder="Insurance letter" class="form-control">
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label class="control-label">Propretor / Parner excluded</label>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <div class="radio-list">
                                                      <label class="radio-inline p-0">
                                                          <div class="radio radio-info">
                                                              <input type="radio" name="W_C_propretor" id="radio1" value="yes">
                                                              <label for="radio_propetor">YES</label>
                                                          </div>
                                                      </label>
                                                      <label class="radio-inline">
                                                          <div class="radio radio-info">
                                                              <input type="radio" name="W_C_propretor" id="radio2" value="no">
                                                              <label for="radio_propetor">NO</label>
                                                          </div>
                                                      </label>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <div class="col-md-12">
                                                  <input name="W_C_office" type="text" placeholder="Office / Member excluded" class="form-control">
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <div class="col-md-12">
                                                  <input name="W_C_office2" type="text" placeholder="Office / Member excluded" class="form-control">
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <div class="col-md-12">
                                                  <input name="W_C_office3" type="text" placeholder="Office / Member excluded" class="form-control">
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="W_C_options_addl_subr" id="radioclientPhone" value="ADDL INSR">
                                                      <label for="radio_options_addl_subr4">ADDL INSR</label>
                                                    </div>
                                                </label>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>
                                                    <div class="radio radio-success">
                                                      <input type="radio" name="W_C_options_addl_subr" id="radioclientPhone" value="SUBR WVD">
                                                      <label for="radio_options_addl_subr4">SUBR WVD</label>
                                                    </div>
                                                </label>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <div class="col-md-12">
                                                  <input name="W_C_policy_number" type="text" placeholder="Enter policy number" class="form-control">
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="example">
                                                    <div class="input-group">
                                                        <input name="W_C_eff_date" type="text" class="form-control" id="datepicker2" placeholder="EFF(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="example">
                                                    <div class="input-group">
                                                        <input name="W_C_exp_date" type="text" class="form-control" id="datepicker1" placeholder="EXP(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">WC STATUTORY LIMITS </h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="W_C_statutory_limits" type="text" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">Other </h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="W_C_other" type="text" id="example-input3-group1" name="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">E.L. Each accident </h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="W_C_each_accident" type="text" id="example-input3-group1" name="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">E.L Disease - EA Employee </h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="W_C_ea_employee" type="text" id="example-input3-group1" name="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">E.L Disease - Policy limit </h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="W_C_policy_limit" type="text" id="example-input3-group1" name="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <hr>
                                        <h3 class="box-title">8. Additional coverage</h3>
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <div class="col-md-12">
                                                  <input name="A_C_a_insurance_letter" type="text" placeholder="Insurance letter" class="form-control">
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <div class="col-md-12">
                                                  <input name="A_C_a_policy_type" type="text" placeholder="Policy type" class="form-control">
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <hr>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <div class="radio-list">
                                                      <label class="radio-inline p-0">
                                                          <div class="radio radio-info">
                                                              <input type="radio" name="A_C_a_options_add_insurance_surrogation" id="radio1" value="Additonal insurance">
                                                              <label for="radio_options_add">Additonal insurance</label>
                                                          </div>
                                                      </label>
                                                      <label class="radio-inline">
                                                          <div class="radio radio-info">
                                                              <input type="radio" name="A_C_a_options_add_insurance_surrogation" id="radio2" value="Surrogation">
                                                              <label for="radio_options_add">Surrogation</label>
                                                          </div>
                                                      </label>
                                                  </div>
                                              </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <input name="A_C_a_policy_number" type="text" placeholder="Enter policy number" class="form-control">
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <div class="example">
                                                      <div class="input-group">
                                                          <input name="A_C_a_eff_date" type="text" class="form-control" id="datepicker2" placeholder="EFF(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <div class="example">
                                                      <div class="input-group">
                                                          <input name="A_C_a_exp_date" type="text" class="form-control" id="datepicker1" placeholder="EXP(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                                  </div>
                                                </div>
                                                </div>
                                          </div>
                                          <hr>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <h3 class="box-title m-b-0">Coverage limits / Deductible </h3>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                  <input name="A_C_a_coverage_limits" type="text" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                              </div>
                                            </div>
                                            </div>
                                          </div>
                                          <hr>
                                          <h3 class="box-title"> Additional coverage</h3>
                                          <div class="row">
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <input name="A_C_b_insurance_letter" type="text" placeholder="Insurance letter" class="form-control">
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <input name="A_C_b_policy_type" type="text" placeholder="Policy type" class="form-control">
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                          <hr>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="radio-list">
                                                        <label class="radio-inline p-0">
                                                            <div class="radio radio-info">
                                                                <input type="radio" name="A_C_b_options_add_insurance_surrogation" id="radio1" value="Additonal insurance">
                                                                <label for="radio_options_add2">Additonal insurance</label>
                                                            </div>
                                                        </label>
                                                        <label class="radio-inline">
                                                            <div class="radio radio-info">
                                                                <input type="radio" name="A_C_b_options_add_insurance_surrogation" id="radio2" value="Surrogation">
                                                                <label for="radio_options_add2">Surrogation</label>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                  <div class="form-group">
                                                      <div class="col-md-12">
                                                      <input name="A_C_b_policy_number" type="text" placeholder="Enter policy number" class="form-control">
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                  <div class="form-group">
                                                    <div class="example">
                                                        <div class="input-group">
                                                            <input name="A_C_b_eff_date" type="text" class="form-control" id="datepicker2" placeholder="EFF(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-group">
                                                    <div class="example">
                                                        <div class="input-group">
                                                            <input name="" type="text" class="form-control" id="datepicker1" placeholder="EXP(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                                    </div>
                                                  </div>
                                                  </div>
                                            </div>
                                            <hr>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <h3 class="box-title m-b-0">Coverage limits / Deductible </h3>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input name="A_C_b_coverage_limits" type="text" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                                                </div>
                                              </div>
                                              </div>
                                            </div>
                                            <hr>
                                            <h3 class="box-title">9. Description</h3>
                                            <hr>
                                                <!--
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="white-box">
                                                            <h3 class="box-title">Default Summernote</h3>
                                                            <div class="summernote">
                                                                <h3>Default Summernote</h3> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                                    <textarea rows="4" cols="50" name="description">
                                                  </textarea>
                                              <input type="submit" name="sendForm" id="sendForm" value="Enviar" style="display:none;"/>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
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
    <script src="{{URL::asset('assets/plugins/bower_components/summernote/dist/summernote.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- Form Wizard JavaScript -->
    <script src="{{URL::asset('assets/plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js')}}"></script>
    <!-- FormValidation -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css')}}">
    <!-- FormValidation plugin and the class supports validating Bootstrap form -->
    <script src="{{URL::asset('assets/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js')}}"></script>
@endsection

@section('script')
<script type="text/javascript">
(function() {
    $('#WizardFormContainer').wizard({
        onInit: function() {
            $('#dataFormContainer').formValidation({
                framework: 'bootstrap',
                fields: {
                    username: {
                        validators: {
                            notEmpty: {
                                message: 'The username is required'
                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'The username must be more than 6 and less than 30 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_\.]+$/,
                                message: 'The username can only consist of alphabetical, number, dot and underscore'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'The email address is required'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            },
                            different: {
                                field: 'username',
                                message: 'The password cannot be the same as username'
                            }
                        }
                    }
                }
            });
        },
        validator: function() {
            var fv = $('#dataFormContainer').data('formValidation');
            var $this = $(this);
            // Validate the container
            fv.validateContainer($this);
            var isValidStep = fv.isValidContainer($this);
            if (isValidStep === false || isValidStep === null) {
                return false;
            }
            return true;
        },
        onFinish: function() {
          $("#sendForm").trigger("click");

        }
    });
})();

</script>
@endsection
