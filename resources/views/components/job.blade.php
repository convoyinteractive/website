@foreach ($component->get('body', []) as $item)
    @include($item->view(), ['component' => $item])
@endforeach
