<div class="px-3 md:px-5 lg:px-10 xl:px-screen-10 my-10 md:my-20 lg:my-40 xl:my-screen-40 block md:flex md:flex-wrap lg:block">
@foreach ($component->get('items', []) as $item)
    @if($item->isType('case'))
        <div class="px-3 md:px-5 lg:px-10 xl:px-screen-10 md:w-7/12 mt-6 md:mt-10 lg:mt-25 xl:mt-screen-25 {{ $loop->even ? 'ml-auto' : 'mr-auto'}}">
            @include($item->view(), ['component' => $item])
        </div>
    @endif
    @if($item->isType('article'))
        <div class="px-3 md:px-5 lg:px-10 xl:px-screen-10 md:w-5/12 lg:w-4/12 mt-6 md:mt-10 lg:-mb-50 lg:-mt-50 xl:-mb-screen-50 xl:-mt-screen-50 {{ $loop->even ? 'ml-auto' : 'mr-auto'}} article">
            @include($item->view(), ['component' => $item])
        </div>
    @endif
@endforeach
</div>
