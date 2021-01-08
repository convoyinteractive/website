<div {{ $component->attributes("wrap") }}>

    @include('components/_title')

    <figure {{ $component->attributes('figure') }} aria-label="{{ $component->get('alt') }}">
        @if($component->isVideo())
            <video {{ $component->attributes('item') }} src="{{ $component->url() }}" playsinline autoplay muted loop></video>
        @endif

        @if($component->isImage())
            <picture {{ $component->attributes('item') }}>
                @if($component->has('sizes'))
                    <source media="(min-width: 500px)" srcset="{{ $component->url('large') }}">
                    <img {{ $component->attributes('item') }} src="{{ $component->url('small') }}" alt="{{ $component->get('alt') }}">
                @elseif($component->has('path'))
                    <img {{ $component->attributes('item') }} src="{{ $component->url() }}" alt="{{ $component->get('alt') }}">
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
