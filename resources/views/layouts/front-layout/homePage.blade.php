<style>
    .text-title .top-title{

  border-top: 5px solid;
  border-image:   linear-gradient(to right, #f175ae 25%, #9709f4 25%, #ac2ba7 50%,#eb9570 50%, #ffdaa0 75%, #ac2ba7 75%) 5;
    }

    [class^=swiper-button-] {
        transition: all 0.3s ease;
    }

    .swiper-slide {
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
    }

    *,
    *:before,
    *:after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .swiper-container {
        width: 80%;
        height: auto;
        float: left;
        transition: opacity 0.6s ease, transform 0.3s ease;
    }

    .swiper-container.nav-slider {
        width: 20%;
        padding-left: 5px;
    }

    .swiper-container.nav-slider .swiper-slide {
        cursor: pointer;
        opacity: 0.4;
        transition: opacity 0.3s ease;
    }

    .swiper-container.nav-slider .swiper-slide.swiper-slide-active {
        opacity: 1;
    }

    .swiper-container.nav-slider .swiper-slide .content {
        width: 100%;
    }

    .swiper-container.nav-slider .swiper-slide .content .title {
        font-size: 20px;
    }

    .swiper-container:hover .swiper-button-prev,
    .swiper-container:hover .swiper-button-next {
        transform: translateX(0);
        opacity: 1;
        visibility: visible;
    }

    .swiper-container.loading {
        opacity: 0;
        visibility: hidden;
    }

    .swiper-slide {
        overflow: hidden;
    }

    .swiper-slide .slide-bgimg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-position: center;
        background-size: cover;
    }

    .swiper-slide .entity-img {
        display: none;
    }

    .swiper-slide .content {
        position: absolute;
        top: 40%;
        left: 0;
        width: 50%;
        padding-left: 5%;
        color: #fff;
    }

    .swiper-slide .content .title {
        font-size: 2.6em;
        font-weight: bold;
        margin-bottom: 30px;
    }

    .swiper-slide .content .caption {
        display: block;
        font-size: 13px;
        line-height: 1.4;
        transform: translateX(50px);
        opacity: 0;
        transition: opacity 0.3s ease, transform 0.7s ease;
    }

    .swiper-slide .content .caption.show {
        transform: translateX(0);
        opacity: 1;
    }

    [class^=swiper-button-] {
        width: 44px;
        opacity: 0;
        visibility: hidden;
    }

    .swiper-button-prev {
        transform: translateX(50px);
    }

    .swiper-button-next {
        transform: translateX(-50px);

    }
</style>

<div class="px-0 pb-48" style="background-color: #FFF;">
    <div class="grid gap-4 pt-20 xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
        <div class="text-center ">

            @if ( $headerTitles->status == 1)
            <h1 class="text-title">
                <p class="top-title" style="font-size: 200px;font-family: 'Playfair Display', serif;">{{ $headerTitles->top_title }}</p>
                <p style="font-family: 'Pinyon Script', cursive; font-size: 274px;margin-top: -91px;"
                class="text-blue-600 "> {{ $headerTitles->bottom_title }}</p>
            </h1>
            <p style="margin-top: -91px; font-size:45px" class="text-3xl text-gray-500 bold ">
                {{ $headerTitles->paragraph}}</p>
            @else
            <h1 class="">
                <div class="border-top"></div>
                <p style="font-size: 200px;font-family: 'Playfair Display', serif;">9yards</p>
                <p style="font-family: 'Pinyon Script', cursive; font-size: 274px;margin-top: -91px;"
                    class="text-blue-600 "> Events</p>
            </h1>
            <p style="margin-top: -91px; font-size:45px" class="text-3xl text-gray-500 bold ">
                Welcome to the true stories <br>
                powerhouse in Middle East
            </p>
            @endif
        </div>
        <div class="pt-24 ">

            <div class="slideshow-container ">

                @foreach ($headerSlideShows as $slider)
                @if ($slider->status == 1)
                <div class="HomemySlides fade">
                    <div class="numbertext">{{ $slider->id }} / 3
                    </div>
                    <img src="{{ asset('admin-style/sliders/header_slideshow/'.$slider->slideshow) }}"
                        style="width:100%;height:400px">
                    <div class="text">Caption {{ $slider->id }} </div>
                </div>
                @endif
                @endforeach

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>

            <div style="text-align:center">
                @foreach ($headerSlideShows as $slider)
                @if ($slider->status == 1)
                <span class="dot" onclick="currentSlide({{ $slider->id }})"></span>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
