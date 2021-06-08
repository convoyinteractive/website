@foreach ($component->get('excerpt', []) as $item)
    @include($item->view(), ['component' => $item])
@endforeach
<a href="{{ $component->path() }}" class="mt-10 lg:mt-20 xl:mt-screen-20 font-sans font-semibold inline-flex flex-row-reverse text-white items-center focus:outline-none border border-dotted border-transparent focus:border-black focus:border-opacity-25" v-button>
    <span>{{ __('Apply now') }}</span>
</a>
