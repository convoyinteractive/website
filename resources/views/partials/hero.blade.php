@if($meta->has('title'))
    <div class="px-6 py-12 md:py-32 lg:py-50">
        <h1 class="text-6 md:text-10 lg:text-16 font-bold uppercase">{{ $meta->get('title') }}</h1>
        {{ $meta->get('subtitle') }}
    </div>
@endif

@if($meta->has('image'))
    <picture class="block w-full">
        <source media="(min-width: 500px)" srcset="{{ $meta->get('image.sizes.large') }}">
        <img class="block w-full" src="{{ $meta->get('image.sizes.small') }}" alt="{{ $meta->get('image.alt') }}">
    </picture>
@endif
