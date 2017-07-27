<div class="wizard-pane active" role="tabpanel">
    <div class="form-group p-50">

        <div class="form-body">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingThree">
                                      <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          1. Insured Information
                                        </a>
                                      </h4>
                                  </div>
                                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
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
                                                      <label for="I_I_dba_name">DBA Name</label>
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
                                                      <input type="text" class="form-control input-sm" id="password_insured" name="password_insured" required><span class="highlight"></span> <span class="bar"></span>
                                                      <label for="password_insured">Password</label>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                                  <div class="form-group f-style">
                                                      <input type="text" class="form-control input-sm" id="password_insured_repeat" name="password_insured_repeat" required><span class="highlight"></span> <span class="bar"></span>
                                                      <label for="password_insured_repeat">Repeat Password</label>
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
                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                <div class="form-group f-style">
                                                    <input type="text" class="form-control input-sm" value="{{$formcontrol->P_I_name}}" id="P_I_name" name="P_I_name" required><span class="highlight"></span> <span class="bar"></span>
                                                    <label for="P_I_name">Name</label>
                                                </div>
                                              </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                                <div class="form-group f-style">
                                                    <input type="text" class="form-control input-sm" value="{{$formcontrol->P_I_dba_name}}" id="dba_name" name="dba_name" required><span class="highlight"></span> <span class="bar"></span>
                                                    <label for="dba_name">DBA Name</label>
                                                </div>
                                              </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                                <div class="form-group f-style">
                                                    <input type="text" class="form-control input-sm" value="{{$formcontrol->P_I_address}}" id="address" name="address" required><span class="highlight"></span> <span class="bar"></span>
                                                    <label for="address">Address</label>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                          <!--/row-->
                                          <div class="row">
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <div class="form-group f-style">
                                                    <input type="text" class="form-control input-sm" value="{{$formcontrol->P_I_city}}" id="city" name="city" required><span class="highlight"></span> <span class="bar"></span>
                                                    <label for="city">City</label>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <div class="form-group f-style">
                                                    <input type="text" class="form-control input-sm" value="{{$formcontrol->P_I_dba_state}}" id="state" name="state" required><span class="highlight"></span> <span class="bar"></span>
                                                    <label for="state">State</label>
                                                </div>
                                              </div>
                                            </div>
                                              <div class="col-md-4">
                                                <div class="form-group">
                                                  <div class="form-group f-style">
                                                      <input type="text" class="form-control input-sm" value="{{$formcontrol->P_I_dba_zip_code}}" id="zip_code" name="zip_code" required><span class="highlight"></span> <span class="bar"></span>
                                                      <label for="zip_code">Zip code</label>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            3. Contact Information
                          </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <div class="form-group f-style">
                                    <input type="text" class="form-control input-sm" value="{{$formcontrol->C_I_name}}" id="name" name="name" required><span class="highlight"></span> <span class="bar"></span>
                                    <label for="name">Contact name</label>
                                </div>
                              </div>
                            </div>
                  <!--/span-->
                              <div class="col-md-6">
                                <div class="form-group">
                                  <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$formcontrol->C_I_phone}}" id="phone" name="phone" required><span class="highlight"></span> <span class="bar"></span>
                                      <label for="phone">Phone number</label>
                                  </div>
                                </div>
                              </div>
                              <!--/span-->
                          </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="input-group-addon"><i class="fa fa-fax"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" value="{{$formcontrol->C_I_fax}}" id="fax" name="fax" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="fax">FAX</label>
                                    </div>
                                  </div>
                                  </div>
                                <!--/span-->
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" value="{{$formcontrol->C_I_email}}" id="email" name="email" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="email">Email</label>
                                    </div>
                                  </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="input-group-addon"><i class="fa fa-id-badge"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" value="{{$formcontrol->C_I_producer_id}}" id="customer_id" name="customer_id" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="customer_id">Producer customer ID number</label>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4. Insurance
                          </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                          <div class="row">
                                  <div class="col-md-9">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-shield"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$Ensured_a}}" id="ensured_a" name="ensured_a" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="ensured_a">Ensured A</label>
                                      </div>
                                    </div>
                                    </div>
                                  <!--/span-->
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$Naic_a}}" id="naic_a" name="naic_a" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="naic_a">NAIC #</label>
                                      </div>
                                    </div>
                                  </div>
                                  <!--/span-->
                                </div>
                                <div class="row">
                                  <div class="col-md-9">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-shield"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$Ensured_b}}" id="ensured_b" name="ensured_b" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="ensured_b">Ensured B</label>
                                      </div>
                                    </div>
                                    </div>
                                  <!--/span-->
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$Naic_b}}" id="naic_b" name="naic_b" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="naic_b">NAIC #</label>
                                      </div>
                                    </div>
                                  </div>
                                  <!--/span-->
                                </div>
                                <div class="row">
                                  <div class="col-md-9">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-shield"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$Ensured_c}}" id="ensured_c" name="ensured_c" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="ensured_c">Ensured C</label>
                                      </div>
                                    </div>
                                    </div>
                                  <!--/span-->
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$Naic_c}}" id="naic_c" name="naic_c" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="naic_c">NAIC #</label>
                                      </div>
                                    </div>
                                  </div>
                                  <!--/span-->
                                </div>
                                <div class="row">
                                  <div class="col-md-9">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$Ensured_d}}" id="ensured_d" name="ensured_d" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="ensured_d">Ensured D</label>
                                      </div>
                                    </div>
                                    </div>
                                  <!--/span-->
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$Naic_d}}" id="naic_d" name="naic_d" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="naic_d">NAIC #</label>
                                      </div>
                                    </div>
                                  </div>
                                  <!--/span-->
                                </div>
                                <div class="row">
                                  <div class="col-md-9">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-shield"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$Ensured_e}}" id="ensured_e" name="ensured_e" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="ensured_e">Ensured E</label>
                                      </div>
                                    </div>
                                    </div>
                                  <!--/span-->
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$Naic_e}}" id="naic_e" name="naic_e" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="naic_e">NAIC #</label>
                                      </div>
                                    </div>
                                  </div>
                                  <!--/span-->
                                </div>
                                <div class="row">
                                  <div class="col-md-9">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-shield"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$Ensured_f}}" id="ensured_f" name="ensured_f" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="ensured_f">Ensured F</label>
                                      </div>
                                    </div>
                                    </div>
                                  <!--/span-->
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <div class="input-group-addon"><i class="fa fa-hashtag"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$Naic_f}}" id="naic_f" name="naic_f" required><span class="highlight"></span> <span class="bar"></span>
                                          <label for="naic_f">NAIC #</label>
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
                            5. General Liability Information
                          </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                          <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$glinsuranceletter}}" id="g_l_insurance_letter" name="g_l_insurance_letter" required><span class="highlight"></span> <span class="bar"></span>
                                      <label for="naic_e">Insurance letter</label>
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
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
                                </div>
                                </div>
                          </div>

                            <!--/row-->
                            <p> GENERAL AGGREGATE LIMIT APPLIES PER</p>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
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
                                          <input name="g_l_other_input" type="text" value="{{$glotherinput2}}" class="form-control input-sm" placeholder="NAME">
                                        </div>
                                  </div>
                                  </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                        <div class="radio radio-success">
                                          @if ($gloptionaddl === 'true')
                                          <input type="checkbox" name="g_l_option_addl" value="true" checked=""> Additional Insured
                                          @else
                                          <input type="checkbox" name="g_l_option_addl" value="true"> Additional Insured
                                          @endif
                                        </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                        <div class="radio radio-success">
                                          @if ($gloptionsubr === 'true')
                                          <input type="checkbox" name="g_l_option_subr" value="true" checked="">  Waiver of Subrogation
                                          @else
                                          <input type="checkbox" name="g_l_option_subr" value="true">  Waiver of Subrogation
                                          @endif
                                        </div>
                                  </div>
                                  </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" value="{{$glpolicynumber}}" id="g_l_policy_number" name="g_l_policy_number" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="g_l_policy_number">Enter policy number</label>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" placeholder="EFF(MM/DD/YYY)" data-date-format="mm/dd/yyyy" value="{{$gleffdate}}" id="datepicker2" name="g_l_eff_date" required><span class="highlight"></span> <span class="bar"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" placeholder="EXP(MM/DD/YYY)" data-date-format="mm/dd/yyyy" value="{{$glexpdate}}" id="datepicker1" name="g_l_exp_date" required><span class="highlight"></span> <span class="bar"></span>
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
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            6. General Liability Coverages
                          </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">
                          <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <h3 class="box-subtitle m-b-0">Each ocurrence </h3>
                                  <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$gleachocurrence}}" id="g_l_each_ocurrence" name="g_l_each_ocurrence" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <h3 class="box-subtitle m-b-0">Damages to rented permises</h3>
                                  <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$glrentedpermises}}" id="g_l_rented_permises" name="g_l_rented_permises" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                                </div>
                          </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <h3 class="box-subtitle m-b-0">Medical expenses (any one person)</h3>
                                    <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" value="{{$glmedicalexpenses}}" id="g_l_medical_expenses" name="g_l_medical_expenses" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <h3 class="box-subtitle m-b-0">Personal & adv injury </h3>
                                    <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" value="{{$glpersonaladv}}" id="g_l_personal_adv" name="g_l_personal_adv" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                    </div>
                                  </div>
                                  </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <h3 class="box-subtitle m-b-0">General aggregate </h3>
                                    <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" value="{{$glgeneralaggregate}}" id="g_l_general_aggregate" name="g_l_general_aggregate" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <h3 class="box-subtitle m-b-0">Product - comp/op agg </h3>
                                    <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" value="{{$glproductcomp}}" id="g_l_product_comp" name="g_l_product_comp" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                    </div>
                                  </div>
                                  </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <h3 class="box-subtitle m-b-0">Other </h3>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" value="{{$glotherinput}}" id="g_l_other_input2" name="g_l_other_input2" placeholder="NAME" required><span class="highlight"></span> <span class="bar"></span>
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-md-6">
                                  <div class="form-group" style="padding-top: 30px;">
                                    <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" value="{{$glother}}" id="g_l_other2" name="g_l_other2" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                    </div>
                                  </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingSeven">
                        <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                          7. Auto Liability Information
                        </a>
                      </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                        <div class="panel-body">
                          <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$alinsuranceletter}}" id="a_l_insurance_letter" name="a_l_insurance_letter" required><span class="highlight"></span> <span class="bar"></span>
                                      <label for="a_l_insurance_letter">Insurance letter</label>
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
                                            <input name="a_l_other_input" type="text" value="{{$aloptionotherinput}}" placeholder="Other" class="form-control input-sm"><br>
                                          </div>

                                    </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                        <div class="radio radio-success">
                                          @if ($aloptionaddl === 'true')
                                          <input type="checkbox" name="a_l_options_addl" value="true" checked=""> Additional Insured
                                          @else
                                          <input type="checkbox" name="a_l_options_addl" value="true"> Additional Insured
                                          @endif
                                        </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                        <div class="radio radio-success">
                                          @if ($aloptionsubr === 'true')
                                          <input type="checkbox" name="a_l_options_subr" value="true" checked="">  Waiver of Subrogation
                                          @else
                                          <input type="checkbox" name="a_l_options_subr" value="true">  Waiver of Subrogation
                                          @endif
                                        </div>
                                  </div>
                                  </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" value="{{$alpolicynumber}}" id="a_l_policy_number" name="a_l_policy_number" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="a_l_policy_number">Enter policy number</label>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" placeholder="EFF(MM/DD/YYY)" data-date-format="mm/dd/yyyy" value="{{$aleffdate}}" id="datepicker2" name="a_l_eff_date" required><span class="highlight"></span> <span class="bar"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" placeholder="EXP(MM/DD/YYY)" data-date-format="mm/dd/yyyy" value="{{$alexpdate}}" id="datepicker1" name="a_l_exp_date" required><span class="highlight"></span> <span class="bar"></span>
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
                        8. Auto Liability Coverage
                      </a>
                    </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                        <div class="panel-body">
                          <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <h3 class="box-subtitle m-b-0">Combined single limit (Ea accident) </h3>
                                  <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$alcombinedsingle}}" id="a_l_combined_single" name="a_l_combined_single" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <h3 class="box-subtitle m-b-0">Bodily injury (per person)</h3>
                                  <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$albodilyperson}}" id="a_l_bodily_person" name="a_l_bodily_person" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                                </div>
                          </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <h3 class="box-subtitle m-b-0">Bodily injury (per accident)</h3>
                                    <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" value="{{$albodilyaccident}}" id="a_l_bodily_accident" name="a_l_bodily_accident" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <h3 class="box-subtitle m-b-0">Property damage (per accident) </h3>
                                    <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" value="{{$alpropertydamage}}" id="a_l_property_damage" name="a_l_property_damage" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                    </div>
                                  </div>
                                  </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <h3 class="box-subtitle m-b-0">Other </h3>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$alotherinput2}}" id="a_l_other_input2" name="a_l_other_input2" placeholder="NAME" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-6">
                                <div class="form-group" style="padding-top: 30px;">
                                  <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$alother2}}" id="a_l_other2" name="a_l_other2" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                                </div>
                              </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <h3 class="box-subtitle m-b-0">Other </h3>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$alotherinput3}}" id="a_l_other_input3" name="a_l_other_input3" placeholder="NAME" required><span class="highlight"></span> <span class="bar"></span>
                                      </div>
                                    </div>
                                  </div>
                                    <div class="col-md-6">
                                    <div class="form-group" style="padding-top: 30px;">
                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$alother3}}" id="a_l_other3" name="a_l_other3" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                      </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingNine">
                        <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                          9. Umbrella Liability Information
                        </a>
                      </h4>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                        <div class="panel-body">
                          <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$ulinsuranceletter}}" id="u_l_insurance_letter" name="u_l_insurance_letter" required><span class="highlight"></span> <span class="bar"></span>
                                      <label for="u_l_insurance_letter">Insurance letter</label>
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
                                        <input name="u_l_retention_input" type="text" value="$ {{$uloptionretentioninput}}"placeholder="$ Retention" class="form-control input-sm">
                                      </div>
                                    </div>
                                </div>
                          </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                        <div class="radio radio-success">
                                          @if ($uloptionaddl === 'true')
                                          <input type="checkbox" name="u_l_options_addl" value="true" checked=""> Additional Insured
                                          @else
                                          <input type="checkbox" name="u_l_options_addl" value="true"> Additional Insured
                                          @endif
                                        </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                        <div class="radio radio-success">
                                          @if ($uloptionsubr === 'true')
                                          <input type="checkbox" name="u_l_options_subr" value="true" checked="">  Waiver of Subrogation
                                          @else
                                          <input type="checkbox" name="u_l_options_subr" value="true">  Waiver of Subrogation
                                          @endif
                                        </div>
                                  </div>
                                  </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" value="{{$ulpolicynumber}}" id="u_l_policy_number" name="u_l_policy_number" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="u_l_policy_number">Enter policy number</label>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" placeholder="EFF(MM/DD/YYY)" data-date-format="mm/dd/yyyy" value="{{$uleffdate}}" id="datepicker2" name="u_l_eff_date" required><span class="highlight"></span> <span class="bar"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <div class="form-group f-style">
                                        <input type="text" class="form-control input-sm" placeholder="EXP(MM/DD/YYY)" data-date-format="mm/dd/yyyy" value="{{$ulexpdate}}" id="datepicker1" name="u_l_exp_date" required><span class="highlight"></span> <span class="bar"></span>
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
                        10. Umbrella Liability Coverage
                      </a>
                    </h4>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                        <div class="panel-body">
                          <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <h3 class="box-subtitle m-b-0">Each occurent </h3>
                                  <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$uleachoccurent}}" id="u_l_each_occurent" name="u_l_each_occurent" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <h3 class="box-subtitle m-b-0">Aggregate </h3>
                                  <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$ulaggregate}}" id="u_l_aggregate" name="u_l_aggregate" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                                </div>
                          </div>

                            <hr>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <h3 class="box-subtitle m-b-0">Other </h3>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$ulotherinput}}" id="u_l_other_input" name="u_l_other_input" placeholder="NAME" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-6">
                                <div class="form-group" style="padding-top: 30px;">
                                  <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$ulother}}" id="u_l_other" name="u_l_other" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                                </div>
                          </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <h3 class="box-subtitle m-b-0">Other </h3>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$ulotherinput2}}" id="u_l_other_input2" name="u_l_other_input2" placeholder="NAME" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-6">
                                <div class="form-group" style="padding-top: 30px;">
                                  <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$ulother2}}" id="u_l_other2" name="u_l_other2" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFiveTeen">
                        <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFiveTeen" aria-expanded="false" aria-controls="collapseFiveTeen">
                        11. Workers Compensation Information
                      </a>
                    </h4>
                    </div>
                    <div id="collapseFiveTeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFiveTeen">
                      <div class="panel-body">
                            <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <div class="form-group f-style">
                                    <input type="text" class="form-control input-sm" value="{{$formcontrol->W_C_insurance_letter}}" id="W_C_insurance_letter" name="W_C_insurance_letter" required><span class="highlight"></span> <span class="bar"></span>
                                    <label for="W_C_insurance_letter">Insurance letter</label>
                                </div>
                              </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label class="control-label">Propretor / Parner excluded</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <div class="radio-list">
                                      <div class="radio-inline p-0">
                                          <div class="radio radio-info">
                                              @if ($formcontrol->W_C_propretor === 'yes')
                                              <input type="checkbox" name="W_C_propretor_yes" value="yes" checked="">YES
                                              @else
                                              <input type="checkbox" name="W_C_propretor_yes" value="yes">YES
                                              @endif
                                          </div>
                                      </div>
                                      <div class="radio-inline">
                                          <div class="radio radio-info">
                                            @if ($formcontrol->W_C_propretor === 'no')
                                              <input type="checkbox" name="W_C_propretor_no" value="no" checked="">NO
                                            @else
                                              <input type="checkbox" name="W_C_propretor_no" value="no">NO
                                            @endif
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            </div>
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
                                    <div class="radio radio-success">
                                      @if ($wcoptionaddl === 'true')
                                      <input type="checkbox" name="w_c_options_addl" value="true" checked=""> Additional Insured
                                      @else
                                      <input type="checkbox" name="w_c_options_addl" value="true"> Additional Insured
                                      @endif
                                    </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                    <div class="radio radio-success">
                                      @if ($wcoptionsubr === 'true')
                                      <input type="checkbox" name="w_c_options_subr" value="true" checked="">  Waiver of Subrogation
                                      @else
                                      <input type="checkbox" name="w_c_options_subr" value="true">  Waiver of Subrogation
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
                                <div class="form-group f-style">
                                    <input type="text" class="form-control input-sm" value="{{$formcontrol->W_C_policy_number}}" id="W_C_policy_number" name="W_C_policy_number" required><span class="highlight"></span> <span class="bar"></span>
                                    <label for="W_C_policy_number">Enter policy number</label>
                                </div>
                              </div>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                <div class="form-group f-style">
                                    <input type="text" class="form-control input-sm" placeholder="EFF(MM/DD/YYY)" data-date-format="mm/dd/yyyy" value="{{$formcontrol->W_C_eff_date}}" id="datepicker2" name="W_C_eff_date" required><span class="highlight"></span> <span class="bar"></span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                <div class="form-group f-style">
                                    <input type="text" class="form-control input-sm" placeholder="EXP(MM/DD/YYY)" data-date-format="mm/dd/yyyy" value="{{$formcontrol->W_C_exp_date}}" id="datepicker2" name="W_C_exp_date" required><span class="highlight"></span> <span class="bar"></span>
                                </div>
                              </div>
                              </div>
                            </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingSixTeen">
                                  <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSixTeen" aria-expanded="false" aria-controls="collapseSixTeen">
                                  12. Workers Compensation Coverage
                                </a>
                              </h4>
                              </div>
                              <div id="collapseSixTeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixTeen">
                                <div class="panel-body">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <h3 class="box-subtitle m-b-0">WC STATUTORY LIMITS </h3>
                                        <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                        <div class="form-group f-style">
                                            <input type="text" class="form-control input-sm" value="{{$formcontrol->W_C_statutory_limits}}" id="W_C_statutory_limits" name="W_C_statutory_limits" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <h3 class="box-subtitle m-b-0">E.L Disease - Policy limit </h3>
                                        <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                        <div class="form-group f-style">
                                            <input type="text" class="form-control input-sm" value="{{$formcontrol->W_C_policy_limit}}" id="W_C_policy_limit" name="W_C_policy_limit" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <h3 class="box-subtitle m-b-0">E.L. Each accident </h3>
                                        <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                        <div class="form-group f-style">
                                            <input type="text" class="form-control input-sm" value="{{$formcontrol->W_C_each_accident}}" id="W_C_each_accident" name="W_C_each_accident" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">

                                      </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <h3 class="box-subtitle m-b-0">Other </h3>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$formcontrol->W_C_other_input}}" id="W_C_other_input" name="W_C_other_input" placeholder="NAME" required><span class="highlight"></span> <span class="bar"></span>
                                      </div>
                                    </div>
                                  </div>
                                    <div class="col-md-6">
                                    <div class="form-group" style="padding-top: 30px;">
                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                      <div class="form-group f-style">
                                          <input type="text" class="form-control input-sm" value="{{$formcontrol->W_C_other}}" id="W_C_other" name="W_C_other" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                      </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThirteen">
                        <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                        13. Additional Coverage 1
                      </a>
                    </h4>
                    </div>
                    <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                        <div class="panel-body">
                          <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$formcontrol->A_C_a_insurance_letter}}" id="A_C_a_insurance_letter" name="A_C_a_insurance_letter" required><span class="highlight"></span> <span class="bar"></span>
                                      <label for="A_C_a_insurance_letter">Insurance letter</label>
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$formcontrol->A_C_a_policy_type}}" id="A_C_a_policy_type" name="A_C_a_policy_type" required><span class="highlight"></span> <span class="bar"></span>
                                      <label for="A_C_a_policy_type">Policy type</label>
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="col-md-6">
                              <div class="form-group">
                                  <div class="radio-list">
                                      <div class="radio-inline p-0">
                                          <div class="radio radio-info">
                                            @if ($formcontrol->A_C_a_options_add_insurance_surrogation === 'Additonal insurance')
                                              <input type="checkbox" name="A_C_a_options_add_insurance" value="Additonal insurance" checked="">Additional Insured
                                            @else
                                              <input type="checkbox" name="A_C_a_options_add_insurance" value="Additonal insurance">Additional Insured
                                            @endif
                                          </div>
                                      </div>
                                      <div class="radio-inline">
                                          <div class="radio radio-info">
                                            @if ($formcontrol->A_C_a_options_add_insurance_surrogation === 'Surrogation')
                                              <input type="checkbox" name="A_C_a_options_surrogation" value="Surrogation" checked="">Waiver of subrogation
                                            @else
                                              <input type="checkbox" name="A_C_a_options_surrogation" value="Surrogation">Waiver of subrogation
                                            @endif
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <hr>
                          <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$formcontrol->A_C_a_policy_number}}" id="A_C_a_policy_number" name="A_C_a_policy_number" required><span class="highlight"></span> <span class="bar"></span>
                                      <label for="A_C_a_policy_number">Enter policy number</label>
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" placeholder="EFF(MM/DD/YYY)" data-date-format="mm/dd/yyyy" value="{{$formcontrol->A_C_a_eff_date}}" id="datepicker2" name="A_C_a_eff_date" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" placeholder="EFF(MM/DD/YYY)" data-date-format="mm/dd/yyyy" value="{{$formcontrol->A_C_a_exp_date}}" id="datepicker1" name="A_C_a_exp_date" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                                </div>
                          </div>
                            <hr>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <h3 class="box-title m-b-0">Coverage limits / Deductible </h3>
                                  <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$formcontrol->A_C_a_coverage_limits}}" id="A_C_a_coverage_limits" name="A_C_a_coverage_limits" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
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
                        14. Additional Coverage 2
                      </a>
                    </h4>
                    </div>
                    <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
                        <div class="panel-body">
                          <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$formcontrol->A_C_b_insurance_letter}}" id="A_C_b_insurance_letter" name="A_C_b_insurance_letter" required><span class="highlight"></span> <span class="bar"></span>
                                      <label for="A_C_b_insurance_letter">Insurance letter</label>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$formcontrol->A_C_b_policy_type}}" id="A_C_b_policy_type" name="A_C_b_policy_type" required><span class="highlight"></span> <span class="bar"></span>
                                      <label for="A_C_b_policy_type">Policy Type</label>
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="col-md-6">
                              <div class="form-group">
                                  <div class="radio-list">
                                      <div class="radio-inline p-0">
                                          <div class="radio radio-info">
                                            @if ($formcontrol->A_C_b_options_add_insurance_surrogation === 'Additonal insurance')
                                              <input type="checkbox" name="A_C_b_options_add_insurance" value="Additonal insurance" checked=""> Additonal insurance
                                            @else
                                              <input type="checkbox" name="A_C_b_options_add_insurance" value="Additonal insurance"> Additonal insurance
                                            @endif
                                          </div>
                                      </div>
                                      <div class="radio-inline">
                                          <div class="radio radio-info">
                                            @if ($formcontrol->A_C_b_options_add_insurance_surrogation === 'Surrogation')
                                              <input type="checkbox" name="A_C_b_options_surrogation" value="Surrogation" checked=""> Waiver of subrogation
                                            @else
                                              <input type="checkbox" name="A_C_b_options_surrogation" value="Surrogation"> Waiver of subrogation
                                            @endif
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$formcontrol->A_C_b_policy_number}}" id="A_C_b_policy_number" name="A_C_b_policy_number" required><span class="highlight"></span> <span class="bar"></span>
                                      <label for="A_C_b_policy_number">Enter policy number</label>
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" placeholder="EFF(MM/DD/YYY)" data-date-format="mm/dd/yyyy" value="{{$formcontrol->A_C_b_eff_date}}" id="datepicker2" name="A_C_b_eff_date" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" placeholder="EXP(MM/DD/YYY)" data-date-format="mm/dd/yyyy" value="{{$formcontrol->A_C_b_exp_date}}" id="datepicker2" name="A_C_b_exp_date" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                                </div>
                          </div>
                            <hr>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <h3 class="box-title m-b-0">Coverage limits / Deductible </h3>
                                  <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                  <div class="form-group f-style">
                                      <input type="text" class="form-control input-sm" value="{{$formcontrol->A_C_b_coverage_limits}}" id="A_C_b_coverage_limits" name="A_C_b_coverage_limits" placeholder=".00" required><span class="highlight"></span> <span class="bar"></span>
                                  </div>
                                </div>
                              </div>

                              </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading color-collap" role="tab">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" > 15. Description </a>
                      </h4>
                    </div>
                    <div role="tabpanel" aria-labelledby="headingDescription">
                        <div class="panel-body">
                            <div class="row"> <textarea rows="5" cols="100" name="description" class="summernote">{{$formcontrol->description}}</textarea></div>
                        </div>
                    </div>
                </div>

                <input class="btn btn-info" data-id="{{$user->id}}" id="sa-params{{$user->id}}" value="Save"/>
            </div>
        </div>
    </div>
</div>
