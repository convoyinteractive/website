@extends('default')

@section('aside')
    <div {{ $content->attributes('relations.list.wrap') }}>
        <h2 {{ $content->attributes('relations.list.title') }}>
            {{ __('More articles') }}
        </h2>
        <div {{ $content->attributes('relations.list.body') }}>
            @include('components.article', [
                'component' => $pagination->prev()->setContext('relations.article'),
            ])
            @include('components.article', [
                'component' => $pagination->next()->setContext('relations.article'),
            ])
        </div>
    </div>

    @include('layouts.partials.newsletter', [
        'show' => false
    ])
@endsection
