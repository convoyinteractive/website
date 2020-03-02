<figure>
    <div class="bg-gray p-6 flex justify-center items-center">
        <picture>
            <source media="(min-width: 500px)" srcset="{{ $component->get('sizes.large') }}">
            <img src="{{ $component->get('sizes.small') }}" alt="{{ $component->get('alt') }}">
        </picture>
    </div>

    @if($component->has('caption'))
        <figcaption class="text-center">
            {{ $component->get('caption') }}
        </figcaption>
    @endif
</figure>
