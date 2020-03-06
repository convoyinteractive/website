@extends('master', [
    'meta' => $content->get('meta'),
])

@section('header')
    @include('partials.hero', compact('content'))
@endsection

@section('content')
    @foreach($content->components() as $component)
        <div class="pt-12">
            @include("components.{$component->type()}", [
                'component' => $component
            ])
        </div>
    @endforeach
@endsection
