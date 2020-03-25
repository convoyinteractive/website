<nav-menu inline-template>
    <nav v-click-away="close">
        <off-canvas>
            <div v-show="isOpen" class="bg-gray fixed inset-y-0 right-0 px-6 pt-20 w-full max-w-lg">
                <div v-show="isActive('about')">
                    @foreach($navigation['about'] as $item)
                        <a href="{{ $item->get('path') }}" class="block font-sans font-bold text-4xl mb-10">
                            {{ $item->get('label') }}
                        </a>
                    @endforeach
                </div>
                <div v-show="isActive('cases')">
                    Cases
                </div>
                <div v-show="isActive('contact')">
                    Contact
                </div>
            </div>
        </off-canvas>

        <div class="fixed top-0 inset-x-0 py-6 px-12 flex items-center justify-end">
            <button @click="open('about')" class="font-sans text-sm mr-5">
                {{ __('About') }}
            </button>

            <button @click="open('cases')" class="font-sans text-sm mr-5">
                {{ __('Cases') }}
            </button>

            <button @click="open('contact')" class="font-sans text-sm mr-0">
                {{ __('Contact') }}
            </button>
        </div>
    </nav>
</nav-menu>
