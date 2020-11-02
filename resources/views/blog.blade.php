@extends('layouts.master', [
    'meta' => $content->meta,
])

@section('content')
    <div {{ $content->attributes('hero.wrap') }}>
        <div {{ $content->attributes('hero.title') }}>
            @if($content->has('meta.title'))
                <h1 {{ $content->attributes('page.title') }}>{{ $content->get('meta.title') }}</h1>
                <span {{ $content->attributes('page.subtitle') }}>{{ $content->get('meta.subtitle') }}</span>
            @endif
        </div>
    </div>

    <div>
        @foreach($articles as $article)
            {{--  --}}
        @endforeach
    </div>
@endsection

