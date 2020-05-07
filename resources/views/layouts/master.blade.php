<!DOCTYPE html>
<html lang="{{ app('translator')->getLocale() }}" dragable>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.partials.meta', compact('meta'))
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}"></script>
</head>
<body class="font-serif text-xl xl:text-like-xl leading-relaxed transition duration-200 ease-in-out" daynight="<?= $content->styles('waypoints.daynight') ?>">
    <div id="convoy" class="flex flex-col min-h-screen">
        <header class="block px-6 z-50">
            @include('layouts.partials.navigation')
        </header>

        <main role="main" class="block flex-1">
            @yield('content')
        </main>

        <footer class="px-6 sm:px-12 pt-12 pb-40 sm:pb-12 mt-32 bg-black text-white">
            <div class="flex space-x-6 font-sans text-sm uppercase">
                @foreach ($meta->get('alternates', []) as $locale => $path)
                    <a href="/{{$locale}}/{{$path}}">{{$locale}}</a>
                @endforeach
            </div>
            <hr class="my-8">
            @include('layouts.partials.socials')
        </footer>
    </div>
</body>
</html>
