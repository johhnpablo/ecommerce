<!doctype html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body>

    @sectionMissing('navigation')
        @include('layout/navigation', [])
    @endif
    @hasSection('navigation')
        @yield('navigation')
    @endif
    <div class="py-10">
        <main>
            @yield('content')
        </main>
    </div>

</body>
</html>
