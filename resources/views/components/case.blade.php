<a class="block font-sans mb-10 xl:mb-screen-10" href="/{{ implode('/', [app('translator')->getLocale(), $component->get('resource')]) }}">

    <img class="w-full block" src="{{ asset($component->has('meta.image.sizes') ? $component->get('meta.image.sizes.large') : $component->get('meta.image.path'), [
        'width' => '640',
        'height' => '400',
        'crop' => true,
    ]) }}" alt="{{ $component->get('meta.title') }}">

    <span class="block text-3xl xl:text-like-3xl font-semibold leading-snug">{{ $component->get('meta.title') }}</span>
    <span class="block text-sm xl:text-like-sm">{{ $component->get('meta.subtitle') }}</span>
</a>
