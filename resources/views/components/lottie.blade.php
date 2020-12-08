<div {{ $component->attributes("wrap") }}>
    @if($component->has('title'))
        <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    <draw-svg from="/{{ $component->get('path') }}" {{ $component->attributes('body') }} mode="{{ $component->get('mode', 'inview') }}"></draw-svg>
</div>
