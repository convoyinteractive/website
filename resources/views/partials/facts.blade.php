<div>
    {{ __('Client') }}: <br> {{ $facts['client'] }}
</div>
<hr>
<div>
    {{ __('Project') }}: <br> {{ $facts['project'] }}
</div>
<hr>
<div>
    {{ __('Services') }}:
    <ul>
        @foreach($facts['services'] as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>
</div>
