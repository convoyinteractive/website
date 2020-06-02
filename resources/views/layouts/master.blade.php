<!DOCTYPE html>
<html lang="{{ app('translator')->getLocale() }}" dragable>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.partials.meta', compact('meta'))
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="//lib.convoyinteractive.com/type?a=brava,grtsk">
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

        <snake inline-template>
            <div>
                <div v-if="active" class="fixed inset-0">
                    <canvas
                        @keyup.esc="stop"
                        @keyup.up="moveUp"
                        @keyup.down="moveDown"
                        @keyup.left="moveLeft"
                        @keyup.right="moveRight"
                        tabindex="0"
                        class="mx-auto"
                        width="800"
                        height="800"
                        ref="canvas"
                    ></canvas>
                </div>
                <button v-if="fresh" @click="run" class="w-4 h-4 bg-green"></button>
            </div>
        </snake>

        <footer class="
            px-10 sm:px-20 xl:px-screen-20
            pt-10 pb-40 sm:py-10 xl:py-screen-10
            mt-30 xl:mt-screen-30
            bg-black
            text-white
        ">
            <div class="
                flex
                font-sans
                text-sm
                uppercase
                space-x-10 xl:space-x-screen-10
            ">
                @foreach ($meta->get('alternates', []) as $locale => $path)
                    <a href="/{{$locale}}/{{$path}}">{{$locale}}</a>
                @endforeach
            </div>
            <hr class="
                my-10 xl:my-screen-10
            ">
            @include('layouts.partials.socials')
        </footer>
    </div>
</body>
</html>
