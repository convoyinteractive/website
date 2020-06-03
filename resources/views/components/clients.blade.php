<ul class="flex flex-wrap px-5 sm:px-15 xl:px-screen-15">
@foreach ($component->get('items') as $item)
    <li class="block w-3/12 p-5 xl:p-screen-5">
        <div class="flex items-center justify-center w-full h-full bg-gray p-10 xl:p-screen-10">
            <img
                src="{{ asset($item->get('path'), ['format' => 'png']) }}"
                alt="{{ $item->get('alt') }}"
            >
        </div>
    </li>
@endforeach
</ul>
