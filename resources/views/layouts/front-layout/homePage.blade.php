<style>
    /* [class^=swiper-button-] {
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
    } */
</style>

<div class="px-0 pb-48" style="background-color: #FFF;">
    <div class="grid gap-4 pt-20 xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
        <div class="text-center">
            @if ( $headerTitles->status == 1)
            <h1 class="">
                <p style="font-size: 200px;font-family: 'Playfair Display', serif;">{{ $headerTitles->top_title }}</p>
                <p style="font-family: 'Pinyon Script', cursive; font-size: 274px;margin-top: -91px;"
                    class="text-blue-600 "> {{ $headerTitles->bottom_title }}</p>
            </h1>
            <p style="margin-top: -91px; font-size:45px" class="text-3xl text-gray-500 bold ">
                {{ $headerTitles->paragraph}}</p>
            @else
            <h1 class="">
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
        <div class="pt-24 relative">
            <div class="swiper-container main-slider loading">
                <div class="swiper-wrapper">
                    @foreach ($headerSlideShows as $slider)
                    @if ($slider->status == 1)
                    <div class="swiper-slide">
                        <figure class="slide-bgimg"
                            style="background-image:url({{ asset('admin-style/sliders/header_slideshow/'.$slider->slideshow) }})">
                            <img src="{{ asset('admin-style/sliders/header_slideshow/'.$slider->slideshow) }}"
                                class="entity-img" />
                        </figure>
                    </div>
                    @endif
                    @endforeach
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev swiper-button-white"></div>
                <div class="swiper-button-next swiper-button-white"></div>
            </div>

            <!-- Thumbnail navigation -->
            <div class="swiper-container nav-slider loading">
                <div class="swiper-wrapper" role="navigation">
                    @foreach ($headerSlideShows as $slider)
                    @if ($slider->status == 1)
                    <div class="swiper-slide">
                        <figure class="slide-bgimg"
                            style="background-image:url({{ asset('admin-style/sliders/header_slideshow/'.$slider->slideshow) }})">
                            <img src="{{ asset('admin-style/sliders/header_slideshow/'.$slider->slideshow) }}"
                                class="entity-img" />
                        </figure>
                        <div class="content">
                            <p class="title">Shaun Matthews</p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
{{-- <div class="slideshow-container ">

                @foreach ($headerSlideShows as $slider)
                @if ($slider->status == 1)
                <div class="HomemySlides fade">
                    <div class="numbertext">{{ $slider->id }} / 3
</div>
<img src="{{ asset('admin-style/sliders/header_slideshow/'.$slider->slideshow) }}" style="width:100%;height:400px">
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
</div> --}}
<script>
    // Params
    var mainSliderSelector = '.main-slider';
    var navSliderSelector = '.nav-slider';
    var interleaveOffset = 0.5;
    // Main Slider
    var mainSliderOptions = {
        loop: true,
        speed: 1000,
        autoplay: {
            delay: 3000
        },
        loopAdditionalSlides: 10,
        grabCursor: true,
        watchSlidesProgress: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        on: {
            init: function() {
                this.autoplay.stop();
            },
            imagesReady: function() {
                this.el.classList.remove('loading');
                this.autoplay.start();
            },
            slideChangeTransitionEnd: function() {
                var swiper = this,
                    captions = swiper.el.querySelectorAll('.caption');
                for (var i = 0; i < captions.length; ++i) {
                    captions[i].classList.remove('show');
                }
                swiper.slides[swiper.activeIndex].querySelector('.caption').classList.add('show');
            },
            progress: function() {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    var slideProgress = swiper.slides[i].progress,
                        innerOffset = swiper.width * interleaveOffset,
                        innerTranslate = slideProgress * innerOffset;
                    swiper.slides[i].querySelector(".slide-bgimg").style.transform =
                        "translateX(" + innerTranslate + "px)";
                }
            },
            touchStart: function() {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = "";
                }
            },
            setTransition: function(speed) {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = speed + "ms";
                    swiper.slides[i].querySelector(".slide-bgimg").style.transition =
                        speed + "ms";
                }
            }
        }
    };
    var mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);
    // Navigation Slider
    var navSliderOptions = {
        loop: true,
        loopAdditionalSlides: 10,
        speed: 1000,
        spaceBetween: 5,
        slidesPerView: 5,
        centeredSlides: true,
        touchRatio: 0.2,
        slideToClickedSlide: true,
        direction: 'vertical',
        on: {
            imagesReady: function() {
                this.el.classList.remove('loading');
            },
            click: function() {
                mainSlider.autoplay.stop();
            }
        }
    };
    var navSlider = new Swiper(navSliderSelector, navSliderOptions);
    // Matching sliders
    mainSlider.controller.control = navSlider;
    navSlider.controller.control = mainSlider;
</script>
