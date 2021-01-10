<figure {{ $component->attributes('wrap') }}>
    <div {{ $component->attributes('canvas') }} style="{{ $content->theme() }}">
        <div class="max-h-full max-w-full flex items-center justify-center">
            @include('components/_asset')
        </div>
    </div>

    @if($component->has('caption'))
        <figcaption {{ $component->attributes('caption') }}>
            {{ $component->get('caption') }}
        </figcaption>
    @endif
    </figure>
