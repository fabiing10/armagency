<!-- ============================================================== -->
  <!-- ============================================================== -->
<?php
$user = Auth::user();

?>
  <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav slimscrollsidebar">
          <div class="sidebar-head">
              <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
              <ul class="nav" id="side-menu">

                  <li class="user-pro"><a href="#" class="waves-effect"><img src="{{URL::asset('assets/images/circle_complete_profile_male@2x.png')}}" alt="user-img" class="img-circle"> <span class="hide-menu"> {{$user->name}}<span></span></span>
                        </a>
                    </li>

                  <li> <a href="/user/" style="padding-right:18px;" class="waves-effect px-25"><i class="fa fa-home"></i> <span class="hide-menu" style="padding-left: 10px;"> Home <span></span></span></a>
                  </li>
                  <li> <a href="/user/history" style="padding-right:18px;" class="waves-effect px-25"><i class="fa fa-clock-o"></i> <span class="hide-menu" style="padding-left: 10px;"> History <span></span></span></a>
                  </li>
                  <li> <a href="/user/client-list" style="padding-right:18px;" class="waves-effect px-25"><i class="fa fa-align-left"></i> <span class="hide-menu" style="padding-left: 10px;"> Client List <span></span></span></a>
                  </li>
                  <li> <a href="/user/support" style="padding-right:18px;" class="waves-effect px-25"><i class="fa fa-support"></i> <span class="hide-menu" style="padding-left: 10px;"> Support <span></span></span></a>
                  </li>
                  <li><a href="/user/account" style="padding-right:18px;" class="waves-effect px-25"><i class="fa fa-key"></i> <span class="hide-menu" style="padding-left: 10px;"> Account </span></a></li>
                  <li><a href="/logout" style="padding-right:18px; display: none;" class="waves-effect px-25 block"><i class="fa fa-key"></i> <span class="hide-menu" style="padding-left: 10px;"> Logout </span></a></li>

              </ul>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Left Sidebar -->
  <!-- ============================================================== -->
