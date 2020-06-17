<figure {{ $attributes ?? ''}} aria-label="{{ $component->get('alt') }}">
    <div class="max-h-full max-w-full">
        <picture class="pointer-events-none max-h-full max-w-full mx-auto">
            <source media="(min-width: 500px)" srcset="{{ asset($component->get('sizes.large'), []) }}">
            <img class="max-h-full max-w-full mx-auto" src="{{ asset($component->get('sizes.small'), []) }}" alt="{{ $component->get('alt') }}">
        </picture>
    </div>

    @if($component->has('caption'))
        <figcaption class="px-10 font-sans text-center text-sm xl:text-like-sm">
            {{ $component->get('caption') }}
        </figcaption>
    @endif
</figure>
