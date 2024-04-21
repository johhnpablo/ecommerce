<div class=" px-24 flex flex-row items-center justify-between py-4 w-full border-b border-solid border-gray-300">
    <div class="">
        <img class="w-20 md:w-36" src="{{ Vite::images($logo) }}" alt="" />
    </div>

    <div class="hidden md:flex flex-row items-center space-x-0.5">
        <x-forms.input
            type="text"
            name="search"
            placeholder="Search"
            size="medium"
            icon="search"
            icon-position="right"
          >
        </x-forms.input>
        <x-forms.button
            type="button"
            variation="primary"
            size="small"
            icon="search"
            icon-position="left">
        </x-forms.button>
    </div>

    <div class="flex flex-row items-center space-x-0.5">

        <x-forms.button
            class="flex md:hidden"
            type="button"
            variation="primary"
            size="small"
            icon="search"
            icon-position="left"
        >

        </x-forms.button>
        <x-forms.button
            type="button"
            text="Log In"
            variation="primary"
            size="small"
            icon="person"
            icon-position="left">
        </x-forms.button>

        <x-forms.button
            type="button"
            variation="outline"
            size="small"
            icon="shopping_cart"
            icon-position="left">
        </x-forms.button>


    </div>


</div>
