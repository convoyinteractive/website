<ul {{ $attributes }}>
@foreach ($component->get('items') as $item)
    <li {{ $content->attributes([$component->is('relation') ? "relation.awards" : "awards", 'items']) }}>
        <div {{ $content->attributes([$component->is('relation') ? "relation.awards" : "awards", 'card']) }}>
            <img
                class="max-w-30 max-h-10"
                src="{{ asset($item->get('path'), [
                    'format' => 'png',
                    'portrait_height' => 240,
                    'landscape_width' => 240,
                ]) }}"
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
