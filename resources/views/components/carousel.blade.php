<div class=" flex flex-col w-full">

    <div class="p-2 overflow-hidden border border-solid border-gray-300 rounded mt-4">
        <img class="w-full object-scale-down" src="{{ Vite::images($images[0])}}" />
    </div>


    <div class="relative flex flex-row items-center justify-center space-x-2 mt-2">

        <x-icon name="chevron_left" size="large" class="absolute left-0"/>
         @foreach($images as $image)
            <img class="w-12 h-12 rounded-md object-cover object-center bg-gray-200 cursor-pointer hover:bg-gray-400" src="{{ Vite::images($image) }}" />
        @endforeach
        <x-icon name="chevron_right" size="large" class="absolute right-0"/>
    </div>


</div>
