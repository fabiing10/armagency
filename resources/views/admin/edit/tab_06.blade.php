
    <div class="form-group p-50">
      <div class="form-body">
        <div class="panel panel-default">
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
