    <div class="{{ $class ?? '' }}" dragable>
        @foreach ($component->get('items', []) as $item)
            @include(view()->exists("components.{$item->type()}") ? "components.{$item->type()}" : "components.error", [
                'component' => $item,
                'class' => 'w-6/10 lg:w-4/10 flex-shrink-0',
            ])
        @endforeach
    </div>
