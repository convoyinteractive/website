@foreach ($component->get('body', []) as $item)
    @include($item->view(), ['component' => $item])
@endforeach
<a href="{{ encode_email('mailto:jobs@convoyinteractive.com') }}" class="mt-10 lg:mt-20 xl:mt-screen-20 font-sans font-semibold inline-flex flex-row-reverse items-center focus:outline-none focus:text-shadow" v-button="['bg-white', 'text-black']">
    <span>{{ __('Apply now') }}</span>
</a>
