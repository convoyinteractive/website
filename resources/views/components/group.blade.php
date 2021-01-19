<div {{ $component->attributes("wrap") }}>
    @if($component->has('title'))
        <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    <div {{ $component->attributes('grid') }}>
        @foreach ($component->get('items', []) as $item)
            <div class="w-full {{ count($component->get('items')) === 3 ? 'md:w-4/12' : 'md:w-6/12' }}">
                <div {{ $component->attributes('item') }}>
                    @include($item->view(), ['component' => $item])
                </div>
            </div>
        @endforeach
    </div>

    @if($component->has('caption'))
        <div {{ $component->attributes('caption') }}>
            {{ $component->get('caption') }}
        </div>
    @endif
</div>
