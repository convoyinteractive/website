@extends('default')

@section('aside')
    <div class="px-6 sm:px-20 md:px-10 xl:px-screen-20 my-20 lg:my-50 mx-auto lg:w-10/12">
        <h2 class="text-xl lg:text-3xl xl:text-like-3xl md:text-center font-sans font-semibold mb-10 xl:mb-screen-10">
            {{ __('More articles') }}
        </h2>
        <div class="space-y-15 lg:space-y-0 lg:flex lg:space-x-20 xl:space-x-screen-20">
            @include('components.article', [
                'component' => $pagination->prev()->setContext('article.relations.article'),
            ])
            @include('components.article', [
                'component' => $pagination->next()->setContext('article.relations.article'),
            ])
        </div>
    </div>

    @include('layouts.partials.newsletter', [
        'show' => false
    ])
@endsection
