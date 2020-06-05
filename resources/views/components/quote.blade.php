<blockquote {{ $attributes }}>
    <div {{ $content->attributes('quote.body') }}>
        <p>{{ $component->get('body') }}</p>
    </div>
    <footer {{ $content->attributes('quote.author') }}>
        <span class="block font-sans text-lg xl:text-like-lg font-semibold">{{$component->get('author.name')}}</span>
        <span class="block font-serif text-lg xl:text-like-lg">{{ $component->get('author.title') }}</span>
    </footer>
</blockquote>
