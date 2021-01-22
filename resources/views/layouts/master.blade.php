<!DOCTYPE html>
<html lang="{{ app('translator')->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $meta->get('title') }} - Convoy Interactive</title>
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="preload" href="https://storage.convoyinteractive.com/fonts/grtsk/grtsk-peta-regular.woff2">
    <link rel="preload" href="https://storage.convoyinteractive.com/fonts/brava/bravaslab-light.woff2">
    <link rel="preload" href="https://storage.convoyinteractive.com/fonts/grtsk/grtsk-peta-semibold.woff2">
    <link rel="preload" href="https://storage.convoyinteractive.com/fonts/grtsk/grtsk-tera-bold.woff2">

    @if($meta->has('title'))
    <meta property="og:title" content="{{ $meta->get('title') }}">
    @endif

    @if($meta->has('description'))
    <meta name="description" content="{{ $meta->get('description') }}">
    <meta property="og:description" content="{{ $meta->get('description') }}">
    @endif

    @foreach ($meta->get('alternates', []) as $locale => $path)
    <link rel="alternate" hreflang="{{ $locale }}" href="{{ app('request')->root() }}/{{ $locale }}/{{ $path }}" />
    @endforeach

    <link rel="stylesheet" href="//storage.convoyinteractive.com/type?a=brava,grtsk">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}"></script>
</head>
<body class="font-serif antialiased text-lg md:text-xl xl:text-like-xl leading-relaxed transition duration-500 ease-in-out"
    theme='@json($theme)'>
    <div id="convoy" class="flex flex-col min-h-screen">
        <header class="block px-6 z-50">
            @include('layouts.partials.navigation')
        </header>

        <main role="main" class="block flex-1">
            @yield('content')
            @yield('aside')
        </main>

        <snake></snake>

        <custom-cursor></custom-cursor>

        @include('layouts.partials.footer')
    </div>
</body>
</html>
