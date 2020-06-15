<dl {{ $attributes ?? '' }}>
    @foreach ($component->get('items', []) as $item)
        <dt {{ $content->attributes('definition.term') }}>{{ $item->get('term') }}</dt>
        <dd {{ $content->attributes('definition.item') }}>
            @include($item->view(), [
                'component' => $item,
                'attributes' => $content->attributes(['definition.items', $item->type()]),
            ])
        </dd>
    @endforeach
</dl>
