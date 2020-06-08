<ul {{ $attributes }}>
@foreach ($component->get('items') as $item)
    <li {{ $content->attributes([$component->is('relation') ? "relation.awards" : "awards", 'items']) }}>
        <div {{ $content->attributes([$component->is('relation') ? "relation.awards" : "awards", 'card']) }}>
            <img
                src="{{ asset($item->get('path'), ['format' => 'png']) }}"
                alt="{{ $item->get('alt') }}"
            >
            @if($item->has('count'))
            <span {{ $content->attributes([$component->is('relation') ? "relation.awards" : "awards", 'count']) }}>
                {{$item->get('count')}}x
            </span>
            @endif
        </div>
        <span {{ $content->attributes([$component->is('relation') ? "relation.awards" : "awards", 'caption']) }}>
            {{ $item->get('caption') }}
        </span>
    </li>
@endforeach
</ul>
