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

<style>
    HTML CSS JSResult Skip Results Iframe
EDIT ON
@import url(https://fonts.googleapis.com/css?family=Anaheim);

*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  box-sizing: border-box;
}
*:before,
*:after{
  box-sizing: border-box;
}

body{
  background-image: radial-gradient(white 30%, black 70%);
}
h1{
  display: table;
  margin: 5% auto 0;
  text-transform: uppercase;
  font-family: 'Anaheim', sans-serif;
  font-size: 4em;
  font-weight: 400;
  text-shadow: 0 1px white, 0 2px black;
}
.container{
  margin: 4% auto;
  width: 210px;
  height: 140px;
  position: relative;
  perspective: 1000px;
}
#carousel{
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  animation: rotation 20s infinite linear;
}
#carousel:hover{
  animation-play-state: paused;
}
#carousel figure{
  display: block;
  position: absolute;
  width: 186px;
  height: 116px;
  left: 10px;
  top: 10px;
  background: black;
  overflow: hidden;
  border: solid 5px black;
}
#carousel figure:nth-child(1){transform: rotateY(0deg) translateZ(288px);}
#carousel figure:nth-child(2) { transform: rotateY(40deg) translateZ(288px);}
#carousel figure:nth-child(3) { transform: rotateY(80deg) translateZ(288px);}
#carousel figure:nth-child(4) { transform: rotateY(120deg) translateZ(288px);}
#carousel figure:nth-child(5) { transform: rotateY(160deg) translateZ(288px);}
#carousel figure:nth-child(6) { transform: rotateY(200deg) translateZ(288px);}
#carousel figure:nth-child(7) { transform: rotateY(240deg) translateZ(288px);}
#carousel figure:nth-child(8) { transform: rotateY(280deg) translateZ(288px);}
#carousel figure:nth-child(9) { transform: rotateY(320deg) translateZ(288px);}

img{
  -webkit-filter: grayscale(1);
  cursor: pointer;
  transition: all .5s ease;
}
img:hover{
  -webkit-filter: grayscale(0);
  transform: scale(1.2,1.2);
}

@keyframes rotation{
  from{
    transform: rotateY(0deg);
  }
  to{
    transform: rotateY(360deg);
  }
}
.bg-images{
    background: radial-gradient(gray 30%, black 70%);
}
</style>

<h1>9Yards Events</h1>
  <div class="container">
    <div id="carousel">
        @foreach ($Projects as $sections)
        @if($sections->status==1)
           @foreach ($sections->projectImages as $image)
            @if($image->status == 1)
            <figure> <img src="{{ asset('img/projects/'.$image->Image) }}" alt="{{ $image->Image }}" width="100%"></figure>
            @else
            <img src="" alt="" style="display: none">
            @endif
            @endforeach
        @else
        <div style="display: none">
        </div>
        @endif
        @endforeach
    </div>
  </div>

<div class="bg-images">
  <div class="row">
    <!-- this section is to show all th project s from the database -->
     @foreach ($Projects as $sections)
     @if($sections->status==1)
     <div class="col-3">
        @foreach ($sections->projectImages as $image)
         @if($image->status == 1)
         <img src="{{ asset('img/projects/'.$image->Image) }}" alt="{{ $image->Image }}" width="100%">
         @else
         <img src="" alt="" style="display: none">
         @endif
         @endforeach
     </div>
     @else
     <div style="display: none">
     </div>
     @endif
     @endforeach
  </div>
</div>
