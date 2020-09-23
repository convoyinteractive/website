<div {{ $attributes ?? '' }}>
    @foreach ($component->get('items', []) as $item)
        <div {{ $content->attributes(['group.item']) }}>
            @include($item->view(), [
                'component' => $item,
                'attributes' => $content->attributes(
                    ['group.items', $item->alias()],
                    ['style' => (string) $content->theme()],
                ),
            ])
        </div>
    @endforeach
</div>
