<a href="{{ $component->get('path') }}" class="block w-full h-full bg-gray p-6">
    <strong>{{ $component->get('label') }}</strong>
    @if($component->has('description'))
        <p>{{ $component->get('description') }}</p>
    @endif
</a>
