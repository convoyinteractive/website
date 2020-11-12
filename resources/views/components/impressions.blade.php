<div {{ $component->attributes("wrap") }}>
    @if($component->has('title'))
        <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    <scrollable {{ $component->attributes('stage') }}>
        @foreach ($component->get('items', []) as $item)
            @include($item->view(), ['component' => $item])
        @endforeach
    </scrollable>
</div>
