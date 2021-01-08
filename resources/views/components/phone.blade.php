<div {{ $component->attributes('wrap') }}>
    <div {{ $component->attributes('canvas') }} style="{{$content->theme()}}">
        <phone color="{{ $component->get('color', '#000000') }}">
            @if($component->isVideo())
                <video class="w-full" src="{{ $component->url() }}" playsinline muted autoplay loop></video>
            @endif

            @if($component->isImage())
            <picture class="w-full">
                @if($component->has('sizes'))
                    <source media="(min-width: 500px)" srcset="{{ $component->url('large') }}">
                    <img class="w-full" src="{{ $component->url('small') }}" alt="{{ $component->get('alt') }}">
                @elseif($component->has('path'))
                    <img class="w-full" src="{{ $component->url() }}" alt="{{ $component->get('alt') }}">
                @endif
            </picture>
            @endif
        </phone>
    </div>
</div>
