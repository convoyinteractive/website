@if($component->isVideo())
    <video {{ $component->attributes('item') }} src="{{ $component->url() }}" playsinline autoplay muted loop></video>
@endif

@if($component->isImage())
    <picture {{ $component->attributes('item') }}>
        @if($component->has('sizes'))
            <source
                media="(min-width: 500px)"
                srcset="{{ $component->url('large', 1) }}, {{ $component->url('large', 2) }} 2x"
            >
            <img {{ $component->attributes('item') }}
                src="{{ $component->url('small') }}"
                srcset="{{ $component->url('small', 2) }} 2x"
                alt="{{ $component->get('alt') }}"
            >
        @elseif($component->has('path'))
            <img {{ $component->attributes('item') }}
                src="{{ $component->url(null, 1) }}"
                srcset="{{ $component->url(null, 2) }} 2x"
                alt="{{ $component->get('alt') }}"
            >
        @endif
    </picture>
@endif
