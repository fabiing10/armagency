<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="pl-30">
            <!-- Logo -->
            <a class="logo" href="/login">
              <b>
                <img src="{{URL::asset('assets/plugins/images/arm_logo2.png')}}" alt="home" class="light-logo" />
             </b>
            </a>

            <ul class="nav navbar-top-links navbar-left">
                   <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>

            </ul>

        </div>
        <!-- /Logo -->
        <h4 class="titlenavigation" style="text-align:center; width: 80%; display:none;"> Home </h4>
        <ul class="nav navbar-top-links navbar-right pull-right pr-50">

          <li class="dropdown">
              <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b class="hidden-xs"><i class="fa fa-language"></i>  English </b><span class="caret"></span> </a>
              <ul class="dropdown-menu dropdown-user ">
                  <li><a href="#" class="text-right"> Spanish</a></li>
                  <li><a href="#" class="text-right"> English</a></li>
              </ul>
              <!-- /.dropdown-language -->
          </li>
            <li >
                <a href="/logout"><b class="hidden-xs"><i class="fa fa-sign-out"></i>Logout</b> </a>
                <!-- /.dropdown-login -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
<!-- End Top Navigation -->
