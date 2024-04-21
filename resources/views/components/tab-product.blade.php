<div class="flex flex-col w-full" x-data="{tab: 'feature'}">
    <div class="flex w-full flex-row gap-4 md:justify-start justify-between border-b border-solid border-gray-300 px-0" >
        <span  x-on:click="tab = 'feature'"  class="text-title-5 font-semibold cursor-pointer" :class="{'text-blue-500 active:text-blue-500 border-b-2 border-solid border-blue-500' : tab === 'feature'}">Feature</span>
        <span x-on:click="tab = 'reviews'" class="text-title-5 font-semibold cursor-pointer" :class="{'text-blue-500 active:text-blue-500 border-b-2 border-solid border-blue-500' : tab === 'reviews'}">Reviews</span>
        <span  x-on:click="tab = 'specifications'" class="text-title-5 font-semibold cursor-pointer" :class="{'text-blue-500 active:text-blue-500 border-b-2 border-solid border-blue-500' : tab === 'specifications'}">Specifications</span>
    </div>
     <x-description
        x-show="tab === 'feature'"
     />

    <x-specifications
        x-show="tab === 'specifications'"
    />
    <x-reviews
        x-show="tab === 'reviews'"
    />
</div>
