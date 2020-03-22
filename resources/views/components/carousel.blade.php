<div class="{{ $class ?? '' }}">
    @foreach($component->items() as $item)
        @include("components.{$item->type()}", [
            'component' => $item
        ])
    @endforeach
</div>
