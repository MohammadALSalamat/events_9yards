<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>9Yards Martink & Media  | Home</title>

    <!-- Font awesome -->
    <link href="{{ url('css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link id="switcher" href="{{ url('css/theme-color/default-theme.css') }}" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href="{{ url('css/tailwind.css') }}" rel="stylesheet">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->

<link rel="stylesheet" href="{{ url('admin-style/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet"
href="{{ url('admin-style/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
<!-- iCheck -->
<link rel="stylesheet" href="{{ url('admin-style/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{ url('admin-style/plugins/jqvmap/jqvmap.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ url('admin-style/dist/css/adminlte.min.css') }}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ url('admin-style/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ url('admin-style/plugins/daterangepicker/daterangepicker.css') }}">
<!-- summernote -->
<link rel="stylesheet" href="{{ url('admin-style/plugins/summernote/summernote-bs4.min.css') }}">
<!-- dropzonejs -->
<link rel="stylesheet" href="{{ url('admin-style/plugins/dropzone/min/dropzone.min.css') }}">
<!-- Toastr -->
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

<!-- here to add extra links from other pages -->
<!-- here to add Style for editor -->
<!-- Summernote -->
<script src="{{ url('admin-style/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- buttons style-->
<link rel="stylesheet" href="{{ url('css/backend_css/theme.css') }}">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper front-css">
        {{-- <!-- wpf loader Two -->
        <div id="wpf-loader-two">
            <div class="wpf-loader-two-inner">
                <span>Loading</span>
            </div>
        </div> --}}

        @include('layouts.front-layout.top-navbar')
        <!-- Content Wrapper. Contains page content -->
 <div class="mt-5 content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1>Send Email</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('main_page') }}">Home</a></li>
                        <li class="breadcrumb-item active">Send Email</li>
                    </ol>
                </div>
            </div>
        </div>
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
                            <h3 class="card-title">Send <small> Enail</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" action="{{ route('send_email') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                @error('emailFrom')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputemail">Email From : </label>
                                    <input type="email" name="emailFrom" class="form-control" id="exampleInputemail"
                                        placeholder="Eg: example@gmail.com">
                                </div>
                                @error('emailto')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputemail">Email To : </label>
                                    <select name="add_fields_placeholder" id="add_fields_placeholder">
                                        <option value="All">All Users</option>
                                        <option value="one">One User</option>
                                    </select>
                                    <div id="add_fields_placeholderValue">
                                        <input type="email" name="emailto" class="form-control" id="exampleInputemailCC"
                                        placeholder="Eg: example@gmail.com">                                     </div>
                                </div>
                                @error('emailcc')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputemail">CC : </label>
                                    <input type="email" name="emailcc" class="form-control" id="exampleInputemailCC"
                                        placeholder="Eg: example@gmail.com">
                                </div>
                                @error('subject')
                                <span class="text-danger"> {{$message}}</span>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Subject</label>
                                    <input type="text" name="subject" class="form-control" id="exampleInputsubject"
                                        placeholder="Eg: title of the email">
                                </div>
                                @enderror
                                <div class="form-group">
                                   <label for="exampleInputtextarea">Message</label>
                                   <textarea id="summer" name="message"></textarea>
                               </div>
                               <div class="form-group">
                                <label for="exampleInputEmail1">Attachment</label>
                                <input type="file" name="attachment" class="form-control" id="exampleInputEmail1"
                                        >
                            </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Send Email</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
</div> <!-- end of div Wrapper -->

<!-- /.Footer-wrapper -->
<footer class="main-footer">
<div class="float-right d-none d-sm-block">
    <b>Version</b> 3.1.0-pre
</div>
<strong>Copyright &copy;2020 <a href="#">Mohammad Al Salamat</a>.</strong> All rights
reserved.
</footer>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ url('js/bootstrap.js') }}"></script>
<!-- animate jQuery plugin -->
<script src="{{ url('js/lib/anime.es.js') }}"></script>
<script src="{{ url('js/lib/anime.js') }}"></script>
<script src="{{ url('js/lib/anime.min.js') }}"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<!-- To Slider JS -->
<script src="{{ url('js/sequence.js') }}"></script>
<script src="{{ url('js/sequence-theme.modern-slide-in.js') }}"></script>
<!-- Product view slider -->
<script type="text/javascript" src="{{ url('js/jquery.simpleGallery.js') }}"></script>
<script type="text/javascript" src="{{ url('js/jquery.simpleLens.js') }}"></script>
<!-- slick slider -->
<script type="text/javascript" src="{{ url('js/slick.js') }}"></script>
<!-- Price picker slider -->
<!-- Custom js -->
<script src="{{ url('js/custom.js') }}"></script>
<!-- Important link to work Toastr-->
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

{!! Toastr::message() !!}

<script src="{{ url('admin-style/plugins/summernote/summernote-bs4.min.js') }}"></script>
<link rel="stylesheet" href="{{ url('admin-style/plugins/summernote/summernote-bs4.min.css') }}">
<script src="{{ url ('admin-style/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ url ('admin-style/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<script src="{{ url ('admin-style/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset ('admin-style/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#summer').summernote();
    });
    //Number inmation Euro
    $('[data-mask]').inputmask()
    // prifile validate
    $(function() {
        $('#quickForm').validate({
            rules: {
                username: {
                    required: true,
                    minlength: 5,
                    maxlength: 25
                },
                phone: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 6
                },
                postion: {
                    required: true,
                },
            },
            messages: {
                email: {
                    required: "Please enter a email address",
                    email: "Please enter a vaild email address"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                postion: {
                    required: "Please Select one of the postions ",
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
$(document).ready(function()
{
 $("#add_fields_placeholder").change(function()
 {
  if($(this).val() == "one")
  {
   $("#add_fields_placeholderValue").show();
  }
  else
  {
   $("#add_fields_placeholderValue").hide();
  }
 });
 $("#add_fields_placeholderValue").hide();
});
</script>

</body>

</html>
