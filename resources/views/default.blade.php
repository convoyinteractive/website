@extends('layouts.master', [
    'meta' => $content->meta,
    'theme' => $content->theme(),
])

@section('content')
    @include('layouts.partials.hero', [
        'component' => $content->component('meta.hero', "{$content->template()}.hero")
    ])

    @foreach($content->collection('body') as $component)
        @include($component->view())
    @endforeach

    @include('layouts.partials.newsletter', [
        'show' => $content->hasNewsletter()
    ])
@endsection
