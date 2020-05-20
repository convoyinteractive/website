@extends('layouts.master', [
    'meta' => $content->meta,
])

@section('content')
    <div class="{{ $content->styles('hero.wrap') }}">
        <div class="{{ $content->styles('hero.title') }}">
            @if($content->has('meta.title'))
            <h1 class="font-bold font-hero text-6xl xl:text-like-6xl leading-tight">{{ $content->get('meta.title') }}</h1>
            <span class="block font-sans font-light text-sm xl:text-like-sm">{{ $content->get('meta.subtitle') }}</span>
            @endif
        </div>

        @if($content->hero()->exists())
            @include(view()->exists("components.{$content->hero()->type()}") ? "components.{$content->hero()->type()}" : "components.error", [
                'component' => $content->hero(),
                'class' => $content->styles('hero.component'),
            ])
        @endif
    </div>

    @foreach($content->components() as $component)
        <div class="{{ $content->styles([$component->type(), 'wrap']) }}" id="{{ $component->get('name') }}">
            @if($component->has('title'))
            <div class="{{ $content->styles([$component->type(), 'title']) }}">
                {{ $component->get('title') }}
            </div>
            @endif

            @include(view()->exists("components.{$component->type()}") ? "components.{$component->type()}" : "components.error", [
                'component' => $component,
                'class' => $content->styles([$component->type(), 'component']),
            ])
        </div>
    @endforeach
@endsection
