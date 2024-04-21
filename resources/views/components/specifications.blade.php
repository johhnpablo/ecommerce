<div {{$attributes->class(['flex w-full flex-col mt-8'])}} x-transition.500ms>
    <h1 class="text-title-5 font-semibold">Specifications</h1>
    @foreach([1,2,3,4,5] as $item)
        <div class="flex flex-row w-full gap-4 border-b border-solid border-gray-300 mt-4 justify-between">
            <h1 class="text-sm font-semibold">Feature {{$item}}</h1>
            <span class="text-sm font-light text-gray-700">Parameter {{$item}}</span>
        </div>
    @endforeach
</div>
