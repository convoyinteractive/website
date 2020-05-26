@extends('layouts.master', [
    'meta' => $content->meta,
])

@section('content')
<div class="md:w-10/12 lg:w-8/12 mx-auto mt-30 xl:mt-screen-30 p-10 md:p-20 xl:p-screen-20 bg-gray">
    @include('layouts.partials.newsletter')
</div>
@endsection
