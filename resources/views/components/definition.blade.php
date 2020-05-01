<dl class="{{ $class ?? '' }}">
    @foreach ($component->get('items', []) as $item)
        <dt class="lg:w-8/10 mx-auto mb-6 text-xl xl:text-like-xl font-sans font-semibold">{{ $item->get('term') }}</dt>
        <dd class="lg:w-8/10 mx-auto text-lg xl:text-like-lg  @if(! $loop->last) mb-12 pb-12 border-b-2 border-dotted @endif">
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
