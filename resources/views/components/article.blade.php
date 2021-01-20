<a {{ $component->attributes('wrap') }} href="{{ $component->path() }}">

    <img {{ $component->attributes('image') }}
        alt="{{ $component->get('meta.title') }}"
        src="{{ asset($component->get('meta.image'), [
            'width' => '640',
            'height' => '400',
            'format' => 'jpg',
            'crop' => true,
        ]) }}"
    >

    <span {{ $component->attributes('title') }}>{{ $component->get('hero.title') }}</span>
    <span {{ $component->attributes('subtitle') }}>{{ $component->get('hero.subtitle') }}</span>
</a>
