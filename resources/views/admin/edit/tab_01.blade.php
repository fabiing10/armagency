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

        <!--/row-->
        <h3 class="box-title m-t-20">2. Producer information</h3>
        <hr>
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
                    <option value="">State</option>
                    <option value="india">India</option>
                    <option value="sri_lanka">Sri Lanka</option>
                    <option value="usa">USA</option>
                  </select>
              </div>
          </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input name="zip_code" type="text" class="form-control" value="{{$formcontrol->P_I_dba_zip_code}}" placeholder="Zip code"> </div>
            </div>
        </div>
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
            <!--/span-->
            <div class="col-md-6">
              <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                        <input name="address_insured" type="text" class="form-control" value="{{$user->address}}" id="address_insured" placeholder="Address">
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
                          <input name="phone_insured" type="number" class="form-control" value="{{$user->phone}}" id="phone_insured" placeholder="Phone">
                      </div>
              </div>
              </div>
            <!--/span-->
            <div class="col-md-6">
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
