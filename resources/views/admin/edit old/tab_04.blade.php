
  <div class="wizard-pane" role="tabpanel">
      <div class="form-group p-50">
        <div class="form-body">
            <h3 class="box-title">6. Umbrella liability</h3>
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
                            <input name="u_l_eff_date" type="text" value="{{$uleffdate}}" class="form-control" id="datepicker2" placeholder="EFF(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="example">
                        <div class="input-group">
                            <input name="u_l_exp_date" type="text" value="{{$ulexpdate}}" class="form-control" id="datepicker1" placeholder="EXP(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
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

            <hr>
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
