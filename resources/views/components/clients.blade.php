<div {{ $component->attributes("wrap") }}>
    @if($component->has('title'))
        <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    <ul {{ $component->attributes('items') }}>
        @foreach ($component->get('items') as $item)
            <li {{ $component->attributes('item') }}>
                <div {{ $component->attributes('card') }}>
                    <img {{ $component->attributes('image') }} alt="{{ $item->get('alt') }}" src="{{ asset($item->get('path'), [
                        'format' => 'png',
                        'portrait_height' => 240,
                        'landscape_width' => 400,
                    ]) }}">
                </div>
            </li>
        @endforeach
    </ul>
</div>
