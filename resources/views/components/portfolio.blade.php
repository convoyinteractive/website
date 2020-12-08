{{-- <scrollable>
    @foreach ($component->get('items', []) as $item)
    <a {{ $component->attributes('item') }} href="{{ $item->link }}">
        <h3 {{ $component->attributes('heading') }}>
            {{ $item->get('title') }}
        </h3>
            @include($item->view(), [
                'component' => $item,
            ])

        </a>
    @endforeach
</scrollable> --}}


<div {{ $component->attributes("wrap") }}>
    @if($component->has('title'))
        <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    <scrollable {{ $component->attributes('stage') }}>
        @foreach ($component->get('items', []) as $item)
            <div {{ $component->attributes("item") }}>
                @include($item->view(), ['component' => $item])
                @include($item->addon->view(), ['component' => $item->addon])
            </div>
        @endforeach
    </scrollable>
</div>
