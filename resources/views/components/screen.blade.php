    <div {{ $attributes ?? ''}} style="{{ $content->theme() }}">
        <div class="max-h-full max-w-full flex items-center justify-center">
            @if($component->isVideo())
                <video {{$content->attributes(['screen.item'])}} src="{{ asset($component->get('path'), []) }}" playsinline autoplay muted loop></video>
            @endif

            @if($component->isImage())
            <picture class="w-full h-full">
                @if($component->has('sizes'))
                    <source media="(min-width: 500px)" srcset="{{ asset($component->get('sizes.large'), []) }}">
                    <img {{$content->attributes(['screen.item'])}} src="{{ asset($component->get('sizes.small'), []) }}" alt="{{ $component->get('alt') }}">
                @elseif($component->has('path'))
                    <img {{$content->attributes(['screen.item'])}} src="{{ asset($component->get('path'), []) }}" alt="{{ $component->get('alt') }}">
                @endif
            </picture>
            @endif
        </div>
    </div>

    @if($component->has('caption'))
        <figcaption class="px-10 font-sans text-center text-sm xl:text-like-sm">
            {{ $component->get('caption') }}
        </figcaption>
    @endif
