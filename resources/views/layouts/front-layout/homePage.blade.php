
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

                <div class="HomemySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="{{ asset('img/slider/1.jpg') }}" style="width:100%;height:400px">
                    <div class="text">Caption 1</div>
                </div>

                <div class="HomemySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="{{ asset('img/slider/2.jpg') }}" style="width:100%;height:400px">
                    <div class="text">Caption Two</div>
                </div>

                <div class="HomemySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="{{ asset('img/slider/3.jpg') }}" style="width:100%;height:400px">
                    <div class="text">Caption Three</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
    </div>
</div>

