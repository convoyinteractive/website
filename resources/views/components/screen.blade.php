<figure {{ $component->attributes('wrap') }}>
    <div {{ $component->attributes('canvas') }} style="{{ $content->theme() }}">
        <div class="max-h-full max-w-full flex items-center justify-center">
            @if($component->isVideo())
                <video {{ $component->attributes('item') }} src="{{ $component->url() }}" playsinline autoplay muted loop></video>
            @endif

            @if($component->isImage())
            <picture class="w-full h-full">
                @if($component->has('sizes'))
                    <source media="(min-width: 500px)" srcset="{{ $component->url('large') }}">
                    <img {{ $component->attributes('item') }} src="{{ $component->url('small') }}" alt="{{ $component->get('alt') }}">
                @elseif($component->has('path'))
                    <img {{ $component->attributes('item') }} src="{{ $component->url() }}" alt="{{ $component->get('alt') }}">
                @endif
            </picture>
            @endif
        </div>
    </div>

    @if($component->has('caption'))
        <figcaption {{ $component->attributes('caption') }}>
            {{ $component->get('caption') }}
        </figcaption>
    @endif
    </figure>
