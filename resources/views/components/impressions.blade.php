<scrollable {{ $attributes ?? '' }}>
    @foreach ($component->get('items', []) as $item)
        <div {{ $content->attributes(['impressions.item']) }}>
            @include($item->view(), [
                'component' => $item,
                'attributes' => $content->attributes(['impressions.items', $item->alias()])
            ])
        </div>
    @endforeach
</scrollable>
