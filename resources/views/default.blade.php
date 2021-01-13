@extends('layouts.master', [
    'meta' => $content->meta,
    'theme' => $content->theme(),
])

@section('content')
    @include('layouts.partials.hero')

    @include('layouts.partials.intro')

    @foreach($content->body() as $component)
        @include($component->view())
    @endforeach

    @include('layouts.partials.likes', [
        'show' => $content->isLikeable()
    ])

    @include('layouts.partials.newsletter', [
        'show' => $content->hasNewsletter()
    ])

    @include('layouts.partials.cases', [
        'show' => $content->relations()->has('case')
    ])

    @include('layouts.partials.contact', [
        'component' => $content->relations()->first('contact')
    ])
@endsection
