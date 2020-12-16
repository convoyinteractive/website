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
