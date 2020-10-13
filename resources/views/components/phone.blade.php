<div {{ $attributes ?? ''}} style="{{$content->theme()}}">
    <phone>
        @if($component->isVideo())
            <video src="{{ asset($component->get('path'), []) }}" playsinline muted autoplay loop></video>
        @endif

        @if($component->isImage())
            <picture class="w-full">
                @if($component->has('sizes'))
                    <source media="(min-width: 500px)" srcset="{{ asset($component->get('sizes.large'), []) }}">
                    <img src="{{ asset($component->get('sizes.small'), []) }}" alt="{{ $component->get('alt') }}" class="w-full">
                @elseif($component->has('path'))
                    <img class="w-full" {{$content->attributes(['image.item'])}} src="{{ asset($component->get('path'), []) }}" alt="{{ $component->get('alt') }}">
                @endif
            </picture>
        @endif
    </phone>
</div>
