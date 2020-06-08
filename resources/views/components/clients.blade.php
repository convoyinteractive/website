<ul {{ $attributes }}>
@foreach ($component->get('items') as $item)
    <li {{ $content->attributes([$component->is('relation') ? "relation.clients" : "clients", 'items']) }}>
        <div {{ $content->attributes([$component->is('relation') ? "relation.clients" : "clients", 'card']) }}>
            <img
                src="{{ asset($item->get('path'), ['format' => 'png']) }}"
                alt="{{ $item->get('alt') }}"
            >
        </div>
    </li>
@endforeach
</ul>
