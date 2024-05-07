<x-app-layout>
    <main class="mt-6 mx-10">
        <article class="space-y-10">

            <div class="flex gap-10">
                {{-- Welcome Message --}}
                <div class="bg-white rounded-3xl w-3/5 p-10 grid text-black ">
                    <p class="text-8xl">Hi, I'm Anas and this is my work gallery</p> <button
                    <button class="bg-black rounded-3xl px-12 py-4 mt-6 text-3xl font-bold justify-self-start  text-white">See Lenses</button>
                </div>
                {{-- Profile Picture --}}

                    <img src="{{ asset('assets/Profile Picture.png') }}" class="w-2/5 aspect-square size-fit " alt="">

            </div>
            <div class="flex justify-between gap-10">
                {{-- Experience Level --}}
                <div class="bg-white bg-opacity-15 border-4 grid relative border-white rounded-3xl w-[65%] p-6 text-black">
                    <p class="text-white text-6xl"><span class="text-snapchat-yellow text-8xl font-bold">3 </span>Years
                        of Experience</p>
                    <p class="text-white text-6xl"><span class="text-snapchat-yellow text-8xl font-bold">317</span>+
                        Million Plays</p>

                        <img src="{{ asset("assets/Snapchat-Rotated.png") }}" class="absolute w-40 right-6 top-1/2 -translate-y-1/2" alt="">

                    <button class="bg-white rounded-3xl px-12 py-4 mt-6 text-3xl font-bold justify-self-center text-black">See Lenses</button>
                </div>
                {{-- Persoanl Information --}}
                <div class="space-y-4 w-[35%] ">
                    <div class="rounded-3xl bg-white h-20 p-4 text-black text-center text-3xl font-bold">
                        <p class="my-2">Anas El-Ferjani</p>
                    </div>
                    <div class="rounded-3xl bg-snapchat-yellow h-20 p-4 text-black text-center text-3xl font-bold">
                        <p class="my-2">Snapchat Lens Creator</p>
                    </div>
                    <div class="rounded-3xl bg-white h-20 p-4 text-black text-center text-3xl font-bold">
                        <p class="my-2">Graphic Designer</p>
                    </div>
                    {{-- Social Media Links --}}
                    <div class="flex justify-between">
                        <a href="#" class="h-24 bg-white rounded-2xl flex content-center p-6 aspect-square"><img src="{{ asset("assets/Snapchat.png") }}" alt=""></a>
                        <a href="#" class="h-24 bg-white rounded-2xl flex content-center p-6 aspect-square"><img src="{{ asset("assets/Twitter.png") }}" alt=""></a>
                        <a href="#" class="h-24 bg-white rounded-2xl flex content-center p-6 aspect-square"><img src="{{ asset("assets/Instagram.png") }}" alt=""></a>
                        <a href="#" class="h-24 bg-white rounded-2xl flex content-center p-6 aspect-square"><img src="{{ asset("assets/Discord.png") }}" alt=""></a>
                    </div>
                </div>
            </div>
        </article>
        {{-- Skills Progress bar --}}
        <section class="my-10 grid grid-cols-3 gap-8 justify-between">

            {{-- Snapchat --}}
            <div class="p-10 rounded-2xl bg-snapchat-yellow bg-opacity-15 w-full relative">
                <img src="{{ asset("assets/Lens.png") }}" class="absolute w-[70px] left-5 top-1/2 -translate-y-1/2 z-10" alt="">
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-snapchat-yellow">
                        <div class="h-3 animate-pulse rounded-full bg-black w-[92%] m-1">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Photoshop --}}
            <div class="p-10 rounded-2xl bg-photoshop-blue bg-opacity-15 w-full relative">
                <img src="{{ asset("assets/Photoshop.png") }}" class="absolute w-[70px] left-5 top-1/2 -translate-y-1/2 z-10" alt="">
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-photoshop-blue">
                        <div class="h-3 animate-pulse rounded-full bg-white w-[75%] m-1">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Illustrator --}}
            <div class="p-10 rounded-2xl bg-illustrator-orange bg-opacity-15 w-full relative">
                <img src="{{ asset("assets/Illustrator.png") }}" class="absolute w-[70px] left-5 top-1/2 -translate-y-1/2 z-10" alt="">
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-illustrator-orange">
                        <div class="h-3 animate-pulse rounded-full bg-white w-[95%] m-1">
                        </div>
                    </div>
                </div>
            </div>

            {{--  --}}
            <div class="p-10 rounded-2xl bg-figma-green bg-opacity-10 w-full relative">
                <img src="{{ asset("assets/Spline.png") }}" class="absolute w-[70px] left-5 top-1/2 -translate-y-1/2 z-10" alt="">
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-photoshop-blue">
                        <div class="h-3 animate-pulse rounded-full bg-white w-[85%] m-1">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Blender --}}
            <div class="p-10 rounded-2xl bg-illustrator-orange bg-opacity-15 w-full relative">
                <img src="{{ asset("assets/Blender.png") }}" class="absolute w-[70px] left-5 top-1/2 -translate-y-1/2 z-10" alt="">
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-photoshop-blue bg-opacity-70">
                        <div class="h-3 animate-pulse rounded-full bg-white w-[50%] m-1">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Figma --}}
            <div class="p-10 rounded-2xl bg-figma-green bg-opacity-15 w-full relative">
                <img src="{{ asset("assets/Figma.png") }}" class="absolute w-[70px] left-5 top-1/2 -translate-y-1/2 z-10" alt="">
                <div class="flex items-center justify-center">
                    <div class="h-5 w-full overflow-hidden rounded-full bg-figma-green">
                        <div class="h-3 animate-pulse rounded-full bg-white w-[97%] m-1">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- About me section --}}
        <section class="my-20 rounded-2xl border-2 border-white p-10 leading-loose text-3xl text-center">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi vel maxime quis itaque id obcaecati
            numquam, ad in nisi animi nulla aperiam nam beatae mollitia similique, exercitationem optio distinctio
            quisquam est? Porro temporibus ea deserunt labore voluptates sed atque sunt?
        </section>

    </main>
</x-app-layout>
