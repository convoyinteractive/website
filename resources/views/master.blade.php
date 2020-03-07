<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('partials.meta', compact('meta'))
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body class="font-body">
    <div class="flex flex-col min-h-screen">
        <header class="block px-6">
            @include('partials.navigation')
        </header>

        <main role="main" class="block flex-1">
            <div class="py-6">
                @yield('header')
            </div>
            <div class="px-6">
                @yield('content')
            </div>
        </main>

        <footer class="bg-black text-white block px-6 py-12 mt-32">
            <hr class="my-8">
            @include('partials.socials')
        </footer>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
