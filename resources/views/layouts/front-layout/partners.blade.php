<div class="lg:h-screen ">
    <h1 class="w-full py-10 text-center text-gray-900 text-capitalize">Events Parters</h1>
    <div class="container grid justify-center gap-4 p-6 xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-items-center">
        @foreach ($Parteners as $sections)
        @if($sections->status==1)
        <div class="ml-auto mr-auto overflow-hidden ">
            @foreach ($sections->partenerImages as $image)
            @if($image->status == 1)
                <img class="block object-cover h-48 rounded-b" src="{{ asset('img/projects/'.$image->Image) }}" alt="A photo of a fox">
            @else
            <img style="display: none">
            @endif
            @endforeach
        </div>
        @else
        <div style="display: none">
        </div>
        @endif
        @endforeach
    </div>
</div>
