<div class="flex flex-col justify-between w-full h-full bg-gray p-6">
    <div>
        <span class="block font-bold mb-3">{{ $component->get('label') }}</span>
        @if($component->has('description'))
            <p>{{ $component->get('description') }}</p>
        @endif
    </div>
    <a href="{{ $component->get('path') }}" class="w-10 h-10 mt-10 bg-white flex justify-center items-center rounded-full hover:text-white hover:bg-black">
        <svg width="15" height="15" viewBox="0 0 15 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <line x1="9.09407966e-13" y1="7.5" x2="15" y2="7.5" stroke="currentColor"></line>
            <line x1="7.5" y1="5.32907052e-14" x2="7.5" y2="15" stroke="currentColor"></line>
        </svg>
    </a>
</div>
