<div {{ $attributes ?? ''}}>
    <phone>
        @if($component->has('sizes'))
        <picture class="w-full">
            <source media="(min-width: 500px)" srcset="{{ asset($component->get('sizes.large'), []) }}">
            <img src="{{ asset($component->get('sizes.small'), []) }}" alt="{{ $component->get('alt') }}" class="w-full">
        </picture>
        @elseif($component->has('path'))
            <img class="w-full" {{$content->attributes(['image.item'])}} src="{{ asset($component->get('path'), []) }}" alt="{{ $component->get('alt') }}">
        @endif
    </phone>
</div>
