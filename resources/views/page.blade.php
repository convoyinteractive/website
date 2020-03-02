@extends('master', [
    'meta' => $content->get('meta'),
])

@section('content')
    <main class="d-block px-6">
        @foreach($content->components() as $component)
            @include("components.{$component->type()}", [
                'component' => $component
            ])
        @endforeach
    </main>
@endsection
