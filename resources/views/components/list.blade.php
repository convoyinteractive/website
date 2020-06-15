<ul {{ $attributes ?? '' }}>
    @foreach ($component->get('items', []) as $item)
        <li class="py-10 border-dotted border-t-2 border-black">
            @include($item->view(), [
                'component' => $item,
                'attributes' => $content->attributes(['list.items', $item->type()]),
            ])
        </li>
    @endforeach
</ul>
