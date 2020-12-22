<aside {{ $content->attributes('aside.wrap') }}>
    @foreach($content->aside() as $component)
        @include($component->view())
    @endforeach
</aside>
