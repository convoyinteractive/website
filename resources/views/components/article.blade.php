<a {{ $component->attributes('wrap') }} href="{{ $component->path() }}">
    <span {{ $component->attributes('image') }} data-theme='@json($component->theme())'>
        <picture class="w-full block">
            <source type="image/webp"
                srcset="{{ asset($component->get('meta.image'), [
                    'width' => '640',
                    'height' => '480',
                    'format' => 'webp',
                    'crop' => true,
                ]) }}"
            >
            <img {{ $component->attributes('image') }}
                alt="{{ $component->get('meta.title') }}"
                src="{{ asset($component->get('meta.image'), [
                    'width' => '640',
                    'height' => '480',
                    'format' => 'jpg',
                    'crop' => true,
                ]) }}"
            >
        </picture>
    </span>

    <span {{ $component->attributes('title') }}>{{ $component->get('hero.title') }}</span>
    <span {{ $component->attributes('subtitle') }}>{{ $component->get('hero.subtitle') }}</span>
</a>
