    <dragable {{ $attributes ?? '' }}>
        @foreach ($component->get('items', []) as $item)
            @include($item->view(), [
                'component' => $item,
                'attributes' => $content->attributes(['gallery.items', $item->type()])
            ])
        @endforeach
    </dragable>
