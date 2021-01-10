<div {{ $component->attributes("wrap") }}>

    @include('components/_title')

    <figure {{ $component->attributes('figure') }} aria-label="{{ $component->get('alt') }}">

        @include('components/_asset')

        @if($component->has('caption'))
            <figcaption {{ $component->attributes('caption') }}>
                {{ $component->get('caption') }}
            </figcaption>
        @endif
    </figure>
</div>
