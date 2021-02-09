
<div class="px-0 pb-48" style="background-color: #FFF;">
    <div class="grid gap-4 pt-20 xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
        <div class="text-center">
            @if ( $headerTitles->status == 1)
            <h1 class="">
                <p style="font-size: 200px;font-family: 'Playfair Display', serif;" >{{ $headerTitles->top_title }}</p>
                <p style="font-family: 'Pinyon Script', cursive; font-size: 274px;margin-top: -91px;" class="text-blue-600 "> {{ $headerTitles->bottom_title }}</p>
            </h1>
            <p style="margin-top: -91px; font-size:45px" class="text-3xl text-gray-500 bold "> {{ $headerTitles->paragraph}}</p>
            @else
            <h1 class="">
                <p style="font-size: 200px;font-family: 'Playfair Display', serif;" >9yards</p>
                <p style="font-family: 'Pinyon Script', cursive; font-size: 274px;margin-top: -91px;" class="text-blue-600 "> Events</p>
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
                    <div class="numbertext">{{ $slider->id }} / 3</div> 
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
            </div>
        </div>
    </div>
</div>

