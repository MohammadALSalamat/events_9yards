@extends('layouts.back-layout.main_desgin')
@section('style')
    <link rel="stylesheet" href="{{ url('admin-style/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin-style/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin-style/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('admin-style/dist/css/adminlte.min.css') }}">
@stop
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="mb-2 row">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">View Reports</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable To View Reports</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>

                                            <th>Author</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Date Of send</th>
                                        </tr>
                                    </thead>
                                    <tbody style="line-height: 4 !important;">
                                        @foreach ($view_reports as $report)
                                            <tr style="text-align: center;">
                                                <td>{{ $report->Author }}</td>
                                                <td>{{ $report->name }}</td>
                                                <td>{!! $report->description!!}</td>
                                                <td>{{ $report->email }}</td>
                                                <td>{{ $report->phone }}</td>
                                                <td>
                                                    @if ($report->status == 1)
                                                        <span style="color: green">Published</span>
                                                        @else
                                                        <span style="color: red">Unpublished</span>
                                                        @endif </td>
                                                        <td> {{ $report->created_at->format('d M Y') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('script')
    <!-- DataTables  & Plugins -->
    <script src="{{ url('admin-style/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('admin-style/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('admin-style/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('admin-style/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ url('admin-style/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('admin-style/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('admin-style/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ url('admin-style/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ url('admin-style/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ url('admin-style/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('admin-style/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('admin-style/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

    </script>
@stop
