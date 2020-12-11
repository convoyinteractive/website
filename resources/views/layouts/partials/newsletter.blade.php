@if($show)
<div class="md:w-10/12 lg:w-8/12 mx-auto mt-30 xl:mt-screen-30 p-10 md:p-20 xl:p-screen-20 bg-gray">
    <newsletter-sign-up inline-template>
        <div class="font-sans">
            <h3 class="mb-10 xl:mb-screen-10 font-semibold">{{ __('Stay safe but stay connected.') }}</h3>
            <div class="flex items-center justify-between">
                <div>
                    <div class="mb-6 xl:mb-screen-6">
                        <input class="block w-full bg-transparent border-b-2 border-dotted border-black" type="text" placeholder="{{ __('Your E-Mail') }}" v-model="email">
                    </div>
                    <div>
                        <label class="flex items-baseline" for="privacy">
                            <input class="hidden" id="privacy" type="checkbox" v-model="privacy">
                            <div class="w-4 h-4 xl:w-screen-4 xl:h-screen-4 rounded-full border block flex-shrink-0">
                                @{{privacy}}
                            </div>
                            <div class="inline-block ml-6 xl:ml-screen-6 text-sm xl:text-like-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde impedit ad, fugiat similique velit ducimus rerum necessitatibus? Ducimus labore.
                            </div>
                        </label>
                    </div>
                </div>
                <div class="ml-10 xl:ml-screen-20">
                    <button @click="subscribe">{{ __('Subscribe') }}</button>
                </div>
            </div>
        </div>
    </newsletter-sign-up>
</div>
@endif
