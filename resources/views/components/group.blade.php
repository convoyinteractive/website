<div {{ $attributes ?? '' }}>
    @foreach ($component->get('items', []) as $item)
        <div {{ $content->attributes(['group.item']) }}>
            @include($item->view(), [
                'component' => $item,
                'attributes' => $content->attributes(['group.items', $item->alias()]),
            ])
        </div>
    @endforeach
</div>
