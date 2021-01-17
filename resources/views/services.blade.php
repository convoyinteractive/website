@extends('default')

@section('aside')
    @include('layouts.partials.cases', [
        'title' => __('Related case stories')
    ])

    @include('layouts.partials.services', [
        'title' => __('Further services'),
    ])

    @include('layouts.partials.contact', [
        'component' => $content->relations()->first('contact')
    ])
@endsection
