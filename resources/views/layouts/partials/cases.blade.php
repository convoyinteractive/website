@if($show)
<div>
    <div></div>
    <div>
        @foreach ($content->relations()->filter('case') as $component)
        @include($component->view())
        @endforeach
    </div>
</div>
@endif
