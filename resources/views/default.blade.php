@extends('layouts.master', [
    'meta' => $content->meta,
])

@section('content')
    @include('layouts.partials.hero')

    @foreach($content->components() as $component)
        @include($component->view())
    @endforeach

    @include('layouts.partials.newsletter', [
        'show' => $content->hasNewsletter()
    ])
@endsection
