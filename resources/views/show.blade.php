<x-app-layout>

    <x-header>
        {{ $post->title }}
    </x-header>

    <article class="mx-4 mb-40 mt-16 grid max-w-7xl content-center md:mx-10">
        <section class="grid gap-6 md:gap-8">
            <div class="mx-auto h-96 w-fit  rounded-3xl ">
                <img class="h-96 w-full rounded-xl object-contain " src="{{ asset('storage/' . $post->image) }}">
            </div>
            <div class="grid gap-6 md:gap-8">
                <div
                    class="mx-auto grid h-fit w-full items-start rounded-3xl bg-white bg-opacity-20 p-3 text-2xl md:p-10" dir="auto">
                    <div class=" font-somar text-2xl font-medium  md:text-4xl">{!! $post->content !!}</div>
                    <p class="text-md mt-20 self-end text-left md:text-xl">{{ $post->created_at->format('d/m/Y') }}</p>
                </div>
            </div>
            <a class="mx-auto rounded-xl bg-snapchat-yellow px-12 py-4 text-center text-xl font-bold uppercase text-black md:text-3xl"
               href="{{ $post->link }}" target="_blank">Download</a>
        </section>

    </article>

</x-app-layout>
