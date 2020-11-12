<div {{ $component->attributes("wrap") }}>
    @if($component->has('title'))
        <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    <ul {{ $component->attributes('items') }}>
        @foreach ($component->get('items') as $item)
            <li {{ $component->attributes('item') }}>
                <div {{ $component->attributes('term') }}>
                    {{ $item->get('title') }}
                </div>
            </li>
        @endforeach
    </ul>
</div>
