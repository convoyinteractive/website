<a {{ $component->attributes('wrap') }} href="/{{ implode('/', [app('translator')->getLocale(), $component->get('resource')]) }}">
    <span {{ $component->attributes('image') }} data-theme='@json($component->theme())'>
        <picture class="w-full block">
            <source type="image/webp" srcset="
                {{ asset($component->get('meta.image'), ['width' => '640', 'height' => '400', 'format' => 'webp', 'crop' => true ]) }},
                {{ asset($component->get('meta.image'), ['width' => '1024', 'height' => '640', 'format' => 'webp', 'crop' => true ]) }} 2x
            ">
            <img class="w-full block"
                alt="{{ $component->get('meta.title') }}"
                src="{{ asset($component->get('meta.image'), ['width' => '640', 'height' => '400', 'format' => 'jpg', 'crop' => true]) }}"
                srcset="{{ asset($component->get('meta.image'), ['width' => '1024', 'height' => '640', 'format' => 'jpg', 'crop' => true ]) }} 2x"
            >
        </picture>
    </span>
    <span {{ $component->attributes('title') }}>{{ $component->get('hero.title') }}</span>
    <span {{ $component->attributes('subtitle') }}>{{ $component->get('hero.subtitle') }}</span>
</a>
