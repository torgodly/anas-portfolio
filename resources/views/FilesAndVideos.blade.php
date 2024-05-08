<x-app-layout>

    <x-header>
        Snapchat Lenses
    </x-header>

    <article class="content-center mt-32 grid max-w-7xl mb-40 md:mx-10 mx-4">


        <section class="grid gap-8">
            @for ($x = 0; $x < 4; $x++)
                <a
                href="/len/id"
                wire:navigate
                class="relative bg-gray-500 rounded-3xl mx-auto p-4 flex flex-col-reverse items-center text-center gap-4 md:gap-0 md:text-left  md:flex-row md:justify-between">
                    <div class="grid p-2">
                        <h3 class="md:text-5xl text-4xl font-bold">Lorem, ipsum.</h3>
                        <p class="md:text-2xl text-xl mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, et
                            perspiciatis. Praesentium voluptatum suscipit tenetur vitae! Enim explicabo asperiores at?
                        </p>
                        <p class=" md:text-2xl text-xl mt-8">10/2/2024</p>
                    </div>
                    <div class="bg-snapchat-yellow rounded-3xl h-64 aspect-square mt-4 md:mt-0"><img src="" alt="">
                    </div>

                </a>
                @endfor
                <p class="text-2xl">View More</p>

        </section>

        <section>
            <h2 class="uppercase text-4xl text-center tracking-tighter font-bold my-14">
                Educational Videos
            </h2>

            <div class="grid gap-8">

                <div class="w-full bg-red-600 h-[600px] rounded-lg">
                   <img src="" alt="">
                </div>

                <div class="w-full bg-red-600 h-[600px] rounded-lg">
                    <img src="" alt="">
                </div>
            </div>
        </section>
    </article>
</x-app-layout>
