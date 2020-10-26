<div {{ $attributes ?? '' }}>
    @foreach ($component->get('items', []) as $item)
        <div {{ $content->attributes(['group.item'], [
            'class' => count($component->get('items')) === 3 ? 'md:w-4/12' : 'md:w-6/12'
        ]) }} foor="bar">
            @include($item->view(), [
                'component' => $item,
                'attributes' => $content->attributes(['group.items', $item->alias()]),
            ])
        </div>
    @endforeach
</div>
@if($component->has('caption'))
<div {{ $content->attributes(['group.caption']) }}>{{ $component->get('caption') }}</div>
@endif
