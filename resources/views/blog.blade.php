@extends('layouts.master', [
    'meta' => $content->meta,
])

@section('content')
    @include('layouts.partials.hero', [
        'component' => $content->component('meta.hero', "{$content->template()}.hero")
    ])

    <div>
        @foreach($articles as $article)
            {{--  --}}
        @endforeach
    </div>
@endsection

