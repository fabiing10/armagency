<div class="wizard-pane" role="tabpanel">
    <div class="form-group p-50">
    <div class="form-body">
        <h3 class="box-title">4. General liability</h3>
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
                        <input name="g_l_eff_date" type="text" value="{{$gleffdate}}" class="form-control" id="datepicker2" placeholder="EFF(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="example">
                    <div class="input-group">
                        <input name="g_l_exp_date" type="text" value="{{$glexpdate}}" class="form-control" id="datepicker1" placeholder="EXP(MM/DD/YYY)"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
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
