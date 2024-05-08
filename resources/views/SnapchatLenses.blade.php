<x-app-layout>

    <x-header>
        Snapchat Lenses
    </x-header>

    <article class="content-center mt-32 grid max-w-7xl mx-auto">
        <ul class="flex gap-4 md:gap-10 mx-auto md:text-3xl text-lg ">
            <li class="md:p-4 p-2 {{ request('category') ? '' : 'border-b-2' }}">
                <a wire:navigate href="{{ route('snapchat-lenses') }}">All</a>
            </li>

            <li class="md:p-4 p-2
            {{ request('category') == 'Beauty' ? 'border-b-2' : '' }}
            ">
                <a wire:navigate href="{{ route('snapchat-lenses', ['category' => 'Beauty']) }}">Beauty</a>
            </li>

            <li class="md:p-4 p-2
            {{ request('category') == '3D' ? 'border-b-2' : '' }}
            ">
                <a wire:navigate href="{{ route('snapchat-lenses', ['category' => '3D']) }}">3D Lenses</a>
            </li>

            <li
                class="md:p-4 p-2
                        {{ request('category') == 'Games' ? 'border-b-2' : '' }}

            ">
                <a wire:navigate href="{{ route('snapchat-lenses', ['category' => 'Games']) }}">Games</a>
            </li>
        </ul>

        @if ($lenses->count() > 0)
            <section class="mt-32 mb-40 grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-40 mx-auto ">
                @foreach ($lenses as $lens)
                    <a href="{{ $lens->link }}" class="relative overflow-visible block w-full max-w-[550px] mx-auto">
                        <div class="h-[550px] bg-white rounded-3xl relative">
                            <img src="{{ asset('storage/' . $lens->cover_image) }}" alt="lens"
                                 class="w-full h-full rounded-3xl">
                            <div
                                class="absolute left-1/2 -bottom-32 -translate-x-1/2 flex flex-col items-center w-full">
                                <img src="{{ asset('storage/' . $lens->code_image) }}" alt="lens"
                                     class="w-40 h-40 rounded-3xl mb-4">
                                <p class="text-white text-center text-4xl max-w-full px-4 overflow-wrap break-all">
                                    {{ $lens->name }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </section>
        @else
            <div class="text-center md:text-4xl text-3xl mt-16">
                No lenses available at the moment.
            </div>
        @endif
    </article>
</x-app-layout>
