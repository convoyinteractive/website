<div {{ $component->attributes("wrap") }}>
    @if($component->has('title'))
        <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    <dragable {{ $component->attributes('body') }} v-cursor="{
        type: 'text',
        label: 'Drag',
    }">
        @foreach ($component->get('items', []) as $item)
            @include($item->view(), ['component' => $item])
        @endforeach
    </dragable>
</div>
