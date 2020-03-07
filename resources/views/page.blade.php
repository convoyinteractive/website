@extends('master', [
    'meta' => $content->meta,
])

@section('header')
    @include('partials.hero', [
        'meta' => $content->meta,
    ])
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
