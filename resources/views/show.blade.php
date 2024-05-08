<x-app-layout>

    <x-header>
    {{$post->title}}
    </x-header>

    <article class="content-center mt-32 grid max-w-7xl mb-40 md:mx-10 mx-4">


        <section class="grid md:gap-8 gap-6">
            <div class="bg-snapchat-yellow rounded-3xl w-[80%] h-96 mx-auto">
                <img src="{{asset('storage/'.$post->image)}}" class="h-96 w-full rounded-xl">
            </div>
            <div class="grid md:gap-8 gap-6">

                <div
                        class="bg-white bg-opacity-20 grid items-start rounded-3xl h-fit w-full mx-auto p-10 text-2xl text-center ">
                    <p class="md:p-10 p-4 text-2xl md:text-4xl">{{$post->content}}</p>
                    <p class="text-left mt-20 text-md md:text-xl self-end">{{$post->created_at->format('d/m/Y')}}</p>
                </div>
            </div>
            <a href="{{$post->link}}" class="bg-snapchat-yellow text-black rounded-xl px-12 py-4 md:text-3xl text-xl font-bold text-center mx-auto uppercase ">Download</a>
        </section>

    </article>

</x-app-layout>
