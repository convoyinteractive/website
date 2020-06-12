<ul {{ $attributes }}>
@foreach ($component->get('items') as $item)
    <li {{ $content->attributes([$component->is('relation') ? "relation.clients" : "clients", 'items']) }}>
        <div {{ $content->attributes([$component->is('relation') ? "relation.clients" : "clients", 'card']) }}>
            <img
                class="max-w-30 max-h-15"
                src="{{ asset($item->get('path'), [
                    'format' => 'png',
                    'portrait_height' => 240,
                    'landscape_width' => 240,
                ]) }}"
                alt="{{ $item->get('alt') }}"
            >
        </div>
    </li>
@endforeach
</ul>
