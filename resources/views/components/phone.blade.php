<div {{ $attributes ?? ''}}>
    <phone>
        <picture class="w-full">
            <source media="(min-width: 500px)" srcset="{{ asset($component->get('sizes.large'), []) }}">
            <img src="{{ asset($component->get('sizes.small'), []) }}" alt="{{ $component->get('alt') }}" class="w-full">
        </picture>
    </phone>
</div>
