    @foreach ($component->items as $item)
    <div {{ $content->attributes(['process', $item->alias(), "wrap"]) }}>
        @if($item->has('title'))
        <div {{ $content->attributes(['process', $item->alias(), "title"]) }}>
            {{ $item->get('title') }}
        </div>
        @endif
            @include($item->view(), [
                'component' => $item,
                'attributes' => $content->attributes(['process', $item->alias(), "component"]),
            ])
    </div>
    @endforeach
