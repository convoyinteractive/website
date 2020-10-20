<div class="px-6 md:px-10 lg:px-20 xl:px-screen-20 my-10 md:my-20 lg:my-40 xl:my-screen-40">
@foreach ($component->get('items', []) as $item)
    <div class="lg:w-7/12 mb-6 md:mb-10 lg:mb-20 xl:mb-screen-20 {{ $loop->even ? 'ml-auto' : 'mr-auto'}}">
        @include($item->view(), [
            'component' => $item,
            'attributes' => $content->attributes(['feed.items', $item->type()]),
        ])
    </div>
@endforeach
</div>
