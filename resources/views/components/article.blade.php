<a {{ $component->attributes('wrap') }} href="{{ $component->path() }}">

    <picture {{ $component->attributes('image') }}>
        <source type="image/webp"
            srcset="{{ asset($component->get('meta.image'), [
                'width' => '640',
                'height' => '400',
                'format' => 'webp',
                'crop' => true,
            ]) }}"
        >
        <img {{ $component->attributes('image') }}
            alt="{{ $component->get('meta.title') }}"
            src="{{ asset($component->get('meta.image'), [
                'width' => '640',
                'height' => '400',
                'format' => 'jpg',
                'crop' => true,
            ]) }}"
        >
    </picture>

    <span {{ $component->attributes('title') }}>{{ $component->get('hero.title') }}</span>
    <span {{ $component->attributes('subtitle') }}>{{ $component->get('hero.subtitle') }}</span>
</a>
