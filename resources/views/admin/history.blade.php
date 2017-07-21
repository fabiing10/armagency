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
                  <h4 class="page-title">HISTORY</h4> </div>
              <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                  <li><a href="/user/">Home</a></li>
                  <li class="active">History</li>
                </ol>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="white-box disable">
          <div class="row">
            <div class="col-sm-6">
              <h2 class="box-title m-b-0 disable">RECENTLY SEND</h2>
              <p class="text-muted m-b-30 font-13 disable">Certificates sent this month</p>
            </div>
            </div>
                      <div class="table-responsive">
                          <table id="myTable" class="table table-striped">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>State</th>
                                      <th>City</th>
                                      <th>Address</th>

                                      <th>SENT DATE</th>
                                      <th style="display:none;">Data order</th>

                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($histories as $h)
                                  <tr>

                                      <td>{{$h->certificate_holder_name}}</td>
                                      <td>{{$h->state}}</td>
                                      <td>{{$h->city}}</td>
                                      <td>{{$h->address}}</td>
                                      <td>
                                        {{\Carbon\Carbon::parse($h->sent_date)->format('m/d/Y')}}
                                      </td>
                                      <td style="display:none;">{{$h->created_at}}</td>
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
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
  $('.titlenavigation').html('History');
    $('#myTable').DataTable({
      "order": [
          [5, 'desc']
      ]
    });
    $(document).ready(function() {


        var table = $('#myTableo').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [5, 'desc']
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
