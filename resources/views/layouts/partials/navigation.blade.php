<nav-menu inline-template>
    <nav v-click-away="close" @keydown.esc="close" tabindex="0">
        <slide-from-right>
            <div v-show="isOpen" class="fixed bg-black opacity-25 inset-y-0 right-0 w-full pointer-events-none"></div>
        </slide-from-right>
        <slide-from-right>
            <div v-show="isOpen" class="bg-white text-black fixed inset-y-0 right-0 px-6 pt-20 w-full max-w-lg">
                <div v-show="isActive('about')">
                    @foreach($navigation['about'] as $item)
                    <a href="{{ $item->get('path') }}" class="block font-sans font-bold text-4xl mb-10">
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

        <div class="fixed inset-x-0 bottom-0 sm:bottom-auto sm:top-0 p-6 sm:px-12">
            <div class="flex items-center rounded-full bg-white sm:bg-transparent shadow sm:shadow-none justify-between sm:justify-end">
                <button @click="toggle('about')" class="font-sans text-sm text-center flex-grow sm:flex-grow-0 p-4 sm:p-0 sm:mr-5">
                    {{ __('About') }}
                </button>

                <button @click="toggle('cases')" class="font-sans text-sm text-center flex-grow sm:flex-grow-0 p-4 sm:p-0 sm:mr-5">
                    {{ __('Cases') }}
                </button>

                <button @click="toggle('contact')" class="font-sans text-sm text-center flex-grow sm:flex-grow-0 p-4 sm:p-0 sm:mr-0">
                    {{ __('Contact') }}
                </button>
            </div>
        </div>
    </nav>
</nav-menu>
