@extends('layouts.master', [
    'meta' => $content->meta,
])

@section('content')
    @include('layouts.partials.hero')

    @foreach($content->components() as $component)
        <div {{ $content->attributes([
            $component->alias(), "wrap"
        ]) }}>
            @if($component->has('title'))
            <div {{ $content->attributes([$component->alias(), "title"]) }}>
                {{ $component->get('title') }}
            </div>
            @endif

            @include($component->view(), [
                'component' => $component,
                'attributes' => $content->attributes([
                    $component->alias(), "component"
                ]),
            ])
        </div>
    @endforeach

    @if($content->isType('article'))
    <div class="md:w-10/12 lg:w-8/12 mx-auto mt-30 xl:mt-screen-30 p-10 md:p-20 xl:p-screen-20 bg-gray">
        @include('layouts.partials.newsletter')
    </div>
    @endif
@endsection
