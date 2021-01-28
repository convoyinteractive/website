<div {{ $component->attributes("wrap") }}>
    <blockquote {{ $component->attributes('body') }}>
        <div {{ $component->attributes('cite') }}>
            {{ $component->get('body') }}
        </div>
        <footer {{ $component->attributes('author') }}>
            @if($component->has('author.image'))
            <div {{ $component->attributes('avatar') }}>
                <picture class="block w-full">
                    <source type="image/webp"
                        srcset="{{ asset($component->get('author.image'), ['format' => 'webp', 'width' => 200, 'height' => 200, 'crop' => true]) }},
                            {{ asset($component->get('author.image'), ['format' => 'webp', 'width' => 400, 'height' => 400, 'crop' => true]) }} 2x"
                    >
                    <img class="block w-full"
                        src="{{ asset($component->get('author.image'), ['format' => 'png', 'width' => 200, 'height' => 200, 'crop' => true]) }}"
                        srcset="{{ asset($component->get('author.image'), ['format' => 'png', 'width' => 400, 'height' => 400, 'crop' => true]) }} 2x"
                        alt="{{ $component->get('author.name') }}"
                    >
                </picture>
            </div>
            @endif
            <div>
                <span {{ $component->attributes('author_name') }}>{{$component->get('author.name')}}</span>
                <span {{ $component->attributes('author_title') }}>{{ $component->get('author.title') }}</span>
            </div>
        </footer>
    </blockquote>
</div>
