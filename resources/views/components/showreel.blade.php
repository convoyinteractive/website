<fullscreen inline-template>
<div class="my-25" @keydown.esc="show = false">
    <button class="block w-full" aria-label="Play Showreel" @click="show = true" v-cursor="{
        type: 'text',
        label: 'Play Reel',
        size: 120
    }">
    <video class="block w-full" src="{{ asset($component->get('preview')) }}" playsinline muted loop autoplay></video>
    </button>

    <div ref="target" v-show="show" style="display: none" @fullscreenchange="handle" class="fixed top-0 z-50 w-full h-full bg-black text-white flex items-center p-10">
        <button class="absolute top-0 right-0 py-5 px-10 font-sans text-sm" @click="show = false">Close (ESC)</button>
        <video-player inline-template :autoplay="show" :cursor="false">
            <div class="relative w-full">
                    <video
                        class="w-full max-h-full"
                        ref="video"
                        @mousemove="showControls(4)"
                        @click="paused = !paused"
                        @durationchage="updateTime"
                        @timeupdate="updateTime"
                        @ended="reset"
                        playsinline
                        src="{{ asset($component->get('path')) }}"
                    ></video>

                    <div
                        class="absolute bottom-0 left-0 w-full"
                        v-show="controls.show"
                        @mouseenter="showControls"
                        @mouseleave="showControls(2)"
                    >
                        <div class="p-6 space-y-6 text-white">
                            <div class="flex justify-between text-sm font-sans">
                                <button class="cursor-pointer" @click="paused = !paused">
                                    <span v-show="paused">Play</span>
                                    <span v-show="!paused">Pause</span>
                                </button>
                                <button class="cursor-pointer" @click="muted = !muted">
                                    <span v-show="muted">Unmute</span>
                                    <span v-show="!muted">Mute</span>
                                </button>
                            </div>
                            <div class="h-1 bg-gray cursor-pointer" @click="calculateAndUpdateProgress">
                                <div class="h-full bg-green pointer-events-none" :style="'width:' + progress + '%'"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </video-player>
    </div>
</div>
</fullscreen>
