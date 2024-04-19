<div {{ $attributes->class(["rounded-lg p-4", $getBgClass]) }} >
    <div class="flex">
        <div>
            <div class="flex flex-row items-center space-x-2">
                {{ $icon }}
                <h3 @class(["text-sm font-medium font-sans", $getTitleClass])>{{ $title }}</h3>
                <span class="text-xs font-sans font-light float-left"> {{ $now }}</span>
            </div>
            <div @class(["mt-2 text-sm text", $getMessageClass])>
                <span> {{ $message }}</span>
            </div>

            {{ $slot }}
        </div>
    </div>
</div>
