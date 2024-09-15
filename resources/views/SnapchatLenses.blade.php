<x-app-layout>

    <x-header>
        Snapchat Lenses
    </x-header>

    <article class="mx-auto mt-32 grid max-w-7xl content-center">
        <ul class="mx-auto flex gap-4 text-2xl md:gap-10 md:text-5xl">
            <li class="{{ request('category') ? '' : 'border-b-2' }} p-2 md:p-4">
                <a class="font-somar font-light" href="{{ route('snapchat-lenses') }}" wire:navigate>All</a>
            </li>

            <li class="{{ request('category') == 'Beauty' ? 'border-b-2' : '' }} p-2 md:p-4">
                <a class="font-somar font-light" href="{{ route('snapchat-lenses', ['category' => 'Beauty']) }}"
                    wire:navigate>Beauty</a>
            </li>

            <li class="{{ request('category') == '3D' ? 'border-b-2' : '' }} p-2 md:p-4">
                <a class="font-somar font-light" href="{{ route('snapchat-lenses', ['category' => '3D']) }}"
                    wire:navigate>3D & AR</a>
            </li>

            <li class="{{ request('category') == 'Games' ? 'border-b-2' : '' }} p-2 md:p-4">
                <a class="font-somar font-light" href="{{ route('snapchat-lenses', ['category' => 'Games']) }}"
                    wire:navigate>Games</a>
            </li>
            <li class="{{ request('category') == 'ML' ? 'border-b-2' : '' }} p-2 md:p-4">
                <a class="font-somar font-light" href="{{ route('snapchat-lenses', ['category' => 'ML']) }}"
                   wire:navigate>ML</a>
            </li>
        </ul>

        @if ($lenses->count() > 0)
            <section class="mx-auto mb-40 mt-32 grid grid-cols-1 gap-x-6 gap-y-40 md:grid-cols-4">
                @foreach ($lenses as $lens)
                    <a class="relative mx-auto block w-full max-w-[550px] overflow-visible" href="{{ $lens->link }}" target="_blank">
                        <div class="relative h-[550px] rounded-3xl bg-white">
                            <img class="h-full w-full rounded-3xl" src="{{ asset('storage/' . $lens->cover_image) }}"
                                alt="lens">
                            <div
                                class="absolute -bottom-32 left-1/2 flex w-full -translate-x-1/2 flex-col items-center">
                                <img class="mb-4 h-40 w-40 rounded-3xl"
                                    src="{{ asset('storage/' . $lens->code_image) }}" alt="lens">
                                <p class="overflow-wrap max-w-full break-all px-4 text-center text-2xl text-white">
                                    {{ $lens->name}}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </section>
        @else
            <div class="mt-16 text-center text-3xl md:text-4xl">
                No lenses available at the moment.
            </div>
        @endif
    </article>
</x-app-layout>
