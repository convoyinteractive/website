<nav-menu inline-template>
    <nav v-click-away="close" @keydown="onKeydown">

        {{-- The Logo --}}
        <div class="px-6 md:px-10 sm:px-20 xl:px-screen-20 pt-10 xl:pt-screen-10 fixed top-0 left-0 z-50">
            <a class="block" href="/{{ app('translator')->getLocale() }}" aria-label="Home Page">
                <svg class="h-8 xl:h-screen-8" viewBox="0 0 92 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-label="Convoy">
                    <path aria-label="Logo" d="M79.8175792,9.2456245 L84.1711295,19.9426245 L88.1009951,9.43078759 L91,9.43078759 L85.499324,23.5787589 C84.3347664,26.747315 83.0215419,28 80.6180934,28 C80.1083782,28 79.5986631,27.9458624 79.1825691,27.8221192 L78.9827573,27.7543755 L78.8588682,25.5191925 C79.2305355,25.6174423 79.577425,25.6420048 79.9490923,25.6420048 C81.5519609,25.6420048 82.2308908,24.9779716 83.1232825,22.7213644 L83.2197645,22.4734487 L83.2445423,22.4243238 L83.6241295,21.4056245 L82.1466943,21.4056245 L76.7451295,9.2456245 L79.8175792,9.2456245 Z M7.71478923,9 C9.71959193,9 11.279429,9.59090481 12.3503173,10.7000463 L10.33423,12.5132743 C9.74841386,11.7617864 8.86583586,11.3579952 7.71478923,11.3579952 C5.26178505,11.3579952 3.99811622,13.1264916 3.99811622,15.9757359 C3.99811622,18.7758552 5.28656287,20.5443516 7.73956705,20.5443516 C9.14395211,20.5443516 10.1704003,19.9679643 10.7521099,18.7820789 L12.8125082,20.635182 C11.7110532,22.1142932 9.95484182,22.9023469 7.73956705,22.9023469 C3.477782,22.9023469 1,20.1759149 1,15.9757359 C1,11.7509944 3.477782,9 7.71478923,9 Z M21.9134021,9 C26.1751872,9 28.6529692,11.7755569 28.6529692,15.9511734 C28.6529692,20.1513524 26.1751872,22.9023469 21.9134021,22.9023469 C17.6516171,22.9023469 15.1738351,20.1513524 15.1738351,15.9511734 C15.1738351,11.7755569 17.6516171,9 21.9134021,9 Z M68.5864163,9 C72.8482014,9 75.3259834,11.7755569 75.3259834,15.9511734 C75.3259834,20.1513524 72.8482014,22.9023469 68.5864163,22.9023469 C64.3246313,22.9023469 61.8468493,20.1513524 61.8468493,15.9511734 C61.8468493,11.7755569 64.3246313,9 68.5864163,9 Z M39.4934436,9 C42.3623134,9 44.1756372,10.8602154 44.2715591,13.6756765 L44.2755629,13.9124901 L44.2755629,22.6567224 L41.3517801,22.6567224 L41.3517801,14.5511138 C41.3517801,12.7826173 40.3358895,11.5299324 38.477553,11.5299324 C36.4393775,11.5299324 34.9813278,12.9331358 34.889381,15.1607491 L34.8847691,15.3862371 L34.8847691,22.6567224 L31.9609863,22.6567224 L31.9609863,9.2456245 L34.5131018,9.2456245 L34.76088,11.726432 C35.7519928,10.0070605 37.4368846,9 39.4934436,9 Z M49.9268119,9.2456245 L53.4700401,18.8249801 L57.0876018,9.2456245 L59.9122733,9.2456245 L54.5354864,22.6567224 L52.2559269,22.6567224 L46.8543622,9.2456245 L49.9268119,9.2456245 Z M21.9134021,11.3579952 C19.4108423,11.3579952 18.1719513,13.1019292 18.1719513,15.9511734 C18.1719513,18.8249801 19.4108423,20.5443516 21.9134021,20.5443516 C24.4159619,20.5443516 25.6548529,18.8249801 25.6548529,15.9511734 C25.6548529,13.0773667 24.4159619,11.3579952 21.9134021,11.3579952 Z M68.5864163,11.3579952 C66.0838565,11.3579952 64.8449655,13.1019292 64.8449655,15.9511734 C64.8449655,18.8249801 66.0838565,20.5443516 68.5864163,20.5443516 C71.0889762,20.5443516 72.3278672,18.8249801 72.3278672,15.9511734 C72.3278672,13.0773667 71.0889762,11.3579952 68.5864163,11.3579952 Z" fill="currentColor"></path>
                </svg>
            </a>
        </div>

        {{-- The Navigation Links --}}
        <div class="px-6 md:px-10 sm:px-20 xl:px-screen-20 pt-10 xl:pt-screen-10 fixed inset-x-0 bottom-0 sm:bottom-auto sm:top-0 text-black sm:text-inherit z-40"
            :class="{'sm:text-black': isOpen}"
        >
            <div class="mb-5 sm:mb-0 rounded-full bg-white sm:bg-transparent shadow sm:shadow-none flex items-center justify-between sm:justify-end sm:space-x-10 xl:space-x-screen-10">
                @foreach(['work', 'about', 'hello'] as $item)
                <button @click="toggle('{{$item}}')" class="font-sans text-sm xl:text-like-sm text-center flex-grow sm:flex-grow-0 p-2 sm:p-0 h-12 sm:h-8 xl:h-screen-8">
                    {{ __(ucwords($item)) }}
                </button>
                @endforeach
            </div>
        </div>

        {{-- The Backdrop --}}
        <fade-in-out>
            {{-- The "display: none" inline-style prevents an annoying flash before the component is fully rendered. --}}
            <div v-show="isOpen" aria-hidden="true" style="display: none">
                <div class="fixed bg-black opacity-25 inset-y-0 right-0 w-full" @click="close" v-cursor="{
                    type: 'text',
                    label: 'Close Menu',
                    size: 80
                }"></div>
            </div>
        </fade-in-out>

        {{-- The Off-Canvas Container --}}
        <slide-to-left>
            {{-- The "display: none" inline-style prevents an annoying flash before the component is fully rendered. --}}
            <div v-show="isOpen"
                style="display: none"
                class="bg-white text-black overflow-y-auto fixed inset-y-0 right-0 pt-20 xl:pt-screen-20 sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-4/12"
            >
                <div ref="about" v-show="isActive('about')" class="flex flex-col justify-between min-h-full w-full space-y-20 pt-10 pb-30 md:px-20 md:pb-20">
                    <div>
                        @foreach($sitemap->collection('about.links', 'navigation') as $item)
                        <a href="{{ $item->get('path') }}" class="block font-sans font-bold text-2xl md:text-3xl xl:text-like-3xl mb-5 md:mb-10 xl:mb-screen-10 mx-5 md:mx-15">
                            {{ $item->get('label') }}
                        </a>
                        @endforeach
                    </div>
                    <div>
                        <img class="block w-full"
                            src="{{ asset($sitemap->component('about.image', 'navigation')->get('path'), ['width' => '640', 'format' => 'jpg']) }}"
                            srcset="{{ asset($sitemap->component('about.image', 'navigation')->get('path'), ['width' => '1024', 'format' => 'jpg']) }} 2x"
                            alt="{{ $sitemap->component('about.image', 'navigation')->get('alt') }}">
                    </div>
                </div>

                <div ref="work" v-show="isActive('work')" class="min-h-full w-full space-y-20 px-5 pt-10 pb-30 md:px-20 md:pb-20">
                    @foreach($cases as $component)
                        @include('components.case')
                    @endforeach
                </div>

                <div ref="hello" v-show="isActive('hello')" class="flex flex-col justify-between min-h-full w-full space-y-20 pt-10 pb-30 md:px-20 md:pb-20">
                    <div class="mx-5 md:mx-15">
                        <div class="font-sans font-bold mb-5 xl:mb-screen-5">
                            {{ __('Get in touch') }}
                        </div>
                        <address class="not-italic mb-10">
                            <div class="mb-5">
                                Convoy Interactive GmbH <br>
                                {{ $contact->get('street') }} <br>
                                {{ $contact->get('postcode') }}
                                {{ $contact->get('city') }}
                            </div>
                            <div class="mb-5">
                                <a href="tel:{{ str_replace(" ", "", $contact->get('phone')) }}">
                                    {{ $contact->get('phone') }}
                                </a>
                            </div>
                            <div>
                                <a href="mailto:{{ $contact->get('email') }}">
                                    {{ $contact->get('email') }}
                                </a>
                            </div>
                        </address>
                    </div>

                    <div class="mx-5 md:mx-15">
                        @foreach($sitemap->collection('contact.links', 'navigation') as $item)
                        <a href="{{ $item->get('url') }}" target="_blank" rel="noopener" class="block font-sans font-bold text-sm xl:text-like-sm">
                            {{ $item->get('label') }}
                        </a>
                        @endforeach
                    </div>

                    <div>
                        <img class="block w-full"
                            src="{{ asset($sitemap->component('contact.image', 'navigation')->get('path'), ['width' => '640', 'format' => 'jpg']) }}"
                            srcset="{{ asset($sitemap->component('contact.image', 'navigation')->get('path'), ['width' => '1024', 'format' => 'jpg']) }} 2x"
                            alt="{{ $sitemap->component('contact.image', 'navigation')->get('alt') }}">
                    </div>
                </div>
            </div>
        </slide-to-left>
    </nav>
</nav-menu>
