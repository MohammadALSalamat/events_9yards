@extends('layouts.back-layout.main_desgin')
@section('content')
<div style="margin-left:300px ">
<h3 class="jumbotron"><i class="glyphicon glyphicon-upload"></i> Laravel Multiple File Upload</h3>
<form method="post" action="{{route('add_projects')}}" enctype="multipart/form-data">
    @csrf
        <div class="input-group control-group increment" >
          <input type="file" name="filename[]" class="form-control">
          <div class="input-group-btn">
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="filename[]" class="form-control">
            <div class="input-group-btn">
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-info" style="margin-top:12px"><i class="glyphicon glyphicon-check"></i> Submit</button>
  </form>
</div>

@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);
      });
      $("body").on("click",".btn-danger",function(){
          $(this).parents(".control-group").remove();
      });
    });
</script>
@stop
