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
            @include(view()->exists("components.{$component->type()}")
                ? "components.{$component->type()}"
                : "components.error",
                compact('component')
            )
        </div>
    @endforeach
@endsection
