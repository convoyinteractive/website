<title>{{ $meta->get('title') ?? 'Digital Design Solutions' }} | Convoy Interactive</title>
@foreach($meta->get('alternates', []) as $lang => $url)
    <link rel="alternate" href="{{ $url }}" hreflang="{{ $lang }}">
@endforeach
