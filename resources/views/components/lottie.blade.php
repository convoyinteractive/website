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

    <draw-svg from="/{{ $component->get('path') }}" {{ $component->attributes('body') }} mode="{{ $component->get('mode', 'inview') }}"></draw-svg>
</div>
