<div {{ $component->attributes("wrap") }}>

    @if($component->has('title'))
        <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    <div {{ $component->attributes("body") }}>
        {{ $component->html() }}
    </div>

    @if($component->has('caption'))
        <div {{ $component->attributes('caption') }}>
            {{ $component->get('caption') }}
        </div>
    @endif
</div>
