<figure class="{{ $class ?? '' }}">
    <div class="lg:w-10/12 lg:flex items-center justify-between flex-row-reverse mx-auto">
        <blockquote class="block px-10 my-10 lg:w-7/10 font-sans text-3xl xl:text-like-3xl leading-normal font-semibold">
            <p>{{ $component->get('body') }}</p>
        </blockquote>
        <figcaption class="block px-10 my-10 lg:w-3/10 xl:w-2/10">
            <span class="block font-sans text-lg xl:text-like-lg font-semibold">{{$component->get('author.name')}}</span>
            <span class="block font-serif text-lg xl:text-like-lg">{{ $component->get('author.title') }}</span>
        </figcaption>
    </div>
</figure>
