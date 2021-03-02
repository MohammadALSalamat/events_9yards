@extends('layouts.back-layout.main_desgin')
@section('style')
    <link rel="stylesheet" href="{{ url('admin-style/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin-style/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin-style/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('admin-style/dist/css/adminlte.min.css') }}">
    <style>
        .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 100px;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
    </style>
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
                            <li class="breadcrumb-item active">DataTables</li>
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
                                <h3 class="card-title">DataTable To View Titles</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr style="text-align: center;">
                                            <th>#ID</th>
                                            <th>Top Title</th>
                                            <th>Pargraph</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody style="line-height: 4 !important;">
                                        @foreach ($leading_page_info as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->top_title }}</td>
                                                <td style="width:30% !important">{{ $user->paragraph }}</td>
                                                <td>
                                                    @if ($user->status == 1)
                                                        <span style="color:green"> Active</span>
                                                    @else
                                                        <span style="color:red"> Not Active</span>
                                                    @endif
                                                </td>
                                                <td style="width: 20% !important">
                                                    <a><button id="myBtn"
                                                            style="width: 100% !important" type="button"
                                                            class="btn btn-outline-primary btn-md"><i class="fa fa-pencil"
                                                                aria-hidden="true"></i>
                                                            Modify</button></a>
                                                </td>
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
                    {{-- <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable To View SlideShows</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example3" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Avatar</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody style="line-height: 4 !important;">
                                        @foreach ($slideshow_section as $user)
                                            <tr style="text-align: center;">
                                                <td>{{ $user->id }}</td>
                                                <td style="width: 50px; !important"> <img class="profile-user-img img-fluid"
                                                        src="{{ asset('admin-style/sliders/header_slideshow/' . $user->slideshow) }}"
                                                        alt="slider" width="100px" height="100px">
                                                </td>
                                                <td>
                                                    @if ($user->status == 1)
                                                        <span style="color:green"> Active</span>
                                                    @else
                                                        <span style="color:red"> Not Active</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('EditSlideShow', $user->id) }}"><button type="button"
                                                            style="width: 45%" class="btn btn-outline-primary btn-md"><i
                                                                class="fa fa-pencil" aria-hidden="true"></i>
                                                            Modify</button></a>
                                                    <a href="javascript:"><button rel="{{ $user->id }}"
                                                            rel1="slideshow" type="button" style="width: 45%"
                                                            class="btn btn-outline-danger btn-md deleteRecord">
                                                            Delete</button></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div> --}}
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        <!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
       <!-- Content Wrapper. Contains page content -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form To <small> Edit Header Titles</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" action="{{ route('Edit_leading_page',$titles_info->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Top Title</label>
                                        <input type="text" name="top_title" class="form-control" id="exampleInputEmail1"
                                            placeholder="Eg: Mohammad , Alis ,Alex ,etc...." value="{{ $titles_info->title }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">paragraph</label>
                                        <textarea name="description" id=""class="form-control" id="exampleInputEmail3" cols="30" rows="10" required>{{ $titles_info->paragraph}}</textarea>

                                    </div>
                                    <div class="form-group">
                                        <div
                                            class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch3"
                                                name="status" @if ($titles_info->Status == 1)
                                                checked
                                                @endif >
                                            <label class="custom-control-label" for="customSwitch3">Once You Toggle this
                                                button then you agree to Active the leading Title </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Edit Titles</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

</div>
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
        /// admin side modal pop up

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
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
        $(function() {
            $("#example3").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
            $('#example4').DataTable({
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
