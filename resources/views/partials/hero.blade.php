@if($content->has('meta.title'))
    <div class="px-6 py-12 md:py-32 lg:py-50 lg:w-5/6 mx-auto">
        <h1 class="text-6 md:text-10 lg:text-16 bold uppercase">{{ $content->get('meta.title') }}</h1>
        {{ $content->get('meta.subtitle') }}
    </div>
@endif

@if($content->has('meta.image'))
    <picture class="block w-full">
        <source media="(min-width: 500px)" srcset="{{ $content->get('meta.image.sizes.large') }}">
        <img class="block w-full" src="{{ $content->get('meta.image.sizes.small') }}" alt="{{ $content->get('meta.image.alt') }}">
    </picture>
@endif
