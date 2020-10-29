    <dragable {{ $attributes ?? '' }} v-cursor="{
        type: 'text',
        label: 'Drag',
    }">
        @foreach ($component->get('items', []) as $item)
            @include($item->view(), [
                'component' => $item,
                'attributes' => $content->attributes(['gallery.items', $item->type()])
            ])
        @endforeach
    </dragable>
