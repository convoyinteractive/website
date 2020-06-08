<ul {{ $attributes }}>
@foreach ($component->get('items') as $item)
    <li {{ $content->attributes([$component->is('relation') ? "relation.services" : "services", 'item']) }}>
        <div {{ $content->attributes([$component->is('relation') ? "relation.services" : "services", 'term']) }}>
            {{ $item->get('title') }}
        </div>
    </li>
@endforeach
</ul>
