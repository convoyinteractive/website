@extends('default')

@section('aside')
    @include('layouts.partials.cases', [
        'title' => __('Related cases')
    ])

    @if($content->isNested())
        @include('layouts.partials.services', [
            'title' => __('Additional services'),
        ])
    @endif

    @include('layouts.partials.contact', [
        'component' => $content->relations()->first('contact')
    ])
@endsection
