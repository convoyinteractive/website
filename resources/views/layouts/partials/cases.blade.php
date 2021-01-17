@if($content->relations()->has('case'))
<div {{ $content->attributes('relations.list.wrap') }}>
    <div {{ $content->attributes('relations.list.title') }}>
        {{ $title }}
    </div>
    <div {{ $content->attributes('relations.list.body') }}>
        @foreach ($content->relations()->filter('case') as $component)
        @include($component->view())
        @endforeach
    </div>
</div>
@endif
