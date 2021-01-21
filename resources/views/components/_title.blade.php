@if($component->has('title') || $component->has('subtitle'))
    <div {{ $component->attributes("header") }}>
        @if($component->has('title'))
            <h1 {{ $component->attributes("title") }}>
                {{ $component->get('title') }}
            </h1>
        @endif
        @if($component->has('subtitle'))
            <div {{ $component->attributes("subtitle") }}>
                {{ $component->get('subtitle') }}
            </div>
        @endif
        @if($content->date())
            <time {{ $component->attributes("date") }} datetime="{{ $content->date() }}">
                {{ $content->date()->format("m-Y") }}
            </time>
        @endif
    </div>
@endif
