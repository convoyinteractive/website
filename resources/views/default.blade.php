@extends('layouts.master', [
    'meta' => $content->meta,
    'theme' => $content->theme(),
])

@section('content')
    @include('layouts.partials.hero', [
        'component' => $content->sections()->hero()
    ])

    <div {{ $content->attributes('header.wrap') }}>
        <aside {{ $content->attributes('aside.wrap') }}>
            @foreach($content->sections()->aside() as $component)
                @include($component->view())
            @endforeach
        </aside>
        <div {{ $content->attributes('excerpt.wrap') }}>
            @foreach($content->sections()->excerpt() as $component)
                @include($component->view())
            @endforeach
        </div>
    </div>

    @foreach($content->sections()->body() as $component)
        @include($component->view())
    @endforeach

    @include('layouts.partials.likes', [
        'show' => $content->isLikeable()
    ])

    @include('layouts.partials.newsletter', [
        'show' => $content->hasNewsletter()
    ])
@endsection
