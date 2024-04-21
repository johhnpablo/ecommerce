<div class="flex flex-row items-center space-x-0.5">
    @foreach($items as $item)
        <span @class([
                    'text-xs font-light',
                    'text-gray-300' => !$loop->last,
                    'text-gray-900' => $loop->last,
                ])
        >
            {{ $item }}

        </span>

        @if (!$loop->last)
            <span class="text-xs font-thin"> / </span>
       @endif

    @endforeach
</div>
