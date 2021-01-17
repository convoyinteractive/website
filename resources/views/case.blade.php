@extends('default')

@section('aside')
    @include('layouts.partials.likes', [
        'show' => $content->isLikeable()
    ])

    @include('layouts.partials.cases', [
        'title' => __('Similar case stories'),
    ])

    @include('layouts.partials.contact', [
        'component' => $content->relations()->first('contact')
    ])
@endsection
