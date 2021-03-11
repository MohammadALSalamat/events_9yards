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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Imbue:wght@500&family=Pinyon+Script&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="">
        {{-- <!-- wpf loader Two -->
        <div id="wpf-loader-two">
            <div class="wpf-loader-two-inner">
                <span>Loading</span>
            </div>
        </div> --}}

    @include('layouts.front-layout.top-navbar') <!-- menu code  -->
    @include('layouts.front-layout.homePage') <!-- homepage code  -->
    @include('layouts.front-layout.leadingpage')<!-- leanding code  -->
    @include('layouts.front-layout.projects')<!-- Projects code  -->
    @include('layouts.front-layout.partners')<!-- logos of partners code  -->



        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div> <!-- end of div Wrapper -->



    @include('layouts.front-layout.footer')<!-- Footer code  -->


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

    <script src="{{ url('js/main.js') }}"></script>
    <!-- Important link to work Toastr-->
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    {!! Toastr::message() !!}
    @yield('script')
</body>

</html>
