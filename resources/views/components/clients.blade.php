<ul {{ $attributes }}>
@foreach ($component->get('items') as $item)
    <li {{ $content->attributes([$component->alias(), 'items']) }}>
        <div {{ $content->attributes([$component->alias(), 'card']) }}>
            <img
                class="max-w-50 max-h-25"
                src="{{ asset($item->get('path'), [
                    'format' => 'png',
                    'portrait_height' => 240,
                    'landscape_width' => 400,
                ]) }}"
                alt="{{ $item->get('alt') }}"
            >
        </div>
    </li>
@endforeach
</ul>
