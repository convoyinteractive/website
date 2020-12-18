<aside {{ $content->attributes('aside.wrap') }}>
    @foreach($content->sections()->aside() as $component)
        @include($component->view())
    @endforeach
</aside>
