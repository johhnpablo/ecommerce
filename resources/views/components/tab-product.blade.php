<div class="flex flex-col w-full">
    <div class="flex w-full flex-row gap-4 md:justify-start justify-between border-b border-solid border-gray-300 px-0">
        <h1 class="text-title-5 font-semibold text-blue-500 active:text-blue-500 border-b-2 border-solid border-blue-500">Feature</h1>
        <h1 class="text-title-5 font-semibold">Reviews</h1>
        <h1 class="text-title-5 font-semibold">Feature</h1>
    </div>
    <div class="flex w-full flex-col gap-4 mt-8">
        <h1 class="text-title-5 font-semibold">Description</h1>
        <p class="text-sm text-gray-700">Dolor ea vel et feugiat lorem dolore ut. Aliquam sed kasd ut duo dolor duo ut dolore accumsan tincidunt invidunt gubergren et sed sanctus. Nisl nonumy erat erat autem est. Sit invidunt et. Et eos doming. Sed erat velit adipiscing et elitr in ea aliquam nonumy lorem est rebum amet consequat et. Dolores ea sit lobortis diam diam at invidunt et eos eu duis vel. Aliquyam aliquyam iriure sed eleifend kasd gubergren consequat blandit kasd vero sed sit dolor. Sed clita labore et qui dolores possim zzril nihil lobortis dolor zzril duis ipsum. Gubergren et voluptua sit eos at sed et tempor eirmod enim soluta.</p>
    </div>
    <div class="flex w-full flex-col mt-8">
        <h1 class="text-title-5 font-semibold">Specifications</h1>
        @foreach([1,2,3,4,5] as $item)
            <div class="flex flex-row w-full gap-4 border-b border-solid border-gray-300 mt-4 justify-between">
                <h1 class="text-sm font-semibold">Feature {{$item}}</h1>
                <span class="text-sm font-light text-gray-700">Parameter {{$item}}</span>
            </div>
        @endforeach
    </div>
</div>
