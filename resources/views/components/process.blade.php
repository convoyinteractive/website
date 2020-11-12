<div {{ $component->attributes("wrap") }}>
    @if($component->has('title'))
         <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    @foreach ($component->items as $item)
        @include($item->view(), ['component' => $item])
    @endforeach
</div>
