@extends('layouts.front-layout.main_desgin_project')
@section('content')

<div class="container mt-20 mb-20">
    <ul class="mb-5">
        <a href="#"><li class="shadow-md d-inline border-2 py-3 px-10 text-bold text-black cursor-pointer hover:bg-black hover:bold hover:text-white ">All</li></a>
        @foreach ($Products as $Product)
        @if(!empty($Product->Category->name))
        <a href="{{ $Product->cat_id }}"><li class=" shadow-md d-inline border-2 py-3 px-10 text-bold text-black cursor-pointer hover:bg-black hover:bold hover:text-white ">{{ $Product->Category->name }}</li></a>
        @endif
        @endforeach
    </ul>
    <div class="row">
        @foreach ($Products as $Product)
        @if($Product->status == 1)
        @foreach($$Product->Products as $value)

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
                        <h1>{{ $value->name }}</h1>
                        <a href="{{ $Product->id }}">
                            <button class="glow-on-hover">View Product <i class="fa fa-eye"></i></button>
                        </a>
                    </div>
                    <!-- end of header -->
                    <div class="product-img pt-5">
                        <img src="{{ asset('img/products/'.$value->image) }}" alt="{{ $Pvalue->image }}"
                            width="100px" height="30px" />
                    </div>

                </div> <!-- end of product-card -->
            </div><!-- end of product-card-container -->
        </div>
        @else
        <div class="d-none">

        </div>
        @endif

        @endforeach
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
