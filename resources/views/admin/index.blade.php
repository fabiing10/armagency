@extends('layouts.master')

@section('library_css')
<link href="{{URL::asset('assets/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('assets/plugins/bower_components/switchery/dist/switchery.min.css')}}" rel="stylesheet">

<style>
.tooltip-text {
    font-size: 12px;
    line-height: 24px;
    display: block;
    padding: 1.31em 1.21em 1.21em 0;
    color: #fff;
    text-align: center;
}
.tooltip-content {
    width: 140px;
    left: 290%;
    bottom: 40% !important;
}
  .tooltip-text {
    padding: 5px;
}
.tooltip-item {
    background: none;
    cursor: pointer;
    display: inline-block;
    font-weight: 500;
    padding: 0px;
}

</style>
@endsection

@section('body_content')
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
</div>
<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">

  @include('layouts.navigation')

  @include('layouts.menu_admin')
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
          <div class="row">
                <ol class="breadcrumb" style="float:left; margin-left:30px;">
                  <li class="active">Home</li>
                </ol>
          </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-sm-12">
            <div class="row" style="padding-bottom:10px;">
              <div class="col-sm-6">
                <h3 class="box-title m-b-0">Client Summary</h3>
              </div>
              @if (Session::has('sweet_alert.alert'))
                  <script>
                      swal({!! Session::get('sweet_alert.alert') !!});
                  </script>
              @endif
              </div>
                  <div class="white-box">


                      <div class="table-responsive">
                          <table id="myTable" class="table table-striped">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Exp date</th>

                                      <th>status</th>
                                      <th>Manage</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($users as $user)
                                  <tr>
                                      <td>{{$user->name}}</td>
                                      <td>{{$user->email}}</td>
                                      <td>{{\Carbon\Carbon::parse($user->exp_date)->format('m/d/Y')}}</td>
                                      <td>{{$user->status}}</td>
                                      <td>
                                        <span class="mytooltip tooltip-effect-4">
                                          <span class="tooltip-item">
                                              <button onclick="window.location.href='/admin/user-profile/{{$user->id}}'" type="button" class="btn btn-outline btn-circle btn-lg m-r-5"><i class="fa fa-user"></i></button>
                                          </span>
                                          <span class="tooltip-content clearfix">

                                            <span class="tooltip-text">Clients</span>
                                          </span>
                                        </span>

                                        <span class="mytooltip tooltip-effect-4">
                                          <span class="tooltip-item">
                                              <button onclick="window.location.href='/admin/edit-certificate/{{$user->id}}'" type="button" class="btn btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                          </span>
                                          <span class="tooltip-content clearfix">

                                            <span class="tooltip-text">Edit User</span>
                                          </span>
                                        </span>


                                        <span class="mytooltip tooltip-effect-4">
                                          <span class="tooltip-item">
                                              <button onclick="window.location.href='/admin/table/{{$user->id}}'" type="button" class="btn btn-outline btn-circle btn-lg m-r-5"><i class="fa fa-download"></i></button>
                                          </span>
                                          <span class="tooltip-content clearfix">

                                            <span class="tooltip-text">Download Certificate</span>
                                          </span>
                                        </span>

                                        <span class="mytooltip tooltip-effect-4">
                                          <span class="tooltip-item">
                                              <button onclick="window.location.href='/admin/send-via/{{$user->id}}'" type="button" class="btn btn-outline btn-circle btn-lg m-r-5"><i class="fa fa-share-square"></i></button>
                                          </span>
                                          <span class="tooltip-content clearfix">
                                            <span class="tooltip-text">Send Certificate</span>
                                          </span>
                                        </span>

                                        <span class="mytooltip tooltip-effect-4">
                                          <span class="tooltip-item">
                                              <button onclick="window.location.href='/admin/history/{{$user->id}}'" type="button" class="btn btn-outline btn-circle btn-lg m-r-5"><i class="fa fa-clock-o"></i></button>
                                          </span>
                                          <span class="tooltip-content clearfix">
                                            <span class="tooltip-text">History</span>
                                          </span>
                                        </span>

                                        <span class="mytooltip tooltip-effect-4">
                                          <span class="tooltip-item">
                                              <button onclick="window.location.href='/admin/clients/{{$user->id}}'" type="button" class="btn btn-outline btn-circle btn-lg m-r-5"><i class="fa fa-align-left"></i></button>
                                          </span>
                                          <span class="tooltip-content clearfix">
                                            <span class="tooltip-text">Client List</span>
                                          </span>
                                        </span>






                                        @if ($user->status == 'active')
                                        <button data-id="{{$user->f_id}}" type="submit" class="btn sa-params-cancel btn-gray"> Cancel </button>
                                        @else
                                        <button data-id="{{$user->f_id}}" type="submit" class="btn sa-params-activate btn-green"> Activate </button>
                                        @endif



                                        </tr>
                                      </td>
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- wallet, & manage users widgets -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
@endsection

@section('library_js')
<script src="../plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="{{URL::asset('assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

<script src="{{URL::asset('assets/plugins/bower_components/switchery/dist/switchery.min.js')}}"></script>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
  var SweetAlert = function() {};

  //examples
  SweetAlert.prototype.init = function() {

    //Parameter
    $('.sa-params-cancel').click(function(){
      console.log("Click")
      var id = $(this).attr("data-id");
      console.log(id)
        swal({
            title: "Cancel account",
            text: "Are you sure you want to cancel account?",

            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, I'm sure",
            cancelButtonText: "No, go back",
            closeOnConfirm: true,
            closeOnCancel: true
        }, function(isConfirm){
            if (isConfirm) {


                $.get( "/admin/active-inactive/status/"+id).done(function(data) {

                  location.reload(true);
                });

            } else {
            }
        });
    });
    $('.sa-params-activate').click(function(){
      console.log("Click")
      var id = $(this).attr("data-id");
      console.log(id)
        swal({
            title: "Activate account",
            text: "Are you sure you want to cancel account?",

            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, I'm sure",
            cancelButtonText: "No, go back",
            closeOnConfirm: true,
            closeOnCancel: true
        }, function(isConfirm){
            if (isConfirm) {


                $.get( "/admin/active-inactive/status/"+id).done(function(data) {

                  location.reload(true);
                });

            } else {
            }
        });
    });
  }
  $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
  $.SweetAlert.init()

  $('#myTable').DataTable();

});

(function() {
    $('#exampleBasic').wizard({
        onFinish: function() {
            swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
        }
    });
    $('#exampleBasic2').wizard({
        onFinish: function() {
            swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
        }
    });
    $('#exampleValidator').wizard({
        onInit: function() {
            $('#validation').formValidation({
                framework: 'bootstrap',
                fields: {
                    username: {
                        validators: {
                            notEmpty: {
                                message: 'The username is required'
                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'The username must be more than 6 and less than 30 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_\.]+$/,
                                message: 'The username can only consist of alphabetical, number, dot and underscore'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'The email address is required'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            },
                            different: {
                                field: 'username',
                                message: 'The password cannot be the same as username'
                            }
                        }
                    }
                }
            });
        },
        validator: function() {
            var fv = $('#validation').data('formValidation');
            var $this = $(this);
            // Validate the container
            fv.validateContainer($this);
            var isValidStep = fv.isValidContainer($this);
            if (isValidStep === false || isValidStep === null) {
                return false;
            }
            return true;
        },
        onFinish: function() {
            $('#validation').submit();
            swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
        }
    });
    $('#accordion').wizard({
        step: '[data-toggle="collapse"]',
        buttonsAppendTo: '.panel-collapse',
        templates: {
            buttons: function() {
                var options = this.options;
                return '<div class="panel-footer"><ul class="pager">' + '<li class="previous">' + '<a href="#' + this.id + '" data-wizard="back" role="button">' + options.buttonLabels.back + '</a>' + '</li>' + '<li class="next">' + '<a href="#' + this.id + '" data-wizard="next" role="button">' + options.buttonLabels.next + '</a>' + '<a href="#' + this.id + '" data-wizard="finish" role="button">' + options.buttonLabels.finish + '</a>' + '</li>' + '</ul></div>';
            }
        },
        onBeforeShow: function(step) {
            step.$pane.collapse('show');
        },
        onBeforeHide: function(step) {
            step.$pane.collapse('hide');
        },
        onFinish: function() {
            swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
        }
    });
})();
$(document).ready(function() {
    $('#myTable').DataTable();
    $(document).ready(function() {
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
    });
});
$('#example23').DataTable({
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
});
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
$('.js-switch').each(function() {
    new Switchery($(this)[0], $(this).data());
});
</script>
@endsection
