<div @class(["rounded-lg p-4", $getBgClass])>
    <div class="flex">
        <div>
            <h3 @class(["text-sm font-medium font-sans", $getTitleClass])>{{ $title }}</h3>
            <div @class(["mt-2 text-sm", $getMessageClass])>
                <span> {{ $message }}</span>
            </div>
        </div>
    </div>
</div>
