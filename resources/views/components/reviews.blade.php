<div {{$attributes->class(['flex flex-col w-full mt-6'])}} x-transition.500ms>
    <div class="flex flex-row justify-between border-b border-solid border-gray-300">
        <h1 class="text-title-5 font-semibold mt-4">Reviews</h1>
        <x-forms.button class="mb-1" type="button" text="Write review" size="small" variation="primary" icon="edit_note" icon-position="left"/>
    </div>
    @foreach([11, 22] as $item)
    <div class="flex flex-col w-full mt-8 border-b border-solid border-gray-300">
            <div class="absolute inline-flex shadow-hard shadow-gray-600 items-center justify-center w-20 h-20 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                <span class="font-medium text-gray-600 dark:text-gray-300 ">JL</span>
            </div>
            <div class="flex flex-row justify-between w-full px-6 pl-24">
                <h1 class="text-sm font-semibold">Author</h1>
                <span class="text-sm text-light text-gray-400">Setember, {{ $item }}</span>
            </div>
            <div class="flex flex-row w-full px-6 pl-24 mt-2">
                @for($i = 0; $i < 5; $i++)
                    <x-icon name="star" size="small" class="text-yellow-400" />
                @endfor
            </div>
            <div class="flex flex-row w-full px-6 pl-24 mt-2 mb-2">
                <p class="text-sm text-gray-700">Dolor ea vel et feugiat lorem dolore ut. Aliquam sed kasd ut duo dolor duo ut dolore accumsan tincidunt invidunt gubergren et sed sanctus. Nisl nonumy erat erat autem est. Sit invidunt et. Et eos doming. Sed erat velit adipiscing et elitr in ea aliquam nonumy lorem est rebum amet consequat et. Dolores ea sit lobortis diam diam at invidunt et eos eu duis vel. Aliquyam aliquyam iriure sed eleifend kasd gubergren consequat blandit kasd vero sed sit dolor. Sed clita labore et qui dolores possim zzril nihil lobortis dolor zzril duis ipsum. Gubergren et voluptua sit eos at sed et tempor eirmod enim soluta.</p>
            </div>
    </div>
    @endforeach
    <a href="#"  class="text-sm font-semibold text-blue-500 mt-4 hover:text-blue-700 active:text-blue-900">Show more...</a>
</div>
