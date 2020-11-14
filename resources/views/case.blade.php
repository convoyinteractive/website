@extends('layouts.master', [
    'meta' => $content->meta,
    'theme' => $content->theme(),
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

    @if($content->meta->has('image'))
    <div {{ $content->attributes('hero.component') }}>
        @if($content->has('meta.image.sizes'))
        <picture class="w-full block">
            <source media="(min-width: 500px)" srcset="{{ asset($content->get('meta.image.sizes.large'), []) }}">
            <img class="w-full block" src="{{ asset($content->get('meta.image.sizes.small'), []) }}" alt="{{ $content->get('meta.title') }}">
        </picture>
        @elseif($content->has('meta.image.path'))
            <img class="w-full block" src="{{ asset($content->get('meta.image.path'), []) }}" alt="{{ $content->get('meta.title') }}">
        @endif
    </div>
    @endif

    @foreach($content->components() as $component)
        @include($component->view())
    @endforeach

    @if($content->isLikeable())
        <div class="flex justify-center">
            <likes resource="{{$content->get('name')}}">
                <div class="w-20 h-20 flex items-center justify-center border rounded-full">
                    LIKE
                </div>
            </likes>
        </div>
    @endif
@endsection

