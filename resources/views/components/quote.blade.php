<figure class="{{ $class ?? '' }}">
    <div class="lg:w-10/12 lg:flex items-center justify-between flex-row-reverse mx-auto">
        <blockquote class="block lg:w-7/10 my-10 px-6 font-sans text-3xl xl:text-like-3xl leading-normal font-semibold">
            <p>{{ $component->get('body') }}</p>
        </blockquote>
        <figcaption class="block lg:w-2/10  my-10 px-6">
            <span class="block font-sans text-lg xl:text-like-lg font-semibold">{{$component->get('author.name')}}</span>
            <span class="block font-serif text-lg xl:text-like-lg">{{ $component->get('author.title') }}</span>
        </figcaption>
    </div>
</figure>
