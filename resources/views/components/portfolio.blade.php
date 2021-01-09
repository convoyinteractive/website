<div {{ $component->attributes("wrap") }}>
    @if($component->has('title'))
        <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    <scrollable {{ $component->attributes('stage') }}>
        @foreach ($component->get('items', []) as $item)
            <a href="{{ $item->get('link') }}" {{ $component->attributes("item") }}>
                @include($item->view(), ['component' => $item])
                @include($item->addon->view(), ['component' => $item->addon])
            </a>
        @endforeach
    </scrollable>
</div>
