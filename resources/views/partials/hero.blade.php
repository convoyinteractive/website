@if($meta->has('title'))
    <div class="px-6 font-sans lg:w-5/6 mx-auto my-40">
        <h1 class="font-bold text-6xl">{{ $meta->get('title') }}</h1>
        <span class="block text-sm">{{ $meta->get('subtitle') }}</span>
    </div>
@endif

@if($meta->has('image'))
    <picture class="block w-full">
        <source media="(min-width: 500px)" srcset="{{ $meta->get('image.sizes.large') }}">
        <img class="block w-full" src="{{ $meta->get('image.sizes.small') }}" alt="{{ $meta->get('image.alt') }}">
    </picture>
@endif
