@extends('layouts.master', [
    'meta' => $content->meta,
    'theme' => $content->theme(),
])

@section('content')
    @include('layouts.partials.hero')

    @include('layouts.partials.intro')

    @foreach($content->body() as $component)
        @include($component->view())
    @endforeach

    @include('layouts.partials.likes', [
        'show' => $content->isLikeable()
    ])

    @include('layouts.partials.newsletter', [
        'show' => $content->hasNewsletter()
    ])

    @php
        $cases = $content->relations()->filter(fn($component) => $component->alias() === 'case');
    @endphp

    @foreach ($cases as $component)
        @include($component->view())
        {{ $component->context() }}
        <hr>
    @endforeach

    @php
        $contact = $content->relations()->filter(fn($component) => $component->alias() === 'contact')->first();
    @endphp

    @foreach ($contact->body() as $component)
        @include($component->view())
        {{ $component->context() }}
    @endforeach
@endsection
