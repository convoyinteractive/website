<div {{ $component->attributes("wrap") }}>

    @if($component->has('title'))
        <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    <video-player inline-template>
        <div {{ $component->attributes('player') }}>
            <div class="relative">
                <video
                    v-cursor="{type: 'player'}"
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
                    <div {{ $component->attributes('controls') }} >
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
                        <div class="relative h-10 flex items-center">
                            <div class="h-1 w-full bg-gray absolute">
                                <div class="h-full bg-green pointer-events-none" :style="'width:' + progress + '%'"></div>
                            </div>
                            <input class="relative w-full h-full cursor-pointer opacity-0 z-50" type="range" min="0" max="100" @change="calculateAndUpdateProgress">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </video-player>

    @if($component->has('caption'))
    <div {{ $component->attributes('caption') }}>
        {{ $component->get('caption') }}
    </div>
@endif
</div>

