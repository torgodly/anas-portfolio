<x-app-layout>
    <main class="mt-6 sm:mx-10 mx-4">
        <article class="sm:space-y-14 space-y-8">

            <div class="md:flex-row flex flex-col-reverse md:gap-14 gap-6">
                {{-- Welcome Message --}}
                <div class="bg-white rounded-3xl md:w-3/5 sm:p-10 p-4 grid text-black">
                    <p class="md:text-8xl text-6xl">Hi, I'm Anas and this is my work gallery</p> <button <button
                        class="bg-black rounded-3xl md:px-12 sm:py-4 px-10 py-4 mt-6 sm:text-3xl text-lg font-bold justify-self-start  text-white">See
                        Lenses</button>
                </div>
                {{-- Profile Picture --}}
                <img src="{{ asset('assets/Profile Picture.png') }}" class="md:w-2/5 aspect-square size-fit "
                    alt="Profile Picture">
            </div>

            <div class="md:flex md:justify-between md:gap-14">
                {{-- Experience Level --}}
                <div
                    class="bg-white bg-opacity-15 border-4 grid relative border-white rounded-3xl md:w-[65%] p-6 text-black">
                    <p class="text-white md:text-6xl sm:text-5xl text-3xl"><span class="text-snapchat-yellow md:text-8xl sm:text-7xl text-5xl font-bold">3
                        </span>Years
                        of Experience</p>
                    <p class="text-white md:text-6xl sm:text-5xl text-3xl"><span class="text-snapchat-yellow md:text-8xl sm:text-7xl text-5xl font-bold">317</span>+
                        Million Plays</p>
                    <img src="{{ asset('assets/Snapchat-Rotated.png') }}"
                        class="absolute md:w-40 w-20 md:right-0 sm:right-[6%] right-0 md:top-1/2 top-2/3 -translate-y-1/2" alt="">
                    <button
                        class="bg-white rounded-3xl md:px-12 md:py-4 px-10 py-4 mt-6 md:text-3xl text-lg font-bold justify-self-center text-black">See
                        Lenses
                    </button>
                </div>
                {{-- Persoanl Information --}}
                <div class="space-y-4 md:w-[35%] mt-8 md:mt-0 ">
                    <div
                        class="rounded-3xl bg-white md:h-20 sm:h-[68px] h-16 p-4 grid content-center text-black text-center md:text-4xl sm:text-3xl text-2xl font-bold">
                        <p>Anas El-Ferjani</p>
                    </div>
                    <div
                        class="rounded-3xl bg-snapchat-yellow text-nowrap md:h-20 sm:h-[68px] h-16 p-4 grid content-center text-black text-center md:text-4xl sm:text-3xl text-2xl font-bold">
                        <p>Snapchat Lens Creator</p>
                    </div>
                    <div
                        class="rounded-3xl bg-white md:h-20 h-16 sm:h-[68px] p-4 grid content-center text-black text-center md:text-4xl sm:text-3xl text-2xl font-bold">
                        <p>Graphic Designer</p>
                    </div>
                    {{-- Social Media Links --}}
                    <div class="flex justify-between">
                        <a href="#" class="md:h-24 sm:h-[90px] h-[70px] bg-white rounded-2xl flex content-center p-4 aspect-square"><img
                                src="{{ asset('assets/Snapchat.png') }}" alt=""></a>
                        <a href="#" class="md:h-24 sm:h-[90px] h-[70px] bg-white rounded-2xl flex content-center p-4 aspect-square"><img
                                src="{{ asset('assets/Twitter.png') }}" alt=""></a>
                        <a href="#" class="md:h-24 sm:h-[90px] h-[70px] bg-white rounded-2xl flex content-center p-4 aspect-square"><img
                                src="{{ asset('assets/Instagram.png') }}" alt=""></a>
                        <a href="#" class="md:h-24 sm:h-[90px] h-[70px] bg-white rounded-2xl flex content-center p-4 aspect-square"><img
                                src="{{ asset('assets/Discord.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </article>
        {{-- Skills Progress bar --}}
        <section class="my-8 grid md:grid-cols-3 gap-8 items-center">

            {{-- Snapchat --}}
            <div class="sm:p-10 p-8 rounded-2xl bg-snapchat-yellow bg-opacity-15 w-full relative">
                <img src="{{ asset('assets/Lens.png') }}" class="absolute md:w-[70px] sm:w-20 w-16 left-5 top-1/2 -translate-y-1/2 z-10"
                    alt="">
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-snapchat-yellow">
                        <div class="h-3 animate-pulse rounded-full bg-black w-[90%] m-1">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Photoshop --}}
            <div class="sm:p-10 p-8 rounded-2xl bg-photoshop-blue bg-opacity-15 w-full relative">
                <img src="{{ asset('assets/Photoshop.png') }}"
                    class="absolute md:w-[70px] sm:w-20 w-16 left-5 top-1/2 -translate-y-1/2 z-10" alt="">
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-photoshop-blue">
                        <div class="h-3 animate-pulse rounded-full bg-white w-[75%] m-1">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Illustrator --}}
            <div class="sm:p-10 p-8 rounded-2xl bg-illustrator-orange bg-opacity-15 w-full relative">
                <img src="{{ asset('assets/Illustrator.png') }}"
                    class="absolute sm:w-[70px] sm:w-20 w-16 left-5 top-1/2 -translate-y-1/2 z-10" alt="">
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-illustrator-orange">
                        <div class="h-3 animate-pulse rounded-full bg-white w-[97%] m-1">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Spline --}}
            <div class="sm:p-10 p-8 rounded-2xl bg-figma-green bg-opacity-10 w-full relative">
                <img src="{{ asset('assets/Spline.png') }}"
                    class="absolute sm:w-[70px]sm:w-20 w-16 left-5 top-1/2 -translate-y-1/2 z-10" alt="">
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-photoshop-blue">
                        <div class="h-3 animate-pulse rounded-full bg-white w-[85%] m-1">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Blender --}}
            <div class="sm:p-10 p-8 rounded-2xl bg-illustrator-orange bg-opacity-15 w-full relative">
                <img src="{{ asset('assets/Blender.png') }}"
                    class="absolute md:w-[70px] sm:w-20 w-16 left-5 top-1/2 -translate-y-1/2 z-10" alt="">
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-photoshop-blue bg-opacity-70">
                        <div class="h-3 animate-pulse rounded-full bg-white w-[50%] m-1">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Figma --}}
            <div class="sm:p-10 p-8 rounded-2xl bg-figma-green bg-opacity-15 w-full relative">
                <img src="{{ asset('assets/Figma.png') }}"
                    class="absolute md:w-[70px] w-16 left-5 top-1/2 -translate-y-1/2 z-10" alt="">
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-figma-green">
                        <div class="h-3 animate-pulse rounded-full bg-white w-[97%] m-1">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- About me section --}}
        <section class="my-20 rounded-2xl border-2 border-white sm:p-10 p-6 leading-loose sm:text-3xl text-lg text-center">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi vel maxime quis itaque id obcaecati
            numquam, ad in nisi animi nulla aperiam nam beatae mollitia similique, exercitationem optio distinctio
            quisquam est? Porro temporibus ea deserunt labore voluptates sed atque sunt?
        </section>

    </main>
</x-app-layout>
