@extends('master', [
    'meta' => $content->get('meta'),
])

@section('header')
    @include('partials.hero', compact('content'))
@endsection

@section('content')
    @include('partials.facts', [
        'facts' => $content->get('meta')
    ])

    @foreach($content->components() as $component)
        @include("components.{$component->type()}", [
            'component' => $component
        ])
    @endforeach
@endsection
