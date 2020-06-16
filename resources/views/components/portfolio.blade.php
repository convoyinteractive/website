<scrollable {{ $attributes ?? '' }}>
    @foreach ($component->get('items', []) as $item)
        <div {{ $content->attributes(['portfolio.item']) }}>
            <h3 {{ $content->attributes(['portfolio.heading']) }}>
                {{ $item->get('title') }}
            </h3>
            @include($item->view(), [
                'component' => $item,
                'attributes' => $content->attributes(['portfolio.items', $item->alias()])
            ])
        </div>
    @endforeach
</scrollable>
