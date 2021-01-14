<!DOCTYPE html>
<html lang="{{ app('translator')->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.partials.meta', compact('meta'))
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="//storage.convoyinteractive.com/type?a=brava,grtsk">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}"></script>
</head>
<body class="font-serif antialiased text-base md:text-xl xl:text-like-xl leading-relaxed transition duration-500 ease-in-out"
    theme='@json($theme)'>
    <div id="convoy" class="flex flex-col min-h-screen">
        <header class="block px-6 z-50">
            @include('layouts.partials.navigation')
        </header>

        <main role="main" class="block flex-1">
            @yield('content')
        </main>

        <snake></snake>

        <custom-cursor></custom-cursor>

        @include('layouts.partials.footer')
    </div>
</body>
</html>
