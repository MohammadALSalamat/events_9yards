@extends('layouts.back-layout.main_desgin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="mb-2 row">
                    <div class="col-sm-6">
                        <h1> Edit Slide Show</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active"> Edit Slide Show</li>
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
                                <h3 class="card-title">Form To <small> Edit Slide Show</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" action="{{ route('upadte_EditSlideShow',$Slide_show->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <h3 class="mb-5">Current Image</h3>
                                    <img src="{{ asset('admin-style/sliders/header_slideshow/'.$Slide_show->slideshow)}}" alt="Current_image" srcset="" width="300px" height="200px" class="mb-5">
                                    <div class="form-group">
                                        <label for="exampleInputavater">Avater</label>
                                        <input type="file" name="avatar" class="form-control" id="exampleInputavatar">
                                        <input type="hidden" name="current_image" class="form-control"
                                            value="{{$Slide_show->slideshow}}">

                                    </div>
                                        <div
                                            class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch3"
                                                name="status" @if ($Slide_show->status == 1)
                                                checked
                                                @endif >
                                            <label class="custom-control-label" for="customSwitch3">Once You Toggle this
                                                button then you agree to Active the Titles</label>
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
    @endsection @section('script')
    <!-- jquery-validation -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js">
    </script>
    <script src="{{ url('admin-style/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ url('admin-style/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script src="{{ url('admin-style/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ url('admin-style/plugins/summernote/summernote-bs4.min.js') }}"></script>
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
                        required: "Please Select one of the postions",
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

    </script>
@stop
