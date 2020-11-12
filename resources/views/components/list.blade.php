<div {{ $component->attributes("wrap") }}>
    @if($component->has('title'))
        <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    <ul {{ $component->attributes('body') }}>
        @foreach ($component->get('items', []) as $item)
            <li {{ $component->attributes('item') }}>
                @include($item->view(), ['component' => $item])
            </li>
        @endforeach
    </ul>
</div>
