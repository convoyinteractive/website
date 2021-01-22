@extends('default')

@section('aside')
    @include('layouts.partials.cases', [
        'title' => __('Related case stories')
    ])

    @if($content->isNested())
        @include('layouts.partials.services', [
            'title' => __('Further services'),
        ])
    @endif

    @include('layouts.partials.contact', [
        'component' => $content->relations()->first('contact')
    ])
@endsection
