<footer class="px-6 md:px-10 sm:px-20 xl:px-screen-20 pt-10 pb-30 sm:py-10 lg:py-20 xl:py-screen-20 space-y-20 xl:space-y-screen-20 mt-30 xl:mt-screen-30 bg-black text-white">
    <div class="space-y-10 lg:space-y-0 lg:flex lg:justify-between items-end font-sans text-sm lg:space-x-10 xl:space-x-screen-10">
        <address class="not-italic md:flex md:justify-between space-y-10 md:space-y-0 md:space-x-10 xl:space-x-screen-10 xl:w-6/12">
            <div>
                <div class="font-bold mb-2 hidden md:block">
                    {{ __('Inquiries') }}
                </div>
                <div>
                    <a class="block focus:outline-none focus:underline" href="tel:{{ str_replace(" ", "", $contact->get('phone')) }}">
                        {{ $contact->get('phone') }}
                    </a>
                    <a class="block focus:outline-none focus:underline" href="{{ encode_email('mailto:' . $contact->get('email')) }}">
                        {{ encode_email($contact->get('email')) }}
                    </a>
                </div>
            </div>
            <div>
                <div class="font-bold mb-2 hidden md:block">
                    {{ __('Address') }}
                </div>
                <div>
                    {{ $contact->get('street') }} <br>
                    {{ $contact->get('postcode') }} {{ $contact->get('city') }}
                </div>
            </div>
            <div>
                <div class="font-bold mb-2 hidden md:block">
                    {{ __('Legal') }}
                </div>
                <div>
                    @foreach($sitemap->collection('legal.links', 'footer') as $item)
                        <a href="{{ $item->get('path') }}" class="block focus:outline-none focus:underline">
                            {{ $item->get('label') }}
                        </a>
                    @endforeach
                </div>
            </div>
        </address>
        <div>
            @foreach ($meta->get('alternates', []) as $locale => $path)
            <a href="/{{$locale}}{{ $path ? "/$path" : '' }}" class="focus:outline-none focus:underline">
                {{ __($locale) }}
            </a>
            @endforeach
        </div>
    </div>

    <div>
        @include('layouts.partials.socials')
    </div>
</footer>
