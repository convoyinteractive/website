<div {{ $content->attributes('excerpt.wrap') }}>
    @foreach($content->sections()->excerpt() as $component)
        @include($component->view())
    @endforeach
</div>
