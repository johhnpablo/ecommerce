<x-layouts.base>
    <div class="container p-12 flex flex-col">

        <x-cart/>
        <h1 class="text-title-5 font-bold">Product Name</h1>
        <x-bread-crumb :items="['Home', 'Product', 'ProductName']" />

        <div class="flex flex-col lg:flex-row justify-between">

            <div class="flex flex-col w-full lg:w-1/3">
                <x-carousel :images="['products/product1.svg','products/product1-2.svg','products/product1-3.svg']"/>

            </div>

            <div class="flex flex-col  lg:flex-row w-full lg:w-2/3 p-0 lg:p-8">
                <x-product-infos></x-product-infos>
                <x-product-actions></x-product-actions>
            </div>

        </div>
        <div class="container flex flex-col mt-6 w-full">
            <div class="flex flex-row w-full">
                <x-tab-product/>
            </div>
        </div>


    </div>
</x-layouts.base>
