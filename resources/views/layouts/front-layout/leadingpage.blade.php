
<div class="pb-32 px-0" style="background-color: #F2F7F9;">
    <div class=" grid gap-4  pt-20 xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 ">
        <div class="text-center pt-20 ">
            <h1 class="pb-10 ">{{ $leading_info->title }}</h1>
            <p class="w-75 pl-48 text-left">{{ $leading_info->paragraph }}</p>
        </div>
        <div class="p-10" style="background: #1D2C38">
            <div class="slideshow-container " style="width: 70%;">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="{{ asset('img/slider/1.jpg') }}" style="width:100%;height:400px">
                    <div class="text">Caption 1</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="{{ asset('img/slider/2.jpg') }}" style="width:100%;height:400px">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
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
