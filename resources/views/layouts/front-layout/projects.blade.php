<style>
    .glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
</style>
<div class=" text-white relative projects-background" style="height: 1300px;overflow:hidden ">
    <div class=" ">
        <h1 class="w-full pt-10 text-center text-white text-capitalize">Projects</h1>
        <p class="text-center text-sm">Here's some of our highlighted events organized</p>
        <div class="container  ">
            <section id="">
                <div class="row">
                    <div class="col-12 mb-10">
                    <div class="form-group mb-10" >
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"style="background: none;color:#fff">
                          <option style="background: none">Select Services</option>
                        </select>
                      </div>
                    </div>
                    <!-- this section is to show all th project s from the database -->
                    @foreach ($Projects as $sections)
                    @if($sections->status==1)
                    <div class="col-3">
                        @foreach ($sections->projectImages as $image)
                        @if($image->status == 1)
                        <img src="{{ asset('img/projects/'.$image->Image) }}" alt="{{ $image->Image }}" style="padding-bottom: 15px" width="100%">
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
            </section>
            <div class="overlay1">
            </div>
            <div class="overlay2">
            </div>
            <div class="overlay">
                <a class="text-center text-white justify-center outline-none" href="#"></a><button class="glow-on-hover" type="button">View More <i class=" ml-5 fa fa-arrow-right"></i></button>
            </div>

        </div>
    </div>

</div>
