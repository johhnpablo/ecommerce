<!doctype html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>{{ $title ?? "MLA" }}</title>

</head>
<body>
    @if(!isset($navigation))
        <x-layouts.navigation/>
    @else
        {{ $navigation }}
    @endif
    <div class="min-h-full">
        <div class="py-10">
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>

</body>
</html>
