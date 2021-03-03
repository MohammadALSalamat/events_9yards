<div class=" text-white relative projects-background">
    <div class=" ">
        <h1 class="w-full pt-10 text-center text-white text-capitalize">Projects</h1>
        <p class="text-center text-sm">Here's some of our highlighted events organized</p>
        <div class="container  ">
            <section id="">
                <div class="row">
                    <!-- this section is to show all th project s from the database -->
                    @foreach ($Projects as $image)
                    <div class="col-3">
                            @foreach (json_decode($image->Images) as $item)
                                <img src="{{ asset('img/projects/'.$item) }}"  alt="{{ $item }}">
                            @endforeach
                        </div>
                        @endforeach
                </div>
            </section>
            <div class="overlay1">
            </div>
            <div class="overlay2">
            </div>
            <div class="overlay">
                <h1 class="text-center text-white justify-center view-more">View More</h1>
                <i class="fas fa-chevron-down text-white wrrow-down "></i>
            </div>

        </div>
    </div>

</div>
