@extends('layouts.master', [
    'meta' => $content->meta,
])

@section('content')
    <div {{ $content->attributes('hero.wrap') }}>
        <div {{ $content->attributes('hero.title') }}>
            @if($content->has('meta.title'))
            <h1 class="font-bold font-hero text-4xl sm:text-5xl md:text-6xl xl:text-like-6xl leading-tight">{{ $content->get('meta.title') }}</h1>
            <span class="block font-sans font-light text-sm xl:text-like-sm">{{ $content->get('meta.subtitle') }}</span>
            @endif
        </div>
    </div>

    @if($content->meta->has('image'))
    <div class="mb-40">
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
        <div {{
            ($loop->first)
            ? $content->attributes("details.wrap")
            :  $content->attributes([$component->alias(), "wrap"])
        }}>
            @if($component->has('title'))
            <div {{ $content->attributes([$component->alias(), "title"]) }}>
                {{ $component->get('title') }}
            </div>
            @endif

            @if($loop->first)
            <div {{ $content->attributes("details.aside") }}>
                <data-table :data="{{json_encode($content->components('details'))}}"></data-table>
            </div>
            @endif

            @include($component->view(), [
                'component' => $component,
                'attributes' => ($loop->first)
                    ? $content->attributes("details.component")
                    : $content->attributes([$component->alias(), "component"]),
            ])
        </div>
    @endforeach
@endsection
