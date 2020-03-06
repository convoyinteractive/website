<a href="{{ $component->get('path') }}" class="block w-full h-full bg-gray p-6">
    <span class="block font-bold mb-3">{{ $component->get('label') }}</span>
    @if($component->has('description'))
        <p>{{ $component->get('description') }}</p>
    @endif
</a>
