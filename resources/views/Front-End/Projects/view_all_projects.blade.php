@extends('layouts.front-layout.main_desgin_project')
@section('content')

<div class="container mt-20 mb-20">
    <div class="row">
        @foreach ($Products as $Product)
        <div class="col-sm-12 col-md-6 col-lg-3 gap-4 mb-10">
            <div class="product-card-container">
                <div class="product-card">
                    <div class="info-icon-container">
                        <div class="info-icon">
                            <div class="bar-1"></div>
                            <div class="bar-2"></div>
                            <div class="bar-3"></div>
                        </div>
                        <!-- <p>Customize</p> -->
                    </div>
                    <div class="header text-center">
                        <h1>{{ $Product->name }}</h1>
                    <a href="{{ $Product->id }}">
                        <button class="glow-on-hover">View Product <i class="fa fa-eye"></i></button>
                    </a>
                    </div>
                     <!-- end of header -->
                    <div class="product-img pt-5">
                        <img src="{{ asset('img/products/'.$Product->image) }}" alt="{{ $Product->image }}" width="100px" height="30px" />
                    </div>


                </div> <!-- end of product-card -->
            </div><!-- end of product-card-container -->
        </div>
        @endforeach
    </div>
</div>


{{-- <p class="coords"></p>
<p class="coords-2"></p> --}}
<script type="text/babel">
const card = $('.product-card'),
coord = $('.coords'),
coord2 = $('.coords-2');

$(document).on('mousemove', function (e) {
  let ax = -($(window).innerWidth() / 2 - e.pageX) / 20,
  ay = ($(window).innerHeight() / 2 - e.pageY) / 20;
  card.css({
    transform: `rotateY(${ax}deg) rotateX(${ay}deg)` });

  // coord.text(`ax: ${ax}, ay: ${ay}`)
  coord.text(`half x: ${-($(window).innerWidth() / 2 - e.pageX)}`);
  coord2.text(`pageX: ${e.pageX}, pageY: ${e.pageY}`);
});
</script>
@endsection
