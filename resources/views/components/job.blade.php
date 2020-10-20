@foreach ($component->get('items', []) as $item)
    <div {{ $attributes ?? '' }}>
        @include($item->view(), [
            'component' => $item,
            'attributes' => $content->attributes(['list.items', $item->type()]),
        ])
    </div>
@endforeach
