<x-app-layout>

    <header class="uppercase text-6xl text-center tracking-tighter font-bold my-14">
        Snapchat Lenses
    </header>

    <article class="content-center mt-32 grid max-w-7xl mx-auto">
        <ul class="flex gap-10 mx-auto text-3xl">
            <li class="p-4 border-b-2 ">All</li>
            <li class="p-4 ">Beauty</li>
            <li class="p-4 ">3D Lenses</li>
            <li class="p-4 ">Games</li>
        </ul>

        <section class="mt-32 mb-40 md:grid xl:grid-cols-3 md:grid-cols-2 grid gap-x-6 gap-y-40 mx-10 xl:mx-0">
            @for ($x = 0 ; $x < 9 ; $x++)
            <div class="relative overflow-visible">
                <div class="h-[550px] bg-white rounded-3xl"></div>
                <div class="absolute left-1/2 -bottom-32 -translate-x-1/2 ">
                    <div class=" rounded-3xl w-40 h-40 bg-snapchat-yellow "></div>
                    <p class="text-white text-center mt-4 text-5xl">Text</p>

                </div>

            </div>
            @endfor



        </section>
    </article>
</x-app-layout>
