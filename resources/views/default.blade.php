@extends('layouts.master', [
    'meta' => $content->meta,
    'theme' => $content->theme(),
])

@section('content')
    @include('layouts.partials.hero')

    @include('layouts.partials.intro')

    @foreach($content->body() as $component)
        @include($component->view())
    @endforeach
@endsection

@section('aside')
    @include('layouts.partials.contact', [
        'component' => $content->relations()->first('contact')
    ])
@endsection
