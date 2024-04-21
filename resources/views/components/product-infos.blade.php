<div class="flex flex-col w-full lg:w-1/2 px-0 lg:12px mt-8 lg:mt-0">
    <h2 class="text-title-5 font-bold">
        Product Name
    </h2>
    <span class="text-xs font-light text-gray-500 mt-2"> No. 3346</span>
    <div class="flex flex-row items start justify-between w-full mt-2" >
        <div class="flex flex-row items-start">
            @for($i = 0; $i < 5; $i++)
                <x-icon name="star" size="small" class="text-yellow-400" />
            @endfor
        </div>
        <span class="text-xs font-light text-green-500"> In Stock</span>
    </div>

    <div class=" flex flex-row items-start my-4 space-x-2">
        @foreach( ['S', 'M', 'L', 'XL'] as $size )
            <x-forms.button :text="$size" type="button" :variation="$loop->first ? 'primary' : 'outline'" size="small"/>
        @endforeach
    </div>

    <span class="text-sm font-bold">Colors:</span>
    <div class="flex flex-row flex-shrink-0 items-start mt-2 space-x-2">
        <div class="cursor-pointer rounded-full bg-red-500 h-4 w-4"></div>
        <div class="cursor-pointer rounded-full bg-red-400 h-4 w-4"></div>
        <div class="cursor-pointer rounded-full bg-red-300 h-4 w-4"></div>
        <div class="cursor-pointer rounded-full bg-gray-900 h-4 w-4"></div>
        <div class="cursor-pointer rounded-full bg-gray-800 h-4 w-4"></div>
        <div class="cursor-pointer rounded-full bg-gray-700 h-4 w-4"></div>
    </div>

    <span class="text-sm font-bold mt-4">Description:</span>
    <div class="flex flex-col items-start mt-2 space-y-1">
        @foreach([1, 2, 3, 4, 5, 6, ] as $item)
            <div class="flex flex-row justify-between w-full">
                <span class="text-xs font-light text-gray-600"> Detail {{$item}}:</span>
                <span class="text-xs font-light text-gray-600">Cotton</span>
            </div>
        @endforeach
    </div>

</div>
