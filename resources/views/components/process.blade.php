    @foreach ($component->items as $item)
    <div {{ $content->attributes([$item->alias(), "wrap"]) }}>
        @if($item->has('title'))
        <div {{ $content->attributes([$item->alias(), "title"]) }}>
            {{ $item->get('title') }}
        </div>
        @endif
            @include($item->view(), [
                'component' => $item,
                'attributes' => $content->attributes([$item->alias(), "component"]),
            ])
    </div>
    @endforeach
