<div>
    <div>
        {{ $component->get('title') }}
    </div>
    <div>
        <p>{{ $component->get('body') }}</p>
        <div>
            <div>
                <img alt="{{ $component->get('recipient.name') }}"
                    src="{{ asset($component->get('recipient.image'), ['width' => 200, 'height' => 200, 'crop' => true ]) }}"
                    srcset="{{ asset($component->get('recipient.image'), ['width' => 400, 'height' => 400, 'crop' => true ]) }} 2x">
            </div>
            <div>
                <span>{{ $component->get('recipient.name') }}</span>
                <span>{{ $component->get('recipient.title') }}</span>
            </div>
        </div>
    </div>
</div>
