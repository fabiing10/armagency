<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>@yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--alerts CSS -->
    <link href="{{URL::asset('assets/plugins/bower_components/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">
    <!-- Menu CSS -->
    <link href="{{URL::asset('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{URL::asset('assets/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{URL::asset('assets/plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{URL::asset('assets/plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="{{URL::asset('assets/plugins/bower_components/calendar/dist/fullcalendar.css')}}" rel="stylesheet" />
    <!-- animation CSS -->
    <link href="{{URL::asset('assets/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{URL::asset('assets/css/colors/megna-dark.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
@yield('library_css')
@yield('style')

</head>
<body class="fix-header">
@yield('body_content')

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{URL::asset('assets/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{URL::asset('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{URL::asset('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<!--slimscroll JavaScript -->
<script src="{{URL::asset('assets/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{URL::asset('assets/js/waves.js')}}"></script>
<!--Counter js -->
<script src="{{URL::asset('assets/plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js')}}"></script>
<!-- FormValidation -->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css')}}">
<!-- FormValidation plugin and the class supports validating Bootstrap form -->
<script src="{{URL::asset('assets/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{URL::asset('assets/js/custom.min.js')}}"></script>
<!-- Sweet-Alert  -->
<script src="{{URL::asset('assets/plugins/bower_components/sweetalert/sweetalert.min.js')}}"></script>
<!--Style Switcher -->
<script src="{{URL::asset('assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>

@yield('library_js')
@yield('script')
</body>

</html>
