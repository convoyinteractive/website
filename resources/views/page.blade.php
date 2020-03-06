@extends('master', [
    'meta' => $content->get('meta'),
])

@section('header')
    @include('partials.hero', compact('content'))
@endsection

@section('content')
    @foreach($content->components() as $component)
        @include("components.{$component->type()}", [
            'component' => $component
        ])
    @endforeach
@endsection
