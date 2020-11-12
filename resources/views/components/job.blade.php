@foreach ($component->get('items', []) as $item)
    <div {{ $component->attributes('component') }}>
        @include($item->view(), [
            'component' => $item,
            'attributes' => $content->attributes(['list.items', $item->type()]),
        ])
    </div>
@endforeach
