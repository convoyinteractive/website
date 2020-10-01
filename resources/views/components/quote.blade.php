<blockquote {{ $attributes }}>
    <div {{ $content->attributes('quote.body') }}>
        <p>{{ $component->get('body') }}</p>
    </div>
    <footer {{ $content->attributes('quote.author') }}>
        <span class="block font-semibold">{{$component->get('author.name')}}</span>
        <span class="block text-sm lg:text-like-sm">{{ $component->get('author.title') }}</span>
    </footer>
</blockquote>
