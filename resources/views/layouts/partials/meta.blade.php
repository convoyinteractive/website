<title>{{ $meta->get('title') ?? 'Digital Design Solutions' }} | Convoy Interactive</title>
@foreach ($meta->get('alternates', []) as $locale => $path)
<link rel="alternate" hreflang="{{ $locale }}" href="{{ app('request')->root() }}/{{ $locale }}/{{ $path }}" />
@endforeach
