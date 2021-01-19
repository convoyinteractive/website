@extends('default')

@section('aside')
    @include('layouts.partials.newsletter', [
        'show' => false
    ])
@endsection
