@extends('master', [
    'meta' => $content->meta,
])

@section('content')
    @if($content->has('meta.title'))
    <div class="px-6 font-sans lg:w-10/12 mx-auto my-40">
        <h1 class="font-bold text-6xl">{{ $content->get('meta.title') }}</h1>
        <span class="block text-sm">{{ $content->get('meta.subtitle') }}</span>
    </div>
    @endif

    @if($content->has('meta.image'))
    <picture class="block w-full mb-40">
        <source media="(min-width: 500px)" srcset="{{ $content->get('meta.image.sizes.large') }}">
        <img class="block w-full" src="{{ $content->get('meta.image.sizes.small') }}" alt="{{ $content->get('meta.image.alt') }}">
    </picture>
    @endif

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
