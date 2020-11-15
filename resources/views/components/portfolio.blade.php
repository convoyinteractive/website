<scrollable>
    {{-- TODO: Allow adding attributes --}}
    @foreach ($component->get('items', []) as $item)
        {{-- <{{ $item->has('link') ? 'a' : 'div' }} {{ $content->attributes(
            ['portfolio.item'],
            $item->has('link') ? ['href' => $item->link] : []
        ) }}>
            <h3 {{ $content->attributes(['portfolio.heading']) }}>
                {{ $item->get('title') }}
            </h3>
            @include($item->view(), [
                'component' => $item,
                'attributes' => $content->attributes(['portfolio.items', $item->alias()])
            ])
            <div class="mt-20 w-8/12">
                @include($item->addon->view(), [
                    'component' => $item->addon,
                    'attributes' => $content->attributes(['portfolio.items', $item->alias()])
                ])
            </div>
        <{{ $item->has('link') ? '/a' : '/div' }}> --}}
    @endforeach
</scrollable>
