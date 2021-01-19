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
        @if($content->date())
            <div {{ $component->attributes("date") }}>
                {{ $content->date()->format("m-Y") }}
            </div>
        @endif
    </div>
@endif
