<ul {{ $content->attributes([$component->alias(), 'component']) }}>
@foreach ($component->get('items') as $item)
    <li {{ $content->attributes([$component->alias(), 'item']) }}>
        <div {{ $content->attributes([$component->alias(), 'term']) }}>
            {{ $item->get('title') }}
        </div>
    </li>
@endforeach
</ul>
