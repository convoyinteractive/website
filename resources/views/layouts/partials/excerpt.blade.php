<div {{ $content->attributes('excerpt.wrap') }}>
    @foreach($content->excerpt() as $component)
        @include($component->view())
    @endforeach
</div>
