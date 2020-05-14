<dl class="{{ $class ?? '' }}">
    @foreach ($component->get('items', []) as $item)
        <dt class="mb-10 text-xl xl:text-like-xl font-sans font-semibold">{{ $item->get('term') }}</dt>
        <dd class="@if(! $loop->last) mb-10 pb-10 border-b-2 border-dotted @endif">
            @include(
                view()->exists("components.{$item->type()}")
                    ? "components.{$item->type()}"
                    : "components.error",
                [
                    'component' => $item,
                    'class' => '',
                ]
            )
        </dd>
    @endforeach
</dl>
