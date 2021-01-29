<nav class="flex items-center justify-between p-4 font-sans bg-white border-b-2 container-fluid w-100">
    <div class="flex float-left ">
        <img src="{{ asset('logo/logo_regular_mobile.png') }}" class="w-10 p-0 ml-5 border-0 img-circle img-responsive">
        <p class="mt-3 ml-4 text-blue "></p>
    </div>
    <div class="float-right">
        <ul class="flex">
            <li class="mr-6">
                <a class="text-black" title="Home Page" href="{{ route('main_page') }}">Services</a>
            </li>
            <li class="mr-6">
                <a class="text-black" title="Send Email" href="{{  route('email_page')  }}">Events</a>
            </li>
            <li class="mr-6">
                <a class="text-black" title="New User"  href="{{ route('new_data') }}">Coroprate</a>
            </li>
            <li class="mr-6">
                <a class="text-black" title="New User"  href="#">Wedding</a>
            </li>
            <li class="mr-6">
                <a class="text-black" title="New User"  href="#">Transpotaion</a>
            </li>
            <li class="mr-6">
                <a class="text-black" title="New User"  href="#">About Us</a>
            </li>

        </ul>
    </div>
</nav>
<style>
    .header-bg {
        background: url('https://www.animatedimages.org/data/media/144/animated-waterfall-image-0021.gif');
        -moz-background-size: cover;
        -o-background-size: cover;
        -webkit-background-size: cover;
        background-size: cover;
        background-attachment: fixed;
        background-position: bottom center;
    }
</style>

