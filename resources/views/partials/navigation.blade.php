<nav-menu inline-template>
    <nav>
        <off-canvas>
            <div v-show="isOpen" class="bg-gray fixed inset-y-0 right-0 px-6 pt-20">
                Load menu items...
            </div>
        </off-canvas>

        <div class="relative flex items-center justify-end">
            <button @click="toggle">Toogle Off Canvas</button>
        </div>
    </nav>
</nav-menu>

