<div class=" text-white relative projects-background">
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
                <h1 class="text-center text-white justify-center view-more">View More</h1>
                <i class="fas fa-chevron-down text-white wrrow-down "></i>
            </div>

        </div>
    </div>

</div>
