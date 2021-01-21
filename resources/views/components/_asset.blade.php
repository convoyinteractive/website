@if($component->isVideo())
    <video {{ $component->attributes('item', ['class' => 'focus:outline-none focus:shadow']) }} src="{{ $component->url() }}" poster="{{ $component->poster() }}" playsinline autoplay muted loop></video>
@endif

@if($component->isImage())
    <picture {{ $component->attributes('item') }}>
        @if($component->has('sizes'))
            <source
                media="(min-width: 500px)"
                srcset="{{ $component->url('large', 1) }}, {{ $component->url('large', 2) }} 2x"
                type="image/webp"
            >
            <source
                media="(min-width: 500px)"
                srcset="{{ $component->fallbackUrl('large', 1) }}, {{ $component->fallbackUrl('large', 2) }} 2x"
                type="{{ $component->alpha() ? 'image/png' : 'image/jpg' }}"
            >
            <source
                srcset="{{ $component->url('small') }}, {{ $component->url('small', 2) }} 2x"
                type="image/webp"
            >
            <img {{ $component->attributes('item') }}
                src="{{ $component->fallbackUrl('small') }}"
                srcset="{{ $component->fallbackUrl('small', 2) }} 2x"
                alt="{{ $component->get('alt') }}"
            >
        @elseif($component->has('path'))
            <source
                srcset="{{ $component->url(null, 1) }}, {{ $component->url(null, 2) }} 2x"
                type="image/webp"
            >
            <img {{ $component->attributes('item') }}
                src="{{ $component->fallbackUrl(null, 1) }}"
                srcset="{{ $component->fallbackUrl(null, 2) }} 2x"
                alt="{{ $component->get('alt') }}"
            >
        @endif
    </picture>
@endif
