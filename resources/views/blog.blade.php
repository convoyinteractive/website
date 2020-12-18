@extends('layouts.master', [
    'meta' => $content->meta,
])

@section('content')
    @include('layouts.partials.hero')

    <div>
        @foreach($articles as $article)
            {{--  --}}
        @endforeach
    </div>
@endsection

