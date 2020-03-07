<div>
    {{ __('Client') }}: <br> {{ $facts->get('client') }}
</div>
<hr>
<div>
    {{ __('Project') }}: <br> {{ $facts->get('project') }}
</div>
<hr>
<div>
    {{ __('Services') }}:
    <ul>
        @foreach($facts->get('services', []) as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>
</div>
