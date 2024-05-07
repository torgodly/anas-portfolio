<x-app-layout>

    <header class="uppercase text-6xl text-center tracking-tighter font-bold my-14">
        Snapchat Lenses
    </header>

    <article class="content-center mt-32 grid max-w-7xl mx-auto mb-40">


        <section class="grid gap-8">
            @for ($x = 0; $x < 4; $x++)
                <div class="relative bg-gray-500 rounded-3xl p-4 flex justify-between">
                    <div class="grid p-2">
                        <h3 class="text-5xl font-bold">Lorem, ipsum.</h3>
                        <p class="text-2xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, et
                            perspiciatis. Praesentium voluptatum suscipit tenetur vitae! Enim explicabo asperiores at?
                        </p>
                        <p class="text-2xl mt-8">10/2/2024</p>
                    </div>
                    <div class="bg-snapchat-yellow rounded-3xl w-80 aspect-square"><img src="" alt="">
                    </div>

                </div>
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
