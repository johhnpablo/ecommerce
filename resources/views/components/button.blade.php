<button

    {{ $attributes
    ->merge(['type' => 'button', 'data_customerid' => 1])
    ->class([
        "text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600
        hover:bg-gradient-to-br focus:ring-1  focus:ring-cyan-300 dark:focus:ring-cyan-800
        font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
        ])
     }}
>
   @if($attributes->get('mode') === 'Enviar')
       {{ $attributes->get('mode') }}
   @else
        Registrar
   @endif
</button>
