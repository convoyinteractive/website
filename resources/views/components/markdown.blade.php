<div {{ $component->attributes("wrap") }}>
    @if($component->has('title'))
        <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    <div {{ $component->attributes('body', ['class' => 'markdown']) }}>
        {{ $component->html() }}
    </div>
</div>
