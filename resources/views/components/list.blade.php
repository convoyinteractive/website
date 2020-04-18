<ul class="{{ $class ?? '' }}">
    @foreach ($component->get('items', []) as $item)
        <li>
            @include(
                view()->exists("components.{$item->type()}")
                    ? "components.{$item->type()}"
                    : "components.error",
                ['component' => $item]
            )
        </li>
    @endforeach
</ul>
