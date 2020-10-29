<video-player inline-template>
    <div {{$attributes ?? ''}}>
        <div class="relative">
            <video
                v-cursor="'player'"
                ref="video"
                class="w-full"
                @mousemove="showControls(4)"
                @click="paused = !paused"
                @durationchage="updateTime"
                @timeupdate="updateTime"
                @ended="reset"
                playsinline
                poster="{{ asset($component->get('poster')) }}"
                src="{{ asset($component->get('path')) }}"
            ></video>

            <div
                class="absolute bottom-0 left-0 w-full"
                v-show="controls.show"
                @mouseenter="showControls"
                @mouseleave="showControls(2)"
            >
                <div {{ $content->attributes([$component->alias(), 'controls']) }} >
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
    </div>
</video-player>
