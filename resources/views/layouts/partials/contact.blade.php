@if($component)
<div {{ $component->attributes('wrap') }}>
    <div {{ $component->attributes('body') }}>
        <p>{{ $component->get('body') }}</p>
        <div class="mt-10 xl:mt-screen-10">
            <a href="{{ encode_email('mailto:' . $contact->get('email')) }}" class="font-sans font-semibold inline-flex flex-row-reverse items-center focus:outline-none border border-dotted border-transparent focus:border-black focus:border-opacity-25" v-button="true">
                <span>Let’s talk</span>
            </a>
        </div>
    </div>
    <div {{ $component->attributes('recipient') }}>
        <div class="relative">
            <div {{ $component->attributes('avatar') }}>
                <picture class="block w-full">
                    <source type="image/webp"
                        srcset="{{ asset($component->get('recipient.image'), ['format' => 'webp', 'width' => 200, 'height' => 200, 'crop' => true]) }},
                            {{ asset($component->get('recipient.image'), ['format' => 'webp', 'width' => 400, 'height' => 400, 'crop' => true]) }} 2x"
                    >
                    <img class="block w-full"
                        src="{{ asset($component->get('recipient.image'), ['format' => 'png', 'width' => 200, 'height' => 200, 'crop' => true]) }}"
                        srcset="{{ asset($component->get('recipient.image'), ['format' => 'png', 'width' => 400, 'height' => 400, 'crop' => true]) }} 2x"
                        alt="{{ $component->get('recipient.name') }}"
                    >
                </picture>
            </div>
            <div class="absolute flex items-center justify-center w-6 h-6 xl:w-screen-6 xl:h-screen-6 text-white text-center bg-green rounded-full right-0 top-0 -mr-2 xl:-mr-screen-2 -mt-2 xl:-mt-screen-2">
                <span class="font-sans font-semibold text-xs xl:text-like-xs leading-none tracking-tighter">HI</span>
            </div>
        </div>
        <div>
            <span {{ $component->attributes('recipient_name') }}>{{ $component->get('recipient.name') }}</span>
            <span {{ $component->attributes('recipient_title') }}>{{ $component->get('recipient.title') }}</span>
        </div>
    </div>
</div>
@endif
