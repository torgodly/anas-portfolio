<x-app-layout>

    <header class="uppercase text-6xl text-center tracking-tighter font-bold my-14">
        Snapchat Lenses
    </header>

    <article class="content-center mt-32 grid max-w-7xl mx-auto">
        <ul class="flex gap-10 mx-auto text-3xl">
            <li class="p-4 {{request('category') ? '' : 'border-b-2'}}" >
                <a wire:navigate href="{{ route('snapchat-lenses') }}">All</a>
            </li>
            <li class="p-4
            {{request('category') == 'Beauty' ? 'border-b-2' : ''}}
            "><a wire:navigate href="{{ route('snapchat-lenses', ['category' => 'Beauty']) }}">Beauty</a></li>
            <li class="p-4
            {{request('category') == '3D' ? 'border-b-2' : ''}}
            ">
                <a wire:navigate href="{{ route('snapchat-lenses', ['category' => '3D']) }}">3D Lenses</a>
            </li>
            <li class="p-4
                        {{request('category') == 'Games' ? 'border-b-2' : ''}}

            ">
                <a wire:navigate href="{{ route('snapchat-lenses', ['category' => 'Games']) }}">Games</a>
            </li>
        </ul>

<<<<<<< HEAD
        <section class="mt-32 mb-40 md:grid xl:grid-cols-3 md:grid-cols-2 grid gap-x-6 gap-y-40 mx-10 xl:mx-0">
            @for ($x = 0 ; $x < 9 ; $x++)
            <div class="relative overflow-visible">
                <div class="h-[550px] bg-white rounded-3xl"></div>
                <div class="absolute left-1/2 -bottom-32 -translate-x-1/2 ">
                    <div class=" rounded-3xl w-40 h-40 bg-snapchat-yellow "></div>
                    <p class="text-white text-center mt-4 text-5xl">Text</p>

                </div>

=======
        @if($lenses->count() > 0)
            <section class="mt-32 mb-40 grid grid-cols-3 gap-x-6 gap-y-40">
                @foreach($lenses as $lens)
                    <a href="{{ $lens->link }}" class="relative overflow-visible block w-full max-w-[550px] mx-auto">
                        <div class="h-[550px] bg-white rounded-3xl relative">
                            <img src="{{ asset('storage/'.$lens->cover_image) }}" alt="lens"
                                 class="w-full h-full rounded-3xl">
                            <div class="absolute left-1/2 -bottom-32 -translate-x-1/2 flex flex-col items-center w-full">
                                <img src="{{ asset('storage/'.$lens->code_image) }}" alt="lens"
                                     class="w-40 h-40 rounded-3xl mb-4">
                                <p class="text-white text-center text-4xl max-w-full px-4 overflow-wrap break-all">{{ $lens->name }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </section>
        @else
            <div class="text-center text-4xl mt-16">
                No lenses available at the moment.
>>>>>>> 6e48483b008fa9321c498c04a1d753eff95da785
            </div>
        @endif
    </article>
</x-app-layout>
