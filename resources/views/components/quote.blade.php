<figure class="{{ $class ?? '' }}">
    <div class="w-10/12 flex items-center flex-row-reverse mx-auto">
        <blockquote class="block w-7/10 px-6">
            <p>{{ $component->get('body') }}</p>
        </blockquote>
        <figcaption class="block w-3/10 px-6">
            {{$component->get('author.name')}} <br>
            {{ $component->get('author.title') }}
        </figcaption>
    </div>
</figure>
