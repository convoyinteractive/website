@if($content->has('aside') or $content->has('excerpt'))
    <div {{ $content->attributes('intro.wrap') }}>
        @include('layouts.partials.sidebar')
        @include('layouts.partials.excerpt')
    </div>
@endif
