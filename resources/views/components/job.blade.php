@foreach ($component->get('items', []) as $item)
    <div {{ $component->attributes('component') }}>
        @include($item->view(), ['component' => $item])
    </div>
@endforeach
