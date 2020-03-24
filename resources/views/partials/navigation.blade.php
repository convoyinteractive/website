<nav-menu inline-template>
    <nav v-click-away="close">
        <off-canvas>
            <div v-show="isOpen" class="bg-gray fixed inset-y-0 right-0 px-6 pt-20 w-full max-w-80">
                <div v-show="isActive('about')">
                    @foreach($navigation['about'] as $item)
                        <a href="{{ $item->get('path') }}" class="block text-10 mb-10">
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

        <div class="relative flex items-center justify-end">
            <button @click="open('about')" class="mr-5">
                {{ __('About') }}
            </button>

            <button @click="open('cases')" class="mr-5">
                {{ __('Cases') }}
            </button>

            <button @click="open('contact')" class="mr-0">
                {{ __('Contact') }}
            </button>
        </div>
    </nav>
</nav-menu>
