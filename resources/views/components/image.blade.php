<div {{ $component->attributes("wrap") }}>

    @if($component->has('title') || $component->has('subtitle'))
        <div {{ $component->attributes("header") }}>
            @if($component->has('title'))
                <div {{ $component->attributes("title") }}>
                    {{ $component->get('title') }}
                </div>
            @endif
            @if($component->has('subtitle'))
                <div {{ $component->attributes("subtitle") }}>
                    {{ $component->get('subtitle') }}
                </div>
            @endif
        </div>
    @endif

    <figure {{ $component->attributes('figure') }} aria-label="{{ $component->get('alt') }}">
        @if($component->isVideo())
            <video {{ $component->attributes('item') }} src="{{ asset($component->get('path'), []) }}" playsinline autoplay muted loop></video>
        @endif

        @if($component->isImage())
            <picture {{ $component->attributes('item') }}>
                @if($component->has('sizes'))
                    <source media="(min-width: 500px)" srcset="{{ asset($component->get('sizes.large'), []) }}">
                    <img src="{{ asset($component->get('sizes.small'), []) }}" alt="{{ $component->get('alt') }}">
                @elseif($component->has('path'))
                    <img src="{{ asset($component->get('path'), []) }}" alt="{{ $component->get('alt') }}">
                @endif
            </picture>
        @endif

        @if($component->has('caption'))
            <figcaption {{ $component->attributes('caption') }}>
                {{ $component->get('caption') }}
            </figcaption>
        @endif
    </figure>
</div>
