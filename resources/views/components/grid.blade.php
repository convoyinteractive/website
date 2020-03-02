<div class="flex flex-wrap px-3 -mx-6">
    @foreach($component->items() as $item)
        <div class="p-3 w-full {{ count($component->items()) % 2 === 0 ? 'md:w-1/2' : 'md:w-1/3' }}">
            @include("components.{$item->type()}", [
                'component' => $item
            ])
        </div>
    @endforeach
</div>
