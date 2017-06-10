
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

                        <div class="radio radio-success">
                          <input type="checkbox" name="a_l_any_auto" value="true"> Any auto <br>
                          <input type="checkbox" name="a_l_all_owned" value="true"> All owned autos<br>
                          <input type="checkbox" name="a_l_sheduled" value="true"> Scheduled autos<br>
                          <input type="checkbox" name="a_l_home_autos" value="true"> Home autos<br>

                        </div>

                  </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                          <div class="radio radio-success">
                            <input type="checkbox" name="a_l_hired_autos" value="true"> Hired autos<br>
                            <input type="checkbox" name="a_l_owned_autos" value="true"> Non-owned autos<br>
                            <input type="checkbox" name="a_l_other" value="true"><input name="a_l_other_input" type="text" placeholder="Other" class="form-control"><br>
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
                          <input type="checkbox" name="a_l_options_addl" value="true"> ADDL INSR
                        </div>
                    </label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>
                        <div class="radio radio-success">
                          <input type="checkbox" name="a_l_options_subr" value="true">  SUBR WVD
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
                    <h3 class="box-subtitle m-b-0">Combined single limit (Ea accident) </h3>
                    <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        <input name="a_l_combined_single" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <h3 class="box-subtitle m-b-0">Bodily injury (per person)</h3>
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
                    <h3 class="box-subtitle m-b-0">Bodily injury (per accident)</h3>
                    <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        <input name="a_l_bodily_accident" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <h3 class="box-subtitle m-b-0">Property damage (per accident) </h3>
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
                    <h3 class="box-subtitle m-b-0">Other </h3>
                    <input name="a_l_other_input2" type="text" class="form-control" placeholder="NAME">
                    <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        <input name="a_l_other2" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <h3 class="box-subtitle m-b-0">Other </h3>
                      <input name="a_l_other_input3" type="text" class="form-control" placeholder="NAME">
                      <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                          <input name="a_l_other3" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                      </div>
                  </div>
                  </div>
            </div>

            <hr>
        </div>
      </div>
  </div>
