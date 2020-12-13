@extends('layouts.master', [
    'meta' => $content->meta,
])

@section('content')
    @include('layouts.partials.hero', [
        'component' => $content->sections()->hero()
    ])

    <div>
        @foreach($articles as $article)
            {{--  --}}
        @endforeach
    </div>
@endsection

