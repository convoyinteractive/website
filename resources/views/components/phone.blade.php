<div {{ $component->attributes('wrap') }}>
    <div {{ $component->attributes('canvas') }} style="{{$content->theme()}}">
        <phone color="{{ $component->get('color', '#000000') }}">
            @if($component->isVideo())
                <video class="w-full" src="{{ asset($component->get('path'), []) }}" playsinline muted autoplay loop></video>
            @endif

            @if($component->isImage())
            <picture class="w-full">
                @if($component->has('sizes'))
                    <source media="(min-width: 500px)" srcset="{{ asset($component->get('sizes.large'), [
                        'format' => $component->format()
                    ]) }}">
                    <img class="w-full" src="{{ asset($component->get('sizes.small'), [
                        'format' => $component->format()
                    ]) }}" alt="{{ $component->get('alt') }}">
                @elseif($component->has('path'))
                    <img class="w-full" src="{{ asset($component->get('path'), [
                        'format' => $component->format()
                    ]) }}" alt="{{ $component->get('alt') }}">
                @endif
            </picture>
            @endif
        </phone>
    </div>
</div>
