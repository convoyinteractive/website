<div {{ $component->attributes("wrap") }}>
    @if($component->has('title'))
        <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    <dl {{ $component->attributes('body') }}>
        @foreach ($component->get('items', []) as $item)
            <dt {{ $content->attributes('definition.term') }}>
                {{ $item->get('term') }}
            </dt>
            <dd {{ $content->attributes('definition.item') }}>
                @include($item->view(), ['component' => $item])
            </dd>
        @endforeach
    </dl>
</div>
