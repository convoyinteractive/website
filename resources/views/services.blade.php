@extends('layouts.master', [
    'meta' => $content->meta,
])

@section('content')
    <div class="flex justify-between items-center lg:w-10/12 mx-auto my-40">
        <div class="px-6 font-sans">
            @if($content->has('meta.title'))
            <h1 class="font-bold text-6xl">{{ $content->get('meta.title') }}</h1>
            <span class="block text-sm">{{ $content->get('meta.subtitle') }}</span>
            @endif
        </div>

        <div class="px-6">
            @include(view()->exists("components.{$content->hero()->type()}") ? "components.{$content->hero()->type()}" : "components.error", [
                'component' => $content->hero(),
                'class' => '',
            ])
        </div>
    </div>

    @foreach($content->components() as $component)
    <div class="my-20">
        @if($component->has('title'))
            <div class="px-6 text-center font-sans">
                {{ $component->get('title') }}
            </div>
        @endif
        @if($component->is('group'))
            <div class="flex flex-wrap">
                @foreach($component->get('items', []) as $item)
                <div class="p-6 w-4/12">
                    <div class="bg-black text-white">
                        @include(view()->exists("components.{$item->type()}") ? "components.{$item->type()}" : "components.error", [
                            'component' => $item
                        ])
                    </div>
                </div>
                @endforeach
            </div>
        @else
            @include(view()->exists("components.{$component->type()}") ? "components.{$component->type()}" : "components.error", [
                'component' => $component,
                'class' => $content->styles()->get($component->type(), 'p-6'),
            ])
        @endif
    </div>
    @endforeach
@endsection
