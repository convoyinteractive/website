<figure {{ $component->attributes('wrap') }}>
    <div {{ $component->attributes('canvas') }} style="{{ $content->theme() }}">
        <div class="max-h-full max-w-full flex items-center justify-center">
            @if($component->isVideo())
                <video {{ $component->attributes('item') }} src="{{ asset($component->get('path'), []) }}" playsinline autoplay muted loop></video>
            @endif

            @if($component->isImage())
            <picture class="w-full h-full">
                @if($component->has('sizes'))
                    <source media="(min-width: 500px)" srcset="{{ asset($component->get('sizes.large'), [
                        'format' => $component->format()
                    ]) }}">
                    <img {{ $component->attributes('item') }} src="{{ asset($component->get('sizes.small'), [
                        'format' => $component->format()
                    ]) }}" alt="{{ $component->get('alt') }}">
                @elseif($component->has('path'))
                    <img {{ $component->attributes('item') }} src="{{ asset($component->get('path'), [
                        'format' => $component->format()
                    ]) }}" alt="{{ $component->get('alt') }}">
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
