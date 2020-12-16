@extends('layouts.master', [
    'meta' => $content->meta,
    'theme' => $content->theme(),
])

@section('content')

    @include('layouts.partials.hero', [
        'component' => $content->sections()->hero()
    ])

    @foreach($content->sections()->aside() as $component)
        @include($component->view())
    @endforeach

    @foreach($content->sections()->body() as $component)
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

