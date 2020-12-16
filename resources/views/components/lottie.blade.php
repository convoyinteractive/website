<div {{ $component->attributes("wrap") }}>
    @include('components/_title')

    <draw-svg from="/{{ $component->get('path') }}" {{ $component->attributes('body') }} mode="{{ $component->get('mode', 'inview') }}"></draw-svg>
</div>
