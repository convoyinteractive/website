<div class="flex items-center justify-between sm:justify-start space-x-10 xl:space-x-screen-10">
    @foreach ($socials as $item)
    <a
        href="{{ $item->get('url') }}"
        target="_blank" rel="noopener"
        title="{{ $item->get('plattform')}}: {{'@'}}{{$item->get('handle')}}"
        class="text-white block w-6 xl:w-screen-6 h-6 xl:h-screen-6 focus:outline-none focus:text-gray-mid
    ">
        {{ $item->get('addon')->html() }}
    </a>
    @endforeach
</div>
