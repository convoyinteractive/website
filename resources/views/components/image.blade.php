<figure class="{{ $class ?? '' }}" aria-label="{{ $component->get('alt') }}">
    <div>
        <picture class="w-full pointer-events-none">
            <source media="(min-width: 500px)" srcset="{{ asset($component->get('sizes.large'), []) }}">
            <img class="w-full" src="{{ asset($component->get('sizes.small'), []) }}" alt="{{ $component->get('alt') }}">
        </picture>
    </div>

    @if($component->has('caption'))
        <figcaption class="px-10 font-sans text-center text-sm xl:text-like-sm">
            {{ $component->get('caption') }}
        </figcaption>
    @endif
</figure>
