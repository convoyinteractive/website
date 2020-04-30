<ul class="{{ $class ?? '' }}">
    @foreach ($component->get('items', []) as $item)
        <li class="border-dotted border-t-2 border-black py-10">
            @include(
                view()->exists("components.{$item->type()}")
                    ? "components.{$item->type()}"
                    : "components.error",
                ['component' => $item]
            )
        </li>
    @endforeach
</ul>
