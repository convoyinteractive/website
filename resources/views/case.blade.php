@extends('master', [
    'meta' => $content->meta,
])

@section('header')
    @include('partials.hero', [
        'meta' => $content->meta,
    ])
@endsection

@section('content')
    @include('partials.facts', [
        'facts' => $content->facts
    ])

    @foreach($content->components() as $component)
        @include("components.{$component->type()}", [
            'component' => $component
        ])
    @endforeach
@endsection
