@extends('layouts.front-layout.main_desgin_project')
@section('content')

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
.container1{
  margin: 4% auto;
  width: 210px;
  height: 140px;
  position: relative;
  perspective: 1000px;
}

@media (max-width:500px) {
  h1{
  margin: 8%;
  font-size: 3em;

}
  .container1{
  margin: 8% ;
  width: 210px;
  height: 140px;
  position: relative;
  perspective: 1000px;
}

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
  z-index: 9;
}
img:hover{
  -webkit-filter: grayscale(0);
  transform: scale(1.2,1.2);
  z-index: 10;
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
/* todo: animate letters */
.letter {
  display: inline-block;
  opacity: 0;
  -webkit-animation: fadeIn 2s, moveDown 2s;
          animation: fadeIn 2s, moveDown 2s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  -webkit-animation-direction: alternate;
          animation-direction: alternate;
  -webkit-animation-timing-function: cubic-bezier(0.445, 0.05, 0.55, 0.95);
          animation-timing-function: cubic-bezier(0.445, 0.05, 0.55, 0.95);
}

.letter:nth-child(1) {
  -webkit-animation-delay: 0;
          animation-delay: 0;
}

.letter:nth-child(2) {
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s;
}

.letter:nth-child(3) {
  -webkit-animation-delay: 0.6s;
          animation-delay: 0.6s;
}

.letter:nth-child(4) {
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
}

.letter:nth-child(5) {
  -webkit-animation-delay: 1.2s;
          animation-delay: 1.2s;
}

.letter:nth-child(6) {
  -webkit-animation-delay: 1.4s;
          animation-delay: 1.4s;
}


@-webkit-keyframes fadeIn {
  100% {
    opacity: 1;
  }
}

@keyframes fadeIn {
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes moveDown {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(0);
  }
}
@keyframes moveDown {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(0);
  }
}


/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio .portfolio-item {
  margin-bottom: 30px;
}

.portfolio .portfolio-item .portfolio-img {
  overflow: hidden;
}

.portfolio .portfolio-item .portfolio-img img {
  transition: all 0.8s ease-in-out;
}

.portfolio .portfolio-item .portfolio-info {
  opacity: 0;
  position: absolute;
  left: 15px;
  bottom: 0;
  z-index: 3;
  right: 15px;
  transition: all ease-in-out 0.3s;
  background: rgba(0, 0, 0, 0.5);
  padding: 10px 15px;
}

.portfolio .portfolio-item .portfolio-info h4 {
  font-size: 18px;
  color: #fff;
  font-weight: 600;
  color: #fff;
  margin-bottom: 0px;
}

.portfolio .portfolio-item .portfolio-info p {
  color: #fedac0;
  font-size: 14px;
  margin-bottom: 0;
}

.portfolio .portfolio-item .portfolio-info .preview-link, .portfolio .portfolio-item .portfolio-info .details-link {
  position: absolute;
  right: 40px;
  font-size: 24px;
  top: calc(50% - 18px);
  color: #fff;
  transition: 0.3s;
}

.portfolio .portfolio-item .portfolio-info .preview-link:hover, .portfolio .portfolio-item .portfolio-info .details-link:hover {
  color: #fd9f5b;
}

.portfolio .portfolio-item .portfolio-info .details-link {
  right: 10px;
}

.portfolio .portfolio-item .portfolio-links {
  opacity: 0;
  left: 0;
  right: 0;
  text-align: center;
  z-index: 3;
  position: absolute;
  transition: all ease-in-out 0.3s;
}

.portfolio .portfolio-item .portfolio-links a {
  color: #fff;
  margin: 0 2px;
  font-size: 28px;
  display: inline-block;
  transition: 0.3s;
}

.portfolio .portfolio-item .portfolio-links a:hover {
  color: #fd9f5b;
}

.portfolio .portfolio-item:hover .portfolio-img img {
  transform: scale(1.2);
}

.portfolio .portfolio-item:hover .portfolio-info {
  opacity: 1;
}



</style>

<h1>
    <span class="letter">9</span>
    <span class="letter">Y</span>
    <span class="letter">A</span>
    <span class="letter">R</span>
    <span class="letter">D</span>
    <span class="letter">S</span>
</h1>

<h1> 9Yards Events </h1>
  <div class="container1">
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

  {{-- <section id="portfolio" class="portfolio">
  @foreach ($Projects as $sections)
  @if($sections->status==1)
  @foreach ($sections->projectImages as $image)
  <div class="col-3 portfolio-item filter-app">
      @if($image->status == 1)
      <div class="portfolio-img"><img src="{{ asset('img/projects/'.$image->Image) }}" class="img-fluid" alt="{{ $image->Image }}" ></div>
      <div class="portfolio-info">
        <h4>App 1</h4>
        <p>App</p>
        <a href="{{ asset('img/projects/'.$image->Image) }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
      </div>
      @else
      <img src="" alt="" style="display: none">
      @endif
    </div>
      @endforeach
  @else
  <div style="display: none">
  </div>
  @endif
  @endforeach
  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
    <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
    <div class="portfolio-info">
      <h4>App 1</h4>
      <p>App</p>
      <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
      <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>
  </section> --}}
  <!-- Second option -->

<div class="bg-images">
  <div class="row">
    <!-- this section is to show all th project s from the database -->
     @foreach ($Projects as $sections)
     @if($sections->status==1)
     <div class=" col-sm-12 col-md-6 col-lg-3">
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

@endsection

<script>
  // Portfolio details carousel
  $(".portfolio-details-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  }
  $(window).on('load', function() {
    aos_init();
  });

})(jQuery);
</script>
