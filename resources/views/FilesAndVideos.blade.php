<x-app-layout>

    <x-header>
        Snapchat Lenses
    </x-header>

    <article class="mx-4 mb-40 mt-32 grid max-w-7xl content-center md:mx-10">

        <section class="grid gap-8">
            @foreach ($files as $file)
                <a class="relative mx-auto flex flex-col-reverse items-center gap-4 rounded-3xl bg-gray-500 p-4 text-center md:flex-row md:justify-between md:gap-0 md:text-left"
                    href="{{ route('file.show', $file) }}" wire:navigate>
                    <div class="grid p-2">
                        <h3 class="text-4xl font-bold md:text-5xl">{{ $file->title }}</h3>
                        <p class="mt-4 text-xl md:text-2xl">{{ $file->excerpt }}</p>
                        <p class="mt-8 text-xl md:text-2xl">{{ $file->created_at->format('d/m/Y') }}</p>
                    </div>
                    <div class="mt-4 aspect-square h-64 rounded-3xl bg-snapchat-yellow md:mt-0">
                        <img class="h-full w-full rounded-xl" src="{{ asset('storage/' . $file->image) }}"
                            alt="">
                    </div>

                </a>
            @endforeach
            {{--            <p class="text-2xl">View More</p> --}}

        </section>

        <section>
            <h2 class="my-14 text-center text-4xl font-bold uppercase tracking-tighter">
                Educational Videos
            </h2>

            <div class="grid gap-8">

                @foreach ($videos as $video)
                    <div class="flex h-[600px] w-full items-center justify-center rounded-lg bg-red-600">
                        <iframe class="h-5/6 w-11/12" src="{{ $video->link }}">
                        </iframe>
                    </div>
                @endforeach

            </div>
        </section>
    </article>
</x-app-layout>
