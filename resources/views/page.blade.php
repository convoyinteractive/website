@extends('master', [
    'meta' => $content->get('meta'),
])

@section('content')
    @foreach($content->components() as $component)
        @include("components.{$component->type()}", [
            'component' => $component
        ])
    @endforeach
@endsection
