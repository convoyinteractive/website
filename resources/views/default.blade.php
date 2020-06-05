@extends('layouts.master', [
    'meta' => $content->meta,
])

@section('content')
    <div {{ $content->attributes('hero.wrap') }}>
        <div {{ $content->attributes('hero.title') }}>
            @if($content->has('meta.title'))
            <h1 class="font-bold font-hero text-6xl xl:text-like-6xl leading-tight lg:w-6/10">{{ $content->get('meta.title') }}</h1>
            <span class="block font-sans font-light text-sm xl:text-like-sm">{{ $content->get('meta.subtitle') }}</span>
            @endif
        </div>

        @if($content->hero()->exists())
            @include(view()->exists("components.{$content->hero()->type()}") ? "components.{$content->hero()->type()}" : "components.error", [
                'component' => $content->hero(),
                'attributes' => $content->attributes('hero.component'),
            ])
        @endif
    </div>

    @foreach($content->components() as $component)
        <div {{ $content->attributes([$component->type(), 'wrap']) }}>
            @if($component->has('title'))
            <div {{ $content->attributes([
                $component->type(),
                $component->is('relation') ? "{$component->get('resource')}.title" : "title"
            ]) }}>
                {{ $component->get('title') }}
            </div>
            @endif

            @include(view()->exists("components.{$component->type()}") ? "components.{$component->type()}" : "components.error", [
                'component' => $component,
                'attributes' => $content->attributes([$component->type(), 'component']),
            ])
        </div>
    @endforeach

    @if($content->isType('article'))
    <div class="md:w-10/12 lg:w-8/12 mx-auto mt-30 xl:mt-screen-30 p-10 md:p-20 xl:p-screen-20 bg-gray">
        @include('layouts.partials.newsletter')
    </div>
    @endif
@endsection
