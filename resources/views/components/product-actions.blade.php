<div class="flex flex-col w-full lg:w-1/2 px-0 mt-8 lg:mt-0 lg:px-12"
    x-data="{ count: 1}"
>
    <div class="p-4 flex flex-col border border-gray-200 rounded w-full">
        <div class="flex flex-row items-start space-x-4">
            <span class="text-title-5 font-bold" x-text="'$' + count * 20 ">$20</span>
            <span class="text-title-5 font-light line-through text-gray-500">$30</span>
        </div>
        <div class=" flex flex-row items-center m-auto space-x-4 mt-4">
            <x-forms.button @click="count > 1 ? count-- : count = 1" type="button" variation="outline" size="small" icon="remove" icon-position="left" />
            <span class="text-title-5 font-bold" x-text="count"></span>
            <x-forms.button @click="count < 5 ? count++ : count = 5" type="button" variation="outline" size="small" icon="add" icon-position="right" />
        </div>
        <x-forms.button @click="$dispatch('open-cart')" class="mt-4"  type="button" variation="primary" size="small" icon="shopping_cart" text="Add to Cart" icon-position="left" />
        <x-forms.button class="mt-2" type="button" variation="outline" size="small" text="Buy now!" icon-position="right" />
        <div class="flex flex-col items-start mt-4 space-y-1">
            @foreach([1, 2, 3] as $item)
                <div class="flex flex-row justify-between w-full">
                    <span class="text-xs font-light text-gray-600"> Detail {{$item}}:</span>
                    <span class="text-xs font-light text-gray-600">Insland</span>
                </div>
            @endforeach
        </div>

    </div>

    <div class="flex flex-row items-center rounded bg-blue-300 mt-4 px-6 py-4 space-x-2">
        <x-icon name="local_shipping" class="text-blue-500" size="large" />
        <span class=" text-md font-semibold">Free shipping</span>
    </div>
    <div class="flex flex-row items-center rounded bg-blue-100 mt-4 px-6 py-4 space-x-2">
        <x-icon name="rocket_launch" class="text-blue-500" size="large" />
        <span class=" text-md font-semibold">Fast Delivery</span>
    </div>

</div>
