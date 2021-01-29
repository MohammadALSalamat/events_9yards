<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>9Yards Events</title>

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
    @include('layouts.front-layout.sidebar')
    @include('layouts.front-layout.right_panel')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div> <!-- end of div Wrapper -->
    @include('layouts.front-layout.footer')
   <!-- /.Footer-wrapper -->
   {{-- <footer class="main-footer">
       <div class="grid grid-cols-12 gap-2 sm:grid-cols-3 lg:grid-col-8">
        <div class=" d-block">
            <i class="mb-4  fa fa-user d-block"></i>
            <i class="mb-4  fa fa-user d-block"></i>
            <i class="mb-4  fa fa-user d-block"></i>
            <i class="mb-4  fa fa-user d-block"></i>

        </div>
        <div class=" border-right-1">
            <i class="mr-4  fa fa-user"></i>
            <i class="mr-4  fa fa-user"></i>
            <i class="mr-4  fa fa-user"></i>
            <i class="mr-4  fa fa-user"></i>
        </div>
        <div>
            logo
        </div>
       </div>
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0-pre
    </div>
    <strong>Copyright &copy;2020 <a href="#">Mohammad Al Salamat</a>.</strong> All rights
    reserved.
</footer> --}}
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
    @yield('script')

</body>

</html>
