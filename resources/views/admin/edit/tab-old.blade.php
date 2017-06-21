<div class="wizard-pane active" role="tabpanel">
    <div class="form-group p-50">

    <div class="form-body">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      1. Contact info agency
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                    <input name="name" type="text" class="form-control" value="{{$formcontrol->C_I_name}}" placeholder="Contact name">
                                </div>
                        </div>
                      </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                        <input name="phone" type="text" value="{{$formcontrol->C_I_phone}}" class="form-control" placeholder="Phone number">
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
                          <input name="fax" type="text" class="form-control" value="{{$formcontrol->C_I_fax}}" placeholder="FAX">
                      </div>
              </div>
              </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                        <input name="email" type="text" class="form-control" value="{{$formcontrol->C_I_email}}" placeholder="email">
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
                          <input name="customer_id" type="text" class="form-control" value="{{$formcontrol->C_I_producer_id}}" placeholder="Producer customer ID number">
                      </div>
              </div>
              </div>
        </div>
      </div>
</div>
</div>
<div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            2. Producer information
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
                          <input name="P_I_name" type="text" class="form-control" value="{{$formcontrol->P_I_name}}" placeholder="name">
                      </div>
              </div>
              </div>
            <!--/span-->
            <div class="col-md-6">
              <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-question"></i></div>
                        <input name="dba_name" type="text" class="form-control" value="{{$formcontrol->P_I_dba_name}}" placeholder="DBA name">
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
                          <input name="address" type="text" class="form-control" value="{{$formcontrol->P_I_address}}" placeholder="Address">
                      </div>
              </div>
            </div>
        </div>
        <!--/row-->
        <div class="row">
          <div class="col-md-4">
              <div class="form-group">
                <input name="city" type="text" class="form-control" value="{{$formcontrol->P_I_city}}" placeholder="city">
              </div>
          </div>
          <div class="col-md-4">
              <div class="form-group">
                <input name="state" type="text" class="form-control" value="{{$formcontrol->P_I_dba_state}}" placeholder="state">
              </div>
          </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input name="zip_code" type="text" class="form-control" value="{{$formcontrol->P_I_dba_zip_code}}" placeholder="Zip code"> </div>
            </div>
        </div>
      </div>
</div>
</div>
<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingThree">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        3. Insured Information
      </a>
    </h4>
  </div>
  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
    <div class="panel-body">
        <h3 class="box-title m-t-20">3. Insured Information</h3>
        <hr>
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                          <input name="name_insured" type="text" class="form-control" value="{{$user->name}}" id="name_insured" placeholder="Name">
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
                      <input name="address_insured" type="text" class="form-control" value="{{$user->address}}" id="address_insured" placeholder="Address">
                    </div>
            </div>
          </div>
            <div class="col-md-4">
              <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-fax"></i></div>
                          <input name="phone_insured" type="number" class="form-control" value="{{$user->phone}}" id="phone_insured" placeholder="Phone">
                      </div>
              </div>
              </div>
            <!--/span-->
            <div class="col-md-4">
              <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                        <input name="email_insured" type="text" class="form-control" value="{{$user->email}}" id="email_insured" placeholder="Email">
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
        <h3 class="box-title m-t-20">3. Insurance</h3>
        <hr>
        <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                          <input name="ensured_a" type="text" class="form-control" value="{{$Ensured_a}}" id="exampleInputpwd2" placeholder="Ensured A">
                      </div>
              </div>
              </div>
            <!--/span-->
            <div class="col-md-3">
              <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-question"></i></div>
                        <input name="naic_a" type="text" class="form-control" value="{{$Naic_a}}" id="exampleInputpwd2" placeholder="NAIC #">
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
                          <input name="ensured_b" type="text" class="form-control" value="{{$Ensured_b}}" id="exampleInputpwd2" placeholder="Ensured B">
                      </div>
              </div>
              </div>
            <!--/span-->
            <div class="col-md-3">
              <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-question"></i></div>
                        <input name="naic_b" type="text" class="form-control" value="{{$Naic_b}}" id="exampleInputpwd2" placeholder="NAIC #">
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
                          <input name="ensured_c" type="text" class="form-control" value="{{$Ensured_c}}" id="exampleInputpwd2" placeholder="Ensured C">
                      </div>
              </div>
              </div>
            <!--/span-->
            <div class="col-md-3">
              <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-question"></i></div>
                        <input name="naic_c" type="text" class="form-control" value="{{$Naic_c}}" id="exampleInputpwd2" placeholder="NAIC #">
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
                          <input name="ensured_d" type="text" class="form-control" value="{{$Ensured_d}}" id="exampleInputpwd2" placeholder="Ensured D">
                      </div>
              </div>
              </div>
            <!--/span-->
            <div class="col-md-3">
              <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-question"></i></div>
                        <input name="naic_d" type="text" class="form-control" value="{{$Naic_d}}" id="exampleInputpwd2" placeholder="NAIC #">
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
                          <input name="ensured_e" type="text" class="form-control" value="{{$Ensured_e}}" id="exampleInputpwd2" placeholder="Ensured E">
                      </div>
              </div>
              </div>
            <!--/span-->
            <div class="col-md-3">
              <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-question"></i></div>
                        <input name="naic_e" type="text" class="form-control" value="{{$Naic_e}}" id="exampleInputpwd2" placeholder="NAIC #">
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
                          <input name="ensured_f" type="text" class="form-control" value="{{$Ensured_f}}" id="exampleInputpwd2" placeholder="Ensured F">
                      </div>
              </div>
              </div>
            <!--/span-->
            <div class="col-md-3">
              <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-question"></i></div>
                        <input name="naic_f" type="text" class="form-control" value="{{$Naic_f}}" id="exampleInputpwd2" placeholder="NAIC #">
                      </div>
              </div>
            </div>
            <!--/span-->
        </div>
    </div>
    </div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="headingOne">
<h4 class="panel-title">
  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
    4. General liability
  </a>
</h4>
</div>
<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
<div class="panel-body">
        <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                  <div class="col-md-12">
                  <input name="g_l_insurance_letter" type="text" value="{{$glinsuranceletter}}" placeholder="Insurance letter" class="form-control">
                </div>
              </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>
                    <div class="radio radio-success">
                      @if ($gloptioncommercial === 'true')
                      <input type="checkbox" name="g_l_commercial" value="true" checked=""> Commercial general liability <br>
                      @else
                      <input type="checkbox" name="g_l_commercial" value="true"> Commercial general liability <br>
                      @endif
                      @if ($gloptionclaims_made === 'true')
                      <input type="checkbox" name="g_l_claims_made" value="true" checked="">  Claims made <br>
                      @else
                      <input type="checkbox" name="g_l_claims_made" value="true">  Claims made <br>
                      @endif
                      @if ($gloptionoccur === 'true')
                      <input type="checkbox" name="g_l_occur" value="true" checked="">  Occur <br>
                      @else
                      <input type="checkbox" name="g_l_occur" value="true">  Occur <br>
                      @endif
                    </div>
                </label>
              </div>
              </div>
        </div>

        <!--/row-->
        <p> GENERAL AGGREGATE LIMIT APPLIES PER</p>
        <hr>
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>
                    <div class="radio radio-success">
                      @if ($gloptionpolicy === 'true')
                      <input type="checkbox" name="g_l_policy" value="true" checked=""> Policy<br>
                      @else
                      <input type="checkbox" name="g_l_policy" value="true"> Policy<br>
                      @endif
                      @if ($gloptionproject === 'true')
                      <input type="checkbox" name="g_l_project" value="true" checked=""> Project<br>
                      @else
                      <input type="checkbox" name="g_l_project" value="true"> Project<br>
                      @endif
                      @if ($gloptionloc === 'true')
                      <input type="checkbox" name="g_l_loc" value="true" checked=""> Loc<br>
                      @else
                      <input type="checkbox" name="g_l_loc" value="true"> Loc<br>
                      @endif
                      @if ($glother2 === 'true')
                      <input type="checkbox" name="g_l_other" value="true" checked=""> Other
                      @else
                      <input type="checkbox" name="g_l_other" value="true"> Other
                      @endif
                      <input name="g_l_other_input" type="text" value="{{$glotherinput2}}" class="form-control" placeholder="NAME">
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
                      @if ($gloptionaddl === 'true')
                      <input type="checkbox" name="g_l_options_addl" value="true" checked=""> ADDL INSR
                      @else
                      <input type="checkbox" name="g_l_options_addl" value="true"> ADDL INSR
                      @endif
                    </div>
                </label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>
                    <div class="radio radio-success">
                      @if ($gloptionsubr === 'true')
                      <input type="checkbox" name="g_l_options_subr" value="true" checked="">  SUBR WVD
                      @else
                      <input type="checkbox" name="g_l_options_subr" value="true">  SUBR WVD
                      @endif
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
                  <input name="g_l_policy_number" type="text" value="{{$glpolicynumber}}" placeholder="Enter policy number" class="form-control">
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
                        <input name="g_l_eff_date" type="text" value="{{$gleffdate}}" class="form-control" id="datepicker2" placeholder="EFF(MM/DD/YYY)" data-date-format="dd/mm/yyyy" > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="example">
                    <div class="input-group">
                        <input name="g_l_exp_date" type="text" value="{{$glexpdate}}" class="form-control" id="datepicker1" placeholder="EXP(MM/DD/YYY)" data-date-format="dd/mm/yyyy" > <span class="input-group-addon" ><i class="fa fa-calendar"></i></span> </div>
                </div>
              </div>
              </div>
        </div>
        <hr>
      </div>
</div>
</div>  <div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingTwo">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        4. General liability
      </a>
    </h4>
  </div>
  <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <h3 class="box-subtitle m-b-0">Each ocurrence </h3>
                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input name="g_l_each_ocurrence" type="text" id="example-input3-group1" value="{{$gleachocurrence}}" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <h3 class="box-subtitle m-b-0">Damages to rented permises</h3>
                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input name="g_l_rented_permises" type="text" id="example-input3-group1" value="{{$glrentedpermises}}" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                </div>
              </div>
              </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <h3 class="box-subtitle m-b-0">Medical expenses (any one person)</h3>
                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input name="g_l_medical_expenses" type="text" id="example-input3-group1" value="{{$glmedicalexpenses}}" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <h3 class="box-subtitle m-b-0">Personal & adv injury </h3>
                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input name="g_l_personal_adv" type="text" id="example-input3-group1" value="{{$glpersonaladv}}" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                </div>
              </div>
              </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <h3 class="box-subtitle m-b-0">General aggregate </h3>
                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input name="g_l_general_aggregate" type="text" id="example-input3-group1" value="{{$glgeneralaggregate}}" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <h3 class="box-subtitle m-b-0">Product - comp/op agg </h3>
                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input name="g_l_product_comp" type="text" id="example-input3-group1" value="{{$glproductcomp}}" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                </div>
              </div>
              </div>
        </div>
        <hr>
        <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <h3 class="box-subtitle m-b-0">Other </h3>
                <input name="g_l_other_input2" type="text" class="form-control" value="{{$glotherinput}}" placeholder="NAME">
                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input name="g_l_other2" type="text" id="example-input3-group1" class="form-control" value="{{$glother}}" placeholder=".."> <span class="input-group-addon">.00</span>
                </div>
              </div>
              </div>
        </div>
        <hr>

    </div>
    </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingSeven">
  <h4 class="panel-title">
    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
      5. Auto liability
    </a>
  </h4>
  </div>
  <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
    <div class="panel-body">
      <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-12">
                <input name="a_l_insurance_letter" type="text" value="{{$alinsuranceletter}}" placeholder="Insurance letter" class="form-control">
              </div>
            </div>
          </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                  <div class="radio radio-success">
                    @if ($aloptionanyauto === 'true')
                    <input type="checkbox" name="a_l_any_auto" value="true" checked=""> Any auto <br>
                    @else
                    <input type="checkbox" name="a_l_any_auto" value="true"> Any auto <br>
                    @endif
                    @if ($aloptionallowned === 'true')
                    <input type="checkbox" name="a_l_all_owned" value="true" checked=""> All owned autos<br>
                    @else
                    <input type="checkbox" name="a_l_all_owned" value="true"> All owned autos<br>
                    @endif
                    @if ($aloptionsheduled === 'true')
                    <input type="checkbox" name="a_l_sheduled" value="true" checked=""> Scheduled autos<br>
                    @else
                    <input type="checkbox" name="a_l_sheduled" value="true"> Scheduled autos<br>
                    @endif
                    @if ($aloptionalhomeautos === 'true')
                    <input type="checkbox" name="a_l_home_autos" value="true" checked=""> Home autos<br>
                    @else
                    <input type="checkbox" name="a_l_home_autos" value="true"> Home autos<br>
                    @endif
                  </div>
            </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                    <div class="radio radio-success">
                      @if ($aloptionalhiredautos === 'true')
                      <input type="checkbox" name="a_l_hired_autos" value="true" checked=""> Hired autos<br>
                      @else
                      <input type="checkbox" name="a_l_hired_autos" value="true"> Hired autos<br>
                      @endif
                      @if ($aloptionalownedautos === 'true')
                      <input type="checkbox" name="a_l_owned_autos" value="true" checked=""> Non-owned autos<br>
                      @else
                      <input type="checkbox" name="a_l_owned_autos" value="true"> Non-owned autos<br>
                      @endif
                      @if($aloptionother=== 'true')
                      <input type="checkbox" name="a_l_other" value="true" checked="">
                      @else
                      <input type="checkbox" name="a_l_other" value="true">
                      @endif
                      <input name="a_l_other_input" type="text" value="{{$aloptionotherinput}}" placeholder="Other" class="form-control"><br>
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
                    @if ($aloptionaddl === 'true')
                    <input type="checkbox" name="a_l_options_addl" value="true" checked=""> ADDL INSR
                    @else
                    <input type="checkbox" name="a_l_options_addl" value="true"> ADDL INSR
                    @endif
                  </div>
              </label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>
                  <div class="radio radio-success">
                    @if ($aloptionsubr === 'true')
                    <input type="checkbox" name="a_l_options_subr" value="true" checked="">  SUBR WVD
                    @else
                    <input type="checkbox" name="a_l_options_subr" value="true">  SUBR WVD
                    @endif
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
                <input name="a_l_policy_number" type="text" value="{{$alpolicynumber}}" placeholder="Enter policy number" class="form-control">
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
                      <input name="a_l_eff_date" type="text" value="{{$aleffdate}}" class="form-control" id="datepicker2" placeholder="EFF(MM/DD/YYY)" data-date-format="dd/mm/yyyy" > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="example">
                  <div class="input-group">
                      <input name="a_l_exp_date" type="text" value="{{$alexpdate}}" class="form-control" id="datepicker1" placeholder="EXP(MM/DD/YYY)" data-date-format="dd/mm/yyyy" > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
              </div>
            </div>
            </div>
      </div>
    </div>
    </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingEight">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            5. Auto liability
          </a>
        </h4>
      </div>
      <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
        <div class="panel-body">
      <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <h3 class="box-subtitle m-b-0">Combined single limit (Ea accident) </h3>
              <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                  <input name="a_l_combined_single" type="text" id="example-input3-group1" class="form-control" value="{{$alcombinedsingle}}" placeholder=".."> <span class="input-group-addon">.00</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <h3 class="box-subtitle m-b-0">Bodily injury (per person)</h3>
              <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                  <input name="a_l_bodily_person" type="text" id="example-input3-group1" class="form-control" value="$albodilyperson" placeholder=".."> <span class="input-group-addon">.00</span>
              </div>
            </div>
            </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <h3 class="box-subtitle m-b-0">Bodily injury (per accident)</h3>
              <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                  <input name="a_l_bodily_accident" type="text" id="example-input3-group1" class="form-control" value="{{$albodilyaccident}}" placeholder=".."> <span class="input-group-addon">.00</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <h3 class="box-subtitle m-b-0">Property damage (per accident) </h3>
              <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                  <input name="a_l_property_damage" type="text" id="example-input3-group1" class="form-control" value="{{$alpropertydamage}}" placeholder=".."> <span class="input-group-addon">.00</span>
              </div>
            </div>
            </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <h3 class="box-subtitle m-b-0">Other </h3>
              <input name="a_l_other_input2" type="text" class="form-control" value="{{$alotherinput2}}" placeholder="NAME">
              <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                  <input name="a_l_other2" type="text" id="example-input3-group1" class="form-control" value="{{$alother2}}" placeholder=".."> <span class="input-group-addon">.00</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <h3 class="box-subtitle m-b-0">Other </h3>
                <input name="a_l_other_input3" type="text" class="form-control" value="{{$alotherinput3}}"placeholder="NAME">
                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input name="a_l_other3" type="text" id="example-input3-group1" class="form-control" value="{{$alother3}}" placeholder=".."> <span class="input-group-addon">.00</span>
                </div>
            </div>
            </div>
      </div>

      <hr>
  </div>
</div>
</div>
<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingNine">
    <h4 class="panel-title">
      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
        6. Umbrella liability
      </a>
    </h4>
  </div>
  <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
    <div class="panel-body">
<div class="row">
    <div class="col-md-12">
      <div class="form-group">
          <div class="col-md-12">
          <input name="u_l_insurance_letter" type="text" value="{{$ulinsuranceletter}}" placeholder="Insurance letter" class="form-control">
        </div>
      </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
              <div class="radio radio-success">
                @if ($uloptionumbrellaliability === 'true')
                <input type="checkbox" name="u_l_umbrella_liability" value="true" checked="">Umbrella liability <br>
                @else
                <input type="checkbox" name="u_l_umbrella_liability" value="true">Umbrella liability <br>
                @endif
                @if ($uloptionoccur === 'true')
                <input type="checkbox" name="u_l_occur" value="true" checked=""> Occur <br>
                @else
                <input type="checkbox" name="u_l_occur" value="true"> Occur <br>
                @endif
                @if ($uloptionexcessliability === 'true')
                <input type="checkbox" name="u_l_excess_liability" value="true" checked=""> Excess liability<br>
                @else
                <input type="checkbox" name="u_l_excess_liability" value="true"> Excess liability<br>
                @endif
                @if ($uloptionclaimsmade === 'true')
                <input type="checkbox" name="u_l_claims_made" value="true" checked="">Claims-made <br>
                @else
                <input type="checkbox" name="u_l_claims_made" value="true">Claims-made <br>
                @endif
              </div>
        </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
                <div class="radio radio-success">
                  @if ($uloptiondeductible === 'true')
                  <input type="checkbox" name="u_l_deductible" value="true" checked=""> Deductible <br>
                  @else
                  <input type="checkbox" name="u_l_deductible" value="true"> Deductible <br>
                  @endif
                  @if ($uloptionretention === 'true')
                  <input type="checkbox" name="u_l_retention" value="true" checked=""> Retention
                  @else
                  <input type="checkbox" name="u_l_retention" value="true"> Retention
                  @endif
                </div>
          </div>
          <div class="form-group">
              <div class="col-md-12">
              <input name="u_l_retention_input" type="text" value="$ {{$uloptionretentioninput}}"placeholder="$ Retention" class="form-control">
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
              @if ($uloptionaddl === 'true')
              <input type="checkbox" name="u_l_options_addl" value="true" checked=""> ADDL INSR
              @else
              <input type="checkbox" name="u_l_options_addl" value="true"> ADDL INSR
              @endif
            </div>
        </label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>
            <div class="radio radio-success">
              @if ($uloptionsubr === 'true')
              <input type="checkbox" name="u_l_options_subr" value="true" checked="">  SUBR WVD
              @else
              <input type="checkbox" name="u_l_options_subr" value="true">  SUBR WVD
              @endif
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
          <input name="u_l_policy_number" type="text" value="{{$ulpolicynumber}}" placeholder="Enter policy number" class="form-control">
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
                <input name="u_l_eff_date" type="text" value="{{$uleffdate}}" class="form-control" id="datepicker2" placeholder="EFF(MM/DD/YYY)" data-date-format="dd/mm/yyyy" > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <div class="example">
            <div class="input-group">
                <input name="u_l_exp_date" type="text" value="{{$ulexpdate}}" class="form-control" id="datepicker1" placeholder="EXP(MM/DD/YYY)" data-date-format="dd/mm/yyyy" > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
        </div>
      </div>
      </div>
</div>
<hr>
<div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <h3 class="box-subtitle m-b-0">Each occurent </h3>
        <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
            <input name="u_l_each_occurent" type="text" class="form-control" value="{{$uleachoccurent}}" placeholder=".."> <span class="input-group-addon">.00</span>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <h3 class="box-subtitle m-b-0">Aggregate </h3>
        <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
            <input name="u_l_aggregate" type="text" class="form-control" value="{{$ulaggregate}}" placeholder=".."> <span class="input-group-addon">.00</span>
        </div>
      </div>
      </div>
</div>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="headingTen">
<h4 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
  6. Umbrella liability
</a>
</h4>
</div>
<div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
<div class="panel-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <h3 class="box-title m-b-0">Other </h3>
        <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
            <input name="u_l_other_input" type="text" class="form-control" value="{{$ulotherinput}}"placeholder="NAME">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <h3 class="box-title m-b-0">/</h3>
        <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
            <input name="u_l_other" type="text" class="form-control" value="{{$ulother}}" placeholder=".."> <span class="input-group-addon">.00</span>
        </div>
      </div>
      </div>
</div>
<hr>
<div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <h3 class="box-title m-b-0">Other </h3>
        <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
            <input name="u_l_other_input2" type="text" class="form-control" value="{{$ulotherinput2}}" placeholder="NAME">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <h3 class="box-title m-b-0">/</h3>
        <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
            <input name="u_l_other2" type="text" class="form-control" value="{{$ulother2}}" placeholder=".."> <span class="input-group-addon">.00</span>
        </div>
      </div>
      </div>
</div>
<hr>
</div>

</div>
</div>
<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingEleven">
    <h4 class="panel-title">
      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
        7. Workers compensation
      </a>
    </h4>
  </div>
  <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
    <div class="panel-body">
<div class="row">
    <div class="col-md-12">
      <div class="form-group">
          <div class="col-md-12">
          <input name="W_C_insurance_letter" type="text" value="{{$formcontrol->W_C_insurance_letter}}" placeholder="Insurance letter" class="form-control">
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
                      @if ($formcontrol->W_C_propretor === 'yes')
                      <input type="radio" name="W_C_propretor" id="radio1" value="yes" checked="">
                      @else
                      <input type="radio" name="W_C_propretor" id="radio1" value="yes">
                      @endif
                      <label for="radio_propetor">YES</label>
                  </div>
              </label>
              <label class="radio-inline">
                  <div class="radio radio-info">
                    @if ($formcontrol->W_C_propretor === 'no')
                      <input type="radio" name="W_C_propretor" id="radio2" value="no" checked="">
                    @else
                      <input type="radio" name="W_C_propretor" id="radio2" value="no">
                    @endif
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
          @if ($formcontrol->W_C_office === 'true')
          <input type="checkbox" name="W_C_office" value="true" checked="">Office / Member excluded <br>
          @else
          <input type="checkbox" name="W_C_office" value="true">Office / Member excluded <br>
          @endif
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
              @if ($wcoptionaddl === 'true')
              <input type="checkbox" name="w_c_options_addl" value="true" checked=""> ADDL INSR
              @else
              <input type="checkbox" name="w_c_options_addl" value="true"> ADDL INSR
              @endif
            </div>
        </label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>
            <div class="radio radio-success">
              @if ($wcoptionsubr === 'true')
              <input type="checkbox" name="w_c_options_subr" value="true" checked="">  SUBR WVD
              @else
              <input type="checkbox" name="w_c_options_subr" value="true">  SUBR WVD
              @endif
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
          <input name="W_C_policy_number" type="text" value="{{$formcontrol->W_C_policy_number}}" placeholder="Enter policy number" class="form-control">
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
                <input name="W_C_eff_date" type="text" value="{{$formcontrol->W_C_eff_date}}" class="form-control" id="datepicker2" placeholder="EFF(MM/DD/YYY)" data-date-format="dd/mm/yyyy" > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <div class="example">
            <div class="input-group">
                <input name="W_C_exp_date" type="text" value="{{$formcontrol->W_C_exp_date}}" class="form-control" id="datepicker1" placeholder="EXP(MM/DD/YYY)" data-date-format="dd/mm/yyyy" > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
        </div>
      </div>
      </div>
</div>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="headingTwelve">
<h4 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
7. Workers compensation
</a>
</h4>
</div>
<div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
<div class="panel-body">
<div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <h3 class="box-subtitle m-b-0">WC STATUTORY LIMITS </h3>
        <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
            <input name="W_C_statutory_limits" type="text" class="form-control" value="{{$formcontrol->W_C_statutory_limits}}" placeholder=".."> <span class="input-group-addon">.00</span>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <h3 class="box-subtitle m-b-0">E.L Disease - Policy limit </h3>
        <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
            <input name="W_C_policy_limit" type="text" value="{{$formcontrol->W_C_policy_limit}}" name="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
        </div>
      </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <h3 class="box-subtitle m-b-0">E.L. Each accident </h3>
        <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
            <input name="W_C_each_accident" type="text" value="{{$formcontrol->W_C_each_accident}}" name="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <h3 class="box-subtitle m-b-0">E.L Disease - EA Employee </h3>
        <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
            <input name="W_C_ea_employee" type="text" value="{{$formcontrol->W_C_ea_employee}}" name="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
        </div>
      </div>
      </div>
</div>
<hr>
<div class="row">

    <div class="col-md-6">
      <div class="form-group">
        <h3 class="box-subtitle m-b-0">Other </h3>
        <input name="W_C_other_input" type="text" class="form-control" value="{{$formcontrol->W_C_other_input}}" placeholder="NAME">
        <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
            <input name="W_C_other" type="text" value="{{$formcontrol->W_C_other}}" name="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
        </div>
      </div>
      </div>
</div>

  </div>
</div>
</div>
<div class="panel-heading" role="tab" id="headingThirteen">
  <h4 class="panel-title">
    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
      8. Additional coverage
    </a>
  </h4>
</div>
<div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
  <div class="panel-body">
<div class="row">
    <div class="col-md-12">
      <div class="form-group">
          <div class="col-md-12">
          <input name="A_C_a_insurance_letter" type="text" value="{{$formcontrol->A_C_a_insurance_letter}}" placeholder="Insurance letter" class="form-control">
        </div>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
      <div class="form-group">
          <div class="col-md-12">
          <input name="A_C_a_policy_type" type="text" value="{{$formcontrol->A_C_a_policy_type}}" placeholder="Policy type" class="form-control">
        </div>
      </div>
    </div>
</div>

  <div class="col-md-6">
      <div class="form-group">
          <div class="radio-list">
              <label class="radio-inline p-0">
                  <div class="radio radio-info">
                    @if ($formcontrol->A_C_a_options_add_insurance_surrogation === 'Additonal insurance')
                      <input type="radio" name="A_C_a_options_add_insurance_surrogation" id="radio1" value="Additonal insurance" checked="">
                    @else
                      <input type="radio" name="A_C_a_options_add_insurance_surrogation" id="radio1" value="Additonal insurance">
                    @endif
                      <label for="radio_options_add">Additonal insurance</label>
                  </div>
              </label>
              <label class="radio-inline">
                  <div class="radio radio-info">
                    @if ($formcontrol->A_C_a_options_add_insurance_surrogation === 'Surrogation')
                      <input type="radio" name="A_C_a_options_add_insurance_surrogation" id="radio2" value="Surrogation" checked="">
                    @else
                      <input type="radio" name="A_C_a_options_add_insurance_surrogation" id="radio2" value="Surrogation">
                    @endif
                      <label for="radio_options_add">Surrogation</label>
                  </div>
              </label>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-12">
            <input name="A_C_a_policy_number" type="text" value="{{$formcontrol->A_C_a_policy_number}}" placeholder="Enter policy number" class="form-control">
          </div>
        </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <div class="example">
              <div class="input-group">
                  <input name="A_C_a_eff_date" type="text" value="{{$formcontrol->A_C_a_eff_date}}" class="form-control" id="datepicker2" placeholder="EFF(MM/DD/YYY)" data-date-format="mm/dd/yyyy" > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <div class="example">
              <div class="input-group">
                  <input name="A_C_a_exp_date" type="text" value="{{$formcontrol->A_C_a_exp_date}}" class="form-control" id="datepicker1" placeholder="EXP(MM/DD/YYY)" data-date-format="mm/dd/yyyy" > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
          </div>
        </div>
        </div>
  </div>
  <hr>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <h3 class="box-title m-b-0">Coverage limits / Deductible </h3>
      <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
          <input name="A_C_a_coverage_limits" type="text" class="form-control" value="{{$formcontrol->A_C_a_coverage_limits}}" placeholder=".."> <span class="input-group-addon">.00</span>
      </div>
    </div>
  </div>

  </div>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="headingFourteen">
<h4 class="panel-title">
  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
    9. Additional coverage
  </a>
</h4>
</div>
<div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
<div class="panel-body">
  <div class="row">
      <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-12">
            <input name="A_C_b_insurance_letter" type="text" value="{{$formcontrol->A_C_b_insurance_letter}}" placeholder="Insurance letter" class="form-control">
          </div>
        </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-12">
            <input name="A_C_b_policy_type" type="text" value="{{$formcontrol->A_C_b_policy_type}}" placeholder="Policy type" class="form-control">
          </div>
        </div>
      </div>
  </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="radio-list">
                <label class="radio-inline p-0">
                    <div class="radio radio-info">
                      @if ($formcontrol->A_C_b_options_add_insurance_surrogation === 'Additonal insurance')
                        <input type="radio" name="A_C_b_options_add_insurance_surrogation" id="radio1" value="Additonal insurance" checked="">
                      @else
                        <input type="radio" name="A_C_b_options_add_insurance_surrogation" id="radio1" value="Additonal insurance">
                      @endif
                        <label for="radio_options_add2">Additonal insurance</label>
                    </div>
                </label>
                <label class="radio-inline">
                    <div class="radio radio-info">
                      @if ($formcontrol->A_C_b_options_add_insurance_surrogation === 'Surrogation')
                        <input type="radio" name="A_C_b_options_add_insurance_surrogation" id="radio2" value="Surrogation" checked="">
                      @else
                        <input type="radio" name="A_C_b_options_add_insurance_surrogation" id="radio2" value="Surrogation">
                      @endif
                        <label for="radio_options_add2">Surrogation</label>
                    </div>
                </label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
          <div class="form-group">
              <div class="col-md-12">
              <input name="A_C_b_policy_number" value="{{$formcontrol->A_C_b_policy_number}}" type="text" placeholder="Enter policy number" class="form-control">
            </div>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <div class="example">
                <div class="input-group">
                    <input name="A_C_b_eff_date" type="text" value="{{$formcontrol->A_C_b_eff_date}}" class="form-control" id="datepicker2" placeholder="EFF(MM/DD/YYY)" data-date-format="mm/dd/yyyy" > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <div class="example">
                <div class="input-group">
                    <input name="A_C_b_exp_date" type="text" value="{{$formcontrol->A_C_b_exp_date}}" class="form-control" id="datepicker1" placeholder="EXP(MM/DD/YYY)" data-date-format="mm/dd/yyyy" > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
            </div>
          </div>
          </div>
    </div>
    <hr>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <h3 class="box-title m-b-0">Coverage limits / Deductible </h3>
        <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
            <input name="A_C_b_coverage_limits" type="text" class="form-control" value="{{$formcontrol->A_C_b_coverage_limits}}" placeholder=".."> <span class="input-group-addon">.00</span>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>
</div>
</div>
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
            <textarea rows="5" cols="100" name="description" value="{{$formcontrol->description}}">
          </textarea>
      <input type="submit" name="sendForm" id="sendForm" value="Enviar" style="display:none;"/>
</div>
</div>
</div>
</div>
