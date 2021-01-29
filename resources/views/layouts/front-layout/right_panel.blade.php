 {{-- <!-- Content Wrapper. Contains page content -->
 <div class="mt-5 content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="mb-2 row">
                 <div class="col-sm-6">
                     <h1>Add Text</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Add Text</li>
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
                             <h3 class="card-title">Report To <small> Database</small></h3>
                         </div>
                         <!-- /.card-header -->
                         <!-- form start -->
                         <form id="quickForm" action="{{ route('Insert_Info') }}" method="post"
                             enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name ="Current_UserId" value="{{ $CurrentUser->id }}" />
                             <div class="card-body">
                                 <div class="form-group">
                                     <label for="exampleInputEmail1">Name</label>
                                     <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                         placeholder="Eg: Mohammad , Alis ,Alex ,etc....">
                                 </div>
                                 @error('username')
                                 <span class="text-danger"> {{$message}}</span>
                                 @enderror
                                 <!-- phone mask -->
                                 <div class="form-group">
                                     <label>phone Number:</label>
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                         </div>
                                         <input type="text" class="form-control" name="phone"
                                             data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']"
                                             data-mask>
                                     </div>
                                     <!-- /.input group -->
                                 </div>
                                 @error('phone')
                                 <span class="text-danger"> {{$message}}</span>
                                 @enderror
                                 <div class="form-group">
                                     <label for="exampleInputemail">Email</label>
                                     <input type="email" name="email" class="form-control" id="exampleInputemail"
                                         placeholder="Eg: example@gmail.com">
                                 </div>
                                 @error('email')
                                 <span class="text-danger"> {{$message}}</span>
                                 @enderror
                                 <div class="form-group">
                                    <label for="exampleInputtextarea">Description</label>
                                    <textarea id="summer" name="description"></textarea>
                                </div>
                                 <div class="form-group">
                                     <div
                                         class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                         <input type="checkbox" class="custom-control-input" id="customSwitch3"
                                             name="status" value="1">
                                         <label class="custom-control-label" for="customSwitch3">Once You Toggle this
                                             button then you agree to Activate the Informations</label>
                                     </div>
                                 </div>
                             </div>
                             <!-- /.card-body -->
                             <div class="card-footer">
                                 <button type="submit" class="btn btn-primary">Submit Info</button>
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
 @section('script')
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
 </script>
 @stop --}}
