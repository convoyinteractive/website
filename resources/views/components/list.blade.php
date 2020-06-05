<ul {{ $attributes ?? '' }}>
    @foreach ($component->get('items', []) as $item)
        <li class="py-10 border-dotted border-t-2 border-black">
            @include(view()->exists("components.{$item->type()}") ? "components.{$item->type()}" : "components.error", [
                'component' => $item,
                'attributes' => ''
            ])
        </li>
    @endforeach
</ul>
