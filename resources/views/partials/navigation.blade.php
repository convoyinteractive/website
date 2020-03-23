<nav-menu inline-template>
    <nav>
        <off-canvas>
            <div v-show="isOpen" class="bg-gray fixed inset-y-0 right-0 px-6 pt-20">
                <div>
                    @foreach($navigation['about'] as $item)
                        <a href="{{ $item->get('path') }}" class="block text-10 mb-10">
                            {{ $item->get('label') }}
                        </a>
                    @endforeach
                </div>
            </div>
        </off-canvas>

        <div class="relative flex items-center justify-end">
            <button @click="toggle">Toogle Off Canvas</button>
        </div>
    </nav>
</nav-menu>
