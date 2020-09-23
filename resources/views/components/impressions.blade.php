<scrollable {{ $attributes ?? '' }}>
    @foreach ($component->get('items', []) as $item)
        <div {{ $content->attributes(
            ['impressions.item'],
            ['style' => (string) $content->theme()],
        ) }}>
            @include($item->view(), [
                'component' => $item,
                'attributes' => $content->attributes(['impressions.items', $item->alias()])
            ])
        </div>
    @endforeach
</scrollable>
