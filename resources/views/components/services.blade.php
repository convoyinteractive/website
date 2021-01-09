<div {{ $component->attributes("wrap") }}>
    @if($component->has('title'))
        <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    <ul {{ $component->attributes('items') }}>
        @foreach ($component->get('items') as $item)
            <li {{ $component->attributes('item') }}>
                <a href="{{ $item->get('link') }}" {{ $component->attributes('term') }}>
                    {{ $item->get('title') }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
