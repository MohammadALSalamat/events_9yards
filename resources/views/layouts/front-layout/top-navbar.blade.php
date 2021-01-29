<style>
    .headre-fixed {
        position: fixed;
        top: 0;
        z-index: 10000000;
        background-color: rgb(255, 255, 255);
        opacity: 0.9;
    }
    
    .active {
        border: 1px solid #ccc;
        padding: 10px;
        -webkit-box-shadow: 1px 1px 2px;
        -o-box-shadow: 1px 1px 2px;
        -moz-box-shadow: 1px 1px 2px;
        box-shadow: 1px 1px 2px;
    }
</style>
<nav class="flex items-center justify-between p-4 font-sans bg-white container-fluid w-100" id="headre-fixed">
    <div class="flex float-left ">
        <img src="{{ asset('logo/logo_regular_mobile.png') }}" class="w-10 p-0 ml-5 border-0 img-circle img-responsive">
        <p class="mt-3 ml-4 text-blue "></p>
    </div>
    <div class="float-right">
        <ul class="flex">
            <li class="mr-6">
                <a class="text-black active" title="Home Page" href="#">Services</a>
            </li>
            <li class="mr-6">
                <a class="text-black" title="Send Email" href="{{  route('email_page')  }}">Events</a>
            </li>
            <li class="mr-6">
                <a class="text-black" title="New User" href="{{ route('new_data') }}">Coroprate</a>
            </li>
            <li class="mr-6">
                <a class="text-black" title="New User" href="#">Wedding</a>
            </li>
            <li class="mr-6">
                <a class="text-black" title="New User" href="#">Transpotaion</a>
            </li>
            <li class="mr-6">
                <a class="text-black" title="New User" href="#">About Us</a>
            </li>

        </ul>
    </div>
</nav>