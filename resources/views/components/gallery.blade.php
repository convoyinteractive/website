    <dragable {{ $attributes ?? '' }}>
        @foreach ($component->get('items', []) as $item)
            @include(view()->exists("components.{$item->type()}") ? "components.{$item->type()}" : "components.error", [
                'component' => $item,
                'attributes' => $content->attributes(['gallery.items', $item->type()])
            ])
        @endforeach
    </dragable>
