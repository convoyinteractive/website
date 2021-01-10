<div {{ $component->attributes('wrap') }}>
    <div {{ $component->attributes('canvas') }} style="{{$content->theme()}}">
        <phone color="{{ $component->get('color', '#000000') }}">
            @include('components/_asset')
        </phone>
    </div>
</div>
