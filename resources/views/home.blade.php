<x-app-layout>
    <main class="mx-4 mt-6 w-fit md:mx-10">
        <article class="space-y-8 sm:space-y-8 xl:space-y-12">
            <div class="flex flex-col gap-6 md:flex-row md:gap-8 xl:gap-12">
                {{-- Welcome Message --}}
                <div class="flex flex-col rounded-3xl bg-white p-4 text-black sm:p-10 md:w-4/6">
                    <p class="font-smooch text-6xl md:text-7xl xl:text-6xl">
                        {{ $user?->welcome_message }}
                    </p>

                </div>
                {{-- Profile Picture --}}
                {{-- <img class="size-fit aspect-square md:w-2/5" src="{{ asset('storage/' . $user->profile_picture) }}"
                    alt="Profile Picture" /> --}}
                <img class="size-fit aspect-square md:w-2/6 object-contain" src="{{ asset('storage/'.$user?->profile_picture) }}"
                     alt="Profile Picture"/>

            </div>

            <div class="md:flex md:justify-between md:flex-row-reverse    md:gap-8 xl:gap-12">
                {{-- Experience Level --}}
                {{-- Persoanl Information --}}
                <div class="mt-8 space-y-4 md:mt-0 md:w-[35%]">
                    <div
                        class="md:h-18 grid h-14 content-center rounded-3xl bg-white p-3 text-center font-somar text-4xl font-medium text-black sm:h-[68px] sm:text-2xl md:text-2xl xl:h-20 xl:text-4xl">
                        <p>Anas El-Ferjani</p>
                    </div>
                    <div
                        class="text-nowrap md:h-18 grid h-14 content-center rounded-3xl bg-snapchat-yellow p-4 text-center font-somar text-4xl font-medium text-black sm:h-[68px] sm:text-2xl md:text-2xl xl:h-20 xl:text-4xl">
                        <p>Snapchat Lens Creator</p>
                    </div>
                    <div
                        class="md:h-18 grid h-14 content-center rounded-3xl bg-white p-4 text-center font-somar text-4xl font-medium text-black sm:h-[68px] sm:text-2xl md:text-2xl xl:h-20 xl:text-4xl">
                        <p>Graphic Designer</p>
                    </div>
                    {{-- Social Media Links --}}
                    <div class="flex justify-between sm:justify-center sm:gap-8 md:justify-between md:gap-3 ">
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
                <div
                    class="bg-opacity-15 relative grid rounded-3xl border-4 border-white bg-white p-5 text-black sm:p-6 md:w-[65%] mt-8 md:mt-0 ">

                    <p class="text-nowrap font-somar text-5xl font-light text-white sm:text-6xl md:text-7xl">
                        <span
                            class="text-6xl font-bold text-snapchat-yellow sm:text-7xl md:text-8xl">{{ $user?->years_of_experience }}
                        </span>Years of Experience
                    </p>

                    <p class="font-somar text-5xl font-light text-white sm:text-6xl md:text-7xl">
                        <span
                            class="text-6xl font-bold text-snapchat-yellow sm:text-7xl md:text-8xl">{{ $user?->plays }}</span>+
                        Million Plays
                    </p>

                    <img
                        class="absolute right-0 top-2/3 w-20 -translate-y-1/2 sm:right-[20%] md:right-0 md:top-2/3 md:w-44 "
                        src="{{ asset('assets/Snapchat-Rotated.png') }}" alt=""/>
                    <a class="mt-6 self-center justify-self-center rounded-3xl bg-white px-14 py-2 font-somar text-xl text-black sm:text-3xl xl:text-4xl"
                       href="{{ route('snapchat-lenses') }}">
                        See Lenses
                    </a>
                </div>

            </div>
        </article>
        {{-- Skills Progress bar --}}
        <section class="my-8 grid items-center gap-8 md:grid-cols-3">
            {{-- Snapchat --}}
            <div class="bg-opacity-15 relative w-full rounded-2xl bg-snapchat-yellow p-8 sm:p-10">
                <img class="absolute left-5 top-1/2 z-10 w-16 -translate-y-1/2 sm:w-20 md:w-[70px]"
                     src="{{ asset('assets/Lens.png') }}" alt=""/>
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-snapchat-yellow">
                        <div class="m-1 h-3 w-[90%]  rounded-full bg-[#6D5F03]"></div>
                    </div>
                </div>
            </div>

            {{-- Photoshop --}}
            <div class="bg-opacity-15 relative w-full rounded-2xl bg-photoshop-blue p-8 sm:p-10">
                <img class="absolute left-5 top-1/2 z-10 w-16 -translate-y-1/2 sm:w-20 md:w-[70px]"
                     src="{{ asset('assets/Photoshop.png') }}" alt=""/>
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-photoshop-blue">
                        <div class="m-1 h-3 w-[75%]  rounded-full bg-white"></div>
                    </div>
                </div>
            </div>

            {{-- Illustrator --}}
            <div class="bg-opacity-15 relative w-full rounded-2xl bg-illustrator-orange p-8 sm:p-10">
                <img class="absolute left-5 top-1/2 z-10 w-16 -translate-y-1/2 sm:w-[70px]"
                     src="{{ asset('assets/Illustrator.png') }}" alt=""/>
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-illustrator-orange">
                        <div class="m-1 h-3 w-[97%]  rounded-full bg-white"></div>
                    </div>
                </div>
            </div>

            {{-- Spline --}}
            <div class="relative w-full rounded-2xl bg-figma-green bg-opacity-10 p-8 sm:p-10">
                <img class="sm:w-[70px]sm:w-20 absolute left-5 top-1/2 z-10 w-16 -translate-y-1/2"
                     src="{{ asset('assets/Spline.png') }}" alt=""/>
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-photoshop-blue">
                        <div class="m-1 h-3 w-[85%]  rounded-full bg-white"></div>
                    </div>
                </div>
            </div>

            {{-- Blender --}}
            <div class="bg-opacity-15 relative w-full rounded-2xl bg-illustrator-orange p-8 sm:p-10">
                <img class="absolute left-5 top-1/2 z-10 w-16 -translate-y-1/2 sm:w-20 md:w-[70px]"
                     src="{{ asset('assets/Blender.png') }}" alt=""/>
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-photoshop-blue bg-opacity-70">
                        <div class="m-1 h-3 w-[50%]  rounded-full bg-white"></div>
                    </div>
                </div>
            </div>

            {{-- Figma --}}
            <div class="bg-opacity-15 relative w-full rounded-2xl bg-figma-green p-8 sm:p-10">
                <img class="absolute left-5 top-1/2 z-10 w-16 -translate-y-1/2 md:w-[70px]"
                     src="{{ asset('assets/Figma.png') }}" alt=""/>
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-figma-green">
                        <div class="m-1 h-3 w-[97%]  rounded-full bg-white"></div>
                    </div>
                </div>
            </div>
        </section>

        {{-- About me section --}}
        <section
            class="font-somar my-20 rounded-2xl border-2 border-white p-6 text-center text-lg leading-loose sm:p-10 sm:text-3xl">
            Hello there! I'm Anas El-ferjani, a Snapchat lens creator. I design
            unique lenses that add a magical touch to your Snapchat photos and
            videos. Whether you're looking for stunning visual enhancements or
            fun effects, I'm here to make your Snapchat experience
            unforgettable!
        </section>
    </main>
</x-app-layout>
