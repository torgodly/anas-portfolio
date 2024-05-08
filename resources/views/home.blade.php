<x-app-layout>
    <main class="mx-4 mt-6 w-fit md:mx-10">
        <article class="space-y-8 sm:space-y-8 xl:space-y-12">
            <div class="flex flex-col-reverse gap-6 md:flex-row md:gap-8 xl:gap-12">
                {{-- Welcome Message --}}
                <div class="flex flex-col rounded-3xl bg-white p-4 text-black sm:p-10 md:w-3/5">
                    <p class="font-smooch text-6xl md:text-7xl xl:text-8xl">
                        {{ $user?->welcome_message }}
                    </p>
                    <a class="font-somar mt-6 self-start rounded-3xl bg-black px-14 py-2 text-xl text-white sm:text-3xl md:mt-10 lg:mt-16 xl:mt-20 xl:text-4xl"
                        href="{{ route('snapchat-lenses') }}">
                        See Lenses
                    </a>
                </div>
                {{-- Profile Picture --}}
                {{-- <img src="{{ asset('storage/'.$user->profile_picture) }}" class="md:w-2/5 aspect-square size-fit"
                    alt="Profile Picture" /> --}}
                <img class="size-fit aspect-square md:w-2/5" src="{{ asset('assets/Profile Picture.png') }}"
                    alt="Profile Picture" />
            </div>

            <div class="md:flex md:justify-between md:gap-8 xl:gap-12">
                {{-- Experience Level --}}
                <div
                    class="bg-opacity-15 relative grid rounded-3xl border-4 border-white bg-white p-6 text-black md:w-[65%]">
                    <p class="font-somar text-5xl font-light text-white sm:text-6xl md:text-7xl">
                        <span class="text-snapchat-yellow text-7xl font-bold sm:text-7xl md:text-8xl">3{{
                            $user?->years_of_experience }}
                        </span>Years of Experience
                    </p>
                    <p class="font-somar text-5xl font-light text-white sm:text-6xl md:text-7xl">
                        <span class="text-snapchat-yellow text-7xl font-bold sm:text-7xl md:text-8xl">347{{
                            $user?->plays }}</span>+
                        Million Plays
                    </p>
                    <img class="absolute right-0 top-2/3 w-20 -translate-y-1/2 sm:right-[6%] md:right-0 md:top-1/2 md:w-36"
                        src="{{ asset('assets/Snapchat-Rotated.png') }}" alt="" />
                    <a class="font-somar mt-6 self-center justify-self-center rounded-3xl bg-white px-14 py-2 text-xl text-black sm:text-3xl xl:text-4xl"
                        href="{{ route('snapchat-lenses') }}">
                        See Lenses
                    </a>
                </div>
                {{-- Persoanl Information --}}
                <div class="mt-8 space-y-4 md:mt-0 md:w-[35%]">
                    <div
                        class="font-somar grid h-16 content-center rounded-3xl bg-white p-4 text-center text-2xl font-medium text-black sm:h-[68px] sm:text-3xl md:h-20 md:text-4xl">
                        <p>Anas El-Ferjani</p>
                    </div>
                    <div
                        class="bg-snapchat-yellow font-somar text-nowrap grid h-16 content-center rounded-3xl p-4 text-center text-2xl font-medium text-black sm:h-[68px] sm:text-3xl md:h-20 md:text-4xl">
                        <p>Snapchat Lens Creator</p>
                    </div>
                    <div
                        class="font-somar grid h-16 content-center rounded-3xl bg-white p-4 text-center text-2xl font-medium text-black sm:h-[68px] sm:text-3xl md:h-20 md:text-4xl">
                        <p>Graphic Designer</p>
                    </div>
                    {{-- Social Media Links --}}
                    <div class="flex justify-between">
                        <x-social-media-icon name='snapchat' href="{{ $user?->snapchat }}"
                            imageUrl="{{ asset('assets/Snapchat.png') }}"></x-social-media-icon>

                        <x-social-media-icon name='twitter' href="{{ $user?->twitter }}"
                            imageUrl="{{ asset('assets/Twitter.png') }}"></x-social-media-icon>
                        <x-social-media-icon name='instagram' href="{{ $user?->instagram }}"
                            imageUrl="{{ asset('assets/Instagram.png') }}"></x-social-media-icon>
                        <x-social-media-icon name='discord' href="{{ $user?->discord }}"
                            imageUrl="{{ asset('assets/Discord.png') }}"></x-social-media-icon>
                    </div>
                </div>
            </div>
        </article>
        {{-- Skills Progress bar --}}
        <section class="my-8 grid items-center gap-8 md:grid-cols-3">
            {{-- Snapchat --}}
            <div class="bg-snapchat-yellow bg-opacity-15 relative w-full rounded-2xl p-8 sm:p-10">
                <img class="absolute left-5 top-1/2 z-10 w-16 -translate-y-1/2 sm:w-20 md:w-[70px]"
                    src="{{ asset('assets/Lens.png') }}" alt="" />
                <div class="flex items-center justify-center">
                    <div class="bg-snapchat-yellow h-5 w-full overflow-hidden rounded-full">
                        <div class="m-1 h-3 w-[90%] animate-pulse rounded-full bg-black"></div>
                    </div>
                </div>
            </div>

            {{-- Photoshop --}}
            <div class="bg-photoshop-blue bg-opacity-15 relative w-full rounded-2xl p-8 sm:p-10">
                <img class="absolute left-5 top-1/2 z-10 w-16 -translate-y-1/2 sm:w-20 md:w-[70px]"
                    src="{{ asset('assets/Photoshop.png') }}" alt="" />
                <div class="flex items-center justify-center">
                    <div class="bg-photoshop-blue h-5 w-full overflow-hidden rounded-full">
                        <div class="m-1 h-3 w-[75%] animate-pulse rounded-full bg-white"></div>
                    </div>
                </div>
            </div>

            {{-- Illustrator --}}
            <div class="bg-illustrator-orange bg-opacity-15 relative w-full rounded-2xl p-8 sm:p-10">
                <img class="absolute left-5 top-1/2 z-10 w-16 -translate-y-1/2 sm:w-[70px]"
                    src="{{ asset('assets/Illustrator.png') }}" alt="" />
                <div class="flex items-center justify-center">
                    <div class="bg-illustrator-orange h-5 w-full overflow-hidden rounded-full">
                        <div class="m-1 h-3 w-[97%] animate-pulse rounded-full bg-white"></div>
                    </div>
                </div>
            </div>

            {{-- Spline --}}
            <div class="bg-figma-green relative w-full rounded-2xl bg-opacity-10 p-8 sm:p-10">
                <img class="sm:w-[70px]sm:w-20 absolute left-5 top-1/2 z-10 w-16 -translate-y-1/2"
                    src="{{ asset('assets/Spline.png') }}" alt="" />
                <div class="flex items-center justify-center">
                    <div class="bg-photoshop-blue h-5 w-full overflow-hidden rounded-full">
                        <div class="m-1 h-3 w-[85%] animate-pulse rounded-full bg-white"></div>
                    </div>
                </div>
            </div>

            {{-- Blender --}}
            <div class="bg-illustrator-orange bg-opacity-15 relative w-full rounded-2xl p-8 sm:p-10">
                <img class="absolute left-5 top-1/2 z-10 w-16 -translate-y-1/2 sm:w-20 md:w-[70px]"
                    src="{{ asset('assets/Blender.png') }}" alt="" />
                <div class="flex items-center justify-center">
                    <div class="bg-photoshop-blue h-5 w-full overflow-hidden rounded-full bg-opacity-70">
                        <div class="m-1 h-3 w-[50%] animate-pulse rounded-full bg-white"></div>
                    </div>
                </div>
            </div>

            {{-- Figma --}}
            <div class="bg-figma-green bg-opacity-15 relative w-full rounded-2xl p-8 sm:p-10">
                <img class="absolute left-5 top-1/2 z-10 w-16 -translate-y-1/2 md:w-[70px]"
                    src="{{ asset('assets/Figma.png') }}" alt="" />
                <div class="flex items-center justify-center">
                    <div class="bg-figma-green h-5 w-full overflow-hidden rounded-full">
                        <div class="m-1 h-3 w-[97%] animate-pulse rounded-full bg-white"></div>
                    </div>
                </div>
            </div>
        </section>

        {{-- About me section --}}
        <section
            class="my-20 rounded-2xl border-2 border-white p-6 text-center text-lg leading-loose sm:p-10 sm:text-3xl">
            Hello there! I'm Anas El-ferjani, a Snapchat lens creator. I design
            unique lenses that add a magical touch to your Snapchat photos and
            videos. Whether you're looking for stunning visual enhancements or
            fun effects, I'm here to make your Snapchat experience
            unforgettable!
        </section>
    </main>
</x-app-layout>