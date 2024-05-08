<x-app-layout>

    <x-header>
        Snapchat Lenses
    </x-header>

    <article class="content-center mt-32 grid max-w-7xl mb-40 md:mx-10 mx-4">


        <section class="grid gap-8">
            @foreach($files as $file)

                <a
                    href="{{route('file.show', $file)}}"
                    wire:navigate
                    class="relative bg-gray-500 rounded-3xl mx-auto p-4 flex flex-col-reverse items-center text-center gap-4 md:gap-0 md:text-left  md:flex-row md:justify-between">
                    <div class="grid p-2">
                        <h3 class="md:text-5xl text-4xl font-bold">{{$file->title}}</h3>
                        <p class="md:text-2xl text-xl mt-4">{{$file->excerpt}}</p>
                        <p class=" md:text-2xl text-xl mt-8">{{$file->created_at->format('d/m/Y')}}</p>
                    </div>
                    <div class="bg-snapchat-yellow rounded-3xl h-64 aspect-square mt-4 md:mt-0">
                        <img src="{{asset('storage/'.$file->image)}}" alt="" class="w-full h-full rounded-xl">
                    </div>

                </a>

            @endforeach
{{--            <p class="text-2xl">View More</p>--}}

        </section>

        <section>
            <h2 class="uppercase text-4xl text-center tracking-tighter font-bold my-14">
                Educational Videos
            </h2>

            <div class="grid gap-8">

                @foreach($videos as $video)
                    <div class="w-full bg-red-600 h-[600px] rounded-lg flex justify-center items-center">
                        <iframe class="w-11/12 h-5/6"
                                src="{{$video->link}}">
                        </iframe>
                    </div>
                @endforeach

            </div>
        </section>
    </article>
</x-app-layout>
