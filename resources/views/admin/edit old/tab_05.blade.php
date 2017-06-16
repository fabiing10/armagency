<div class="wizard-pane" role="tabpanel">
    <div class="form-group p-50">
      <div class="form-body">
          <h3 class="box-title">7. Workers compensation</h3>
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
                          <input name="W_C_eff_date" type="text" value="{{$formcontrol->W_C_eff_date}}" class="form-control" id="datepicker2" placeholder="EFF(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="example">
                      <div class="input-group">
                          <input name="W_C_exp_date" type="text" value="{{$formcontrol->W_C_exp_date}}" class="form-control" id="datepicker1" placeholder="EXP(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                  </div>
                </div>
                </div>
          </div>
          <hr>
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
          @include('admin.edit.tab_06')
        </div>
