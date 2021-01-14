@if($component)
<div {{ $component->attributes('wrap') }}>
    <div {{ $component->attributes('body') }}>
        <p>{{ $component->get('body') }}</p>
    </div>
    <div {{ $component->attributes('recipient') }}>
        <div class="relative">
            <div {{ $component->attributes('avatar') }}>
                <img class="block w-full" alt="{{ $component->get('recipient.name') }}"
                src="{{ asset($component->get('recipient.image'), ['width' => 200, 'height' => 200, 'crop' => true ]) }}"
                srcset="{{ asset($component->get('recipient.image'), ['width' => 400, 'height' => 400, 'crop' => true ]) }} 2x">
            </div>
            <div class="absolute flex items-center justify-center w-6 h-6 p-1 text-white text-center bg-green rounded-full right-0 bottom-0 -mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <circle fill="currentColor" stroke="none" cx="6" cy="26" r="6">
                        <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.1"/>
                    </circle>
                    <circle fill="currentColor" stroke="none" cx="26" cy="26" r="6">
                        <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.2"/>
                    </circle>
                    <circle fill="currentColor" stroke="none" cx="46" cy="26" r="6">
                        <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.3"/>
                    </circle>
                </svg>
            </div>
        </div>
        <div>
            <span {{ $component->attributes('recipient_name') }}>{{ $component->get('recipient.name') }}</span>
            <span {{ $component->attributes('recipient_title') }}>{{ $component->get('recipient.title') }}</span>
        </div>
    </div>
</div>
<div {{ $component->attributes('wrap') }}>
    <div {{ $component->attributes('body') }}>
        <a href="" class="font-sans font-semibold">
            Let’s talk
        </a>
    </div>
</div>
@endif
