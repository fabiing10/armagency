@extends('layouts.master_user')

@section('library_css')
<link href="{{URL::asset('assets/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('assets/css/responsive-user.css')}}" rel="stylesheet">
@endsection

@section('style')

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
  <div id="page-wrapper">
      <div class="container-fluid">
          <div class="row bg-title">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">HOME</h4> </div>
                  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                      <li><a href="/user">Home</a></li>
                      <li class="active">Client list</li>
                    </ol>
                  </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
            @if (Session::has('sweet_alert.alert'))
                <script>
                    swal({!! Session::get('sweet_alert.alert') !!});
                </script>
            @endif
              <div class="col-sm-12">
                            <div class="col-sm-12">
                                <div class="white-box disable">
                                  <div class="row">
                                  <div class="col-sm-6">
                                    <h3 class="box-title m-b-0">CLIENT LIST</h3>
                                    <p>Select a client from your list</p>
                                  </div>
                                  </div>
                                    <div class="table-responsive">
                                        <table id="myTable" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>address</th>
                                                    <th>phone</th>
                                                    <th>fax</th>
                                                    <th>email</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ($clients as $client)
                                                <tr>
                                                    <td>{{$client->certificate_holder_name}}</td>
                                                    <td>{{$client->address}}</td>
                                                    <td>{{$client->phone_number}}</td>
                                                    <td>{{$client->fax}}</td>
                                                    <td>{{$client->email}}</td>
                                                  
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div class="form-group">
                                      <div class="col-lg-1" style="padding-left:0px;">
                                        <a href="send-via.html" class="btn btn-default pull-left hidden-xs hidden-sm waves-effect waves-light">Back</a>
                                      </div>
                                    </div>-->
                                </div>

                            </div>
              </div>
          </div>
          <div class="row marginhistory block" style="display:none;">
            <p class="block" style="display:none; margin-left:20px;">This month
            @foreach ($clients as $client)
            <div class="history-box" style="padding: 8px;">
              <img src="{{URL::asset('assets/plugins/images/users/history.png')}}" style="width:20%;float:left;"></img>
              <div class="panel_description_clients">
                <h3 style="display: -webkit-inline-box; vertical-align: top;padding: 0px;margin: 0px;">{{$client->certificate_holder_name}}</h3>
                <p style="float:right;width: 100%;padding: 0px;">{{$client->email}}</p>
              </div>
                <div class="panel_mobile_clients">
                  <a href="/user/history/delete/" class="btn btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></a>
                  <a href="/user/certificate/" class="btn btn-outline btn-circle btn-lg m-r-5"><i class="fa fa-share-square"></i></a>
                </div>

            </div>
            @endforeach
          </div>
          <!-- ============================================================== -->
          <!-- wallet, & manage users widgets -->
          <!-- ============================================================== -->
      </div>
  </div>
@endsection

@section('library_js')
<script src="{{URL::asset('assets/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
@endsection

@section('script')
<script>
$(document).ready(function() {

$('.titlenavigation').html('Clients');
  var SweetAlert = function() {};

  //examples
  SweetAlert.prototype.init = function() {
    //Parameter
    $('.delete-user').click(function(){
        value =  $(this).attr("data-id");
        console.log(value);
        swal({
            title: "Delete Client",
            text: "Are You Sure You Want To Delete?",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, I'm sure",
            cancelButtonText: "No, go back",
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
            closeOnCancel: true
        }, function(isConfirm){
            if (isConfirm) {
                swal("Deleted!", "The user has been removed.", "success");
                setTimeout(function(){
                  window.location.href='/user/client-list/delete/'+value;
                }, 1500);

            } else {
                window.location.href='/user/client-list/';
            }
        });
    });
  }
  $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
  $.SweetAlert.init();


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
</script>
@endsection
