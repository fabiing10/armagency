<!-- ============================================================== -->
  <!-- ============================================================== -->
  <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav slimscrollsidebar">
          <div class="sidebar-head">
              <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu" style="padding-left: 20px;">Navigation</span></h3> </div>
              <ul class="nav" id="side-menu">
                  <li>
                    <a href="/admin/" class="waves-effect px-25"><i class="fa fa-list"></i> <span class="hide-menu" style="padding-left: 20px;"> Summary <span></span></span></a>
                  </li>
                  <li><a href="/admin/create-certificate" class="waves-effect px-25"><i class="fa fa-plus-circle"></i> <span class="hide-menu" style="padding-left: 20px;"> New Client </span></a>
                  </li>
                  <li> <a href="/admin/alerts/" class="waves-effect px-25"><i class="fa fa-bell"></i> <span class="hide-menu" style="padding-left: 20px;"> Alerts <span></span></span></a>
                  </li>
                  <li> <a href="/admin/active-inactive" class="waves-effect px-25"><i class="fa fa-power-off"></i><span class="hide-menu" style="padding-left: 25px;">Status <span></span></span></a>
                  </li>

                  <?php

                  $userType = Auth::user()->userType;
                    if($userType == "admin" ){
                      ?>
                      <li><a href="/admin/admin-settings" class="waves-effect px-25"><i class="fa fa-key"></i> <span class="hide-menu" style="padding-left: 20px;"> Admin settings </span></a>

                      <?php
                    }

                   ?>
                                    </li>
                  <li><a href="/logout" style="padding-right:18px; display: none;" class="waves-effect px-25 block"><i class="fa fa-key"></i> <span class="hide-menu" style="padding-left: 10px;"> Logout </span></a></li>
              </ul>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Left Sidebar -->
  <!-- ============================================================== -->
