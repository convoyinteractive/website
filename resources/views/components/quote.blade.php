<div {{ $component->attributes("wrap") }}>
    <blockquote {{ $component->attributes('body') }}>
        <div {{ $component->attributes('cite') }}>
            {{ $component->get('body') }}
        </div>
        <footer {{ $component->attributes('author') }}>
            <div>
                <span {{ $component->attributes('author_name') }}>{{$component->get('author.name')}}</span>
                <span {{ $component->attributes('author_title') }}>{{ $component->get('author.title') }}</span>
            </div>
        </footer>
    </blockquote>
</div>
