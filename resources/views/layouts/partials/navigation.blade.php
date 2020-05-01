<nav-menu inline-template>
    <nav v-click-away="close" @keydown.esc="close" tabindex="0" class="focus:outline-none">
        <fade-in-out>
            <div v-show="isOpen" aria-hidden="true">
                <div class="fixed bg-black opacity-25 inset-y-0 right-0 w-full pointer-events-none"></div>
            </div>
        </fade-in-out>
        <slide-from-right>
            <div v-show="isOpen" class="bg-white text-black fixed inset-y-0 right-0 pl-6 pr-12 sm:-mr-6 overflow-y-auto pt-20 w-full sm:w-8/12 md:w-6/12 lg:w-4/12">
                <div v-show="isActive('about')">
                    @foreach($navigation['about'] as $item)
                    <a href="{{ $item->get('path') }}" class="block font-sans font-bold text-3xl xl:text-like-3xl mb-10">
                        {{ $item->get('label') }}
                    </a>
                    @endforeach
                </div>
                <div v-show="isActive('cases')">
                    @foreach($navigation['cases'] as $item)
                    {{ var_dump($item) }}
                    @endforeach
                </div>
                <div v-show="isActive('contact')">
                    Contact
                </div>
            </div>
        </slide-from-right>

        <div class="fixed inset-x-0 bottom-0 sm:bottom-auto sm:top-0 p-6 sm:px-12 text-black">
            <div class="flex items-center rounded-full bg-white sm:bg-transparent shadow sm:shadow-none justify-between sm:justify-end sm:space-x-10">
                @foreach(['about', 'cases', 'contact'] as $item)
                <button @click="toggle('{{$item}}')" class="font-sans text-sm xl:text-like-sm text-center flex-grow sm:flex-grow-0 p-4 sm:p-0">
                    {{ __(ucwords($item)) }}
                </button>
                @endforeach
            </div>
        </div>
    </nav>
</nav-menu>
