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

        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>
                    <div class="radio radio-success">
                      <input type="checkbox" name="g_l_commercial" value="true"> Commercial general liability <br>
                      <input type="checkbox" name="g_l_claims_made" value="true">  Claims made <br>
                      <input type="checkbox" name="g_l_occur" value="true">  Occur <br>
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
                      <input type="checkbox" name="g_l_policy" value="true"> Policy<br>
                      <input type="checkbox" name="g_l_project" value="true"> Project<br>
                      <input type="checkbox" name="g_l_loc" value="true"> Loc<br>
                      <input type="checkbox" name="g_l_other" value="true"> Other
                      <input name="g_l_other_input" type="text" class="form-control" placeholder="NAME">
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
                      <input type="checkbox" name="g_l_options_addl" value="true"> ADDL INSR
                    </div>
                </label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>
                    <div class="radio radio-success">
                      <input type="checkbox" name="g_l_options_subr" value="true">  SUBR WVD

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
                  <input name="g_l_policy_number" type="text" placeholder="Enter policy number" class="form-control">
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
                <h3 class="box-subtitle m-b-0">Each ocurrence </h3>
                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input name="g_l_each_ocurrence" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <h3 class="box-subtitle m-b-0">Damages to rented permises</h3>
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
                <h3 class="box-subtitle m-b-0">Medical expenses (any one person)</h3>
                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input name="g_l_medical_expenses" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <h3 class="box-subtitle m-b-0">Personal & adv injury </h3>
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
                <h3 class="box-subtitle m-b-0">General aggregate </h3>
                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input name="g_l_general_aggregate" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <h3 class="box-subtitle m-b-0">Product - comp/op agg </h3>
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
                <h3 class="box-subtitle m-b-0">Other </h3>
                <input name="g_l_other_input2" type="text" class="form-control" placeholder="NAME">
                <div class="input-group m-t-10"> <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input name="g_l_other2" type="text" id="example-input3-group1" class="form-control" placeholder=".."> <span class="input-group-addon">.00</span>
                </div>
              </div>
              </div>
        </div>
        <hr>

    </div>
    </div>
</div>
