@extends('layouts.master', [
    'meta' => $content->meta,
    'theme' => $content->theme(),
])

@section('content')
    @include('layouts.partials.hero')

    <div class="px-3 sm:px-10 md:px-5 my-20 xl:px-screen-10 lg:my-30 xl:my-screen-30">
        @foreach($articles as $article)
        <div class="px-3 sm:px-10 md:px-5 my-20 xl:px-screen-10 lg:my-30 xl:my-screen-30 lg:w-8/12 {{ $loop->odd ? 'mr-auto' : 'ml-auto' }}">

            <time class="font-sans text-sm xl:text-like-sm" datetime="{{ $article->date() }}">
                {{ $article->date()->format("m-Y") }}
            </time>

            <img class="block w-full my-5 lg:my-10 xl:my-screen-10"
                alt="{{ $article->get('meta.title') }}"
                src="{{ asset($article->get('meta.image'), [
                    'width' => '1024',
                    'format' => 'jpg',
                    'crop' => true,
                ]) }}"
            >

            <h2 class="font-sans font-semibold leading-snug text-2xl lg:text-3xl xl:text-like-3xl my-5 lg:my-10 xl:my-screen-10">
                {{ $article->get('hero.title') }}
            </h2>

            <a class="inline-flex items-center flex-row-reverse" href="{{ $article->path() }}" v-button>
                <span class="mr-4 font-sans font-semibold">{{ __('Read article') }}</span>
            </a>
        </div>
        @endforeach
    </div>
@endsection

