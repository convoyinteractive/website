<div {{ $component->attributes("wrap") }}>
    @if($component->has('title'))
        <div {{ $component->attributes("title") }}>
            {{ $component->get('title') }}
        </div>
    @endif

    <ul {{ $component->attributes('items') }}>
        @foreach ($component->get('items') as $item)
            <li {{ $component->attributes('item') }}>
                <div {{ $component->attributes('card') }}>
                    <picture {{ $component->attributes('image') }}>
                        <source
                            srcset="{{ asset($item->get('path'), ['format' => 'webp', 'portrait_height' => 240, 'landscape_width' => 400]) }}, {{ asset($item->get('path'), ['format' => 'webp', 'portrait_height' => 480, 'landscape_width' => 800]) }} 2x"
                            type="image/webp"
                        >
                        <img {{ $component->attributes('image') }}
                            src="{{ asset($item->get('path'), ['format' => 'png', 'portrait_height' => 240, 'landscape_width' => 400]) }}"
                            srcset="{{ asset($item->get('path'), ['format' => 'png', 'portrait_height' => 480, 'landscape_width' => 800]) }} 2x"
                            alt="{{ $item->get('alt') }}"
                        >
                    </picture>
                </div>
            </li>
        @endforeach
    </ul>
</div>
