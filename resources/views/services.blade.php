@extends('default')

@section('aside')
    @include('layouts.partials.cases', [
        'show' => $content->relations()->has('case')
    ])

    @include('layouts.partials.services', [
        'title' => __('Further services'),
    ])

    @include('layouts.partials.contact', [
        'component' => $content->relations()->first('contact')
    ])
@endsection
