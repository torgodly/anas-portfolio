<x-app-layout>
    <main class="mx-4 mt-6 sm:mx-10">
        <x-header>
            Contact Me
        </x-header>

        <article class="mb-20 grid gap-8 md:grid-cols-2">

            <div
                class="grid justify-center rounded-3xl border-2 border-white p-4 text-center text-2xl md:p-10 md:text-4xl">

                <p>If you have any idea in mind, Contact me and I will turn it into reality!</p>

                <p class="my-6 mt-10">Contact me on:</p>
                <div class="mb-20 flex items-center justify-center gap-4">
                    <a class="aspect-square h-10 md:h-16" href="{{ $user?->telegram }}" target="_blank"><img
                            src="{{ asset('assets/telegram.png') }}" alt=""></a>
                    <a class="aspect-square h-10 md:h-16" href="{{ $user?->whatsapp }}" target="_blank"><img
                            src="{{ asset('assets/whatsapp.png') }}" alt=""></a>
                </div>

                <div class="flex justify-center gap-3">
                    <x-social-media-icon name='snapchat' href="{{ $user?->snapchat }}"
                        imageUrl="{{ asset('assets/Snapchat.png') }}"></x-social-media-icon>
                    <x-social-media-icon name='twitter' href="{{ $user?->twitter }}"
                        imageUrl="{{ asset('assets/Twitter.png') }}"></x-social-media-icon>
                    <x-social-media-icon name='instagram' href="{{ $user?->instagram }}"
                        imageUrl="{{ asset('assets/Instagram.png') }}"></x-social-media-icon>
                    <x-social-media-icon name='youtube' href="{{ $user?->youtube }}"
                        imageUrl="{{ asset('assets/youtube.png') }}"></x-social-media-icon>
                </div>
            </div>

            <div class="grid w-full">
                @if (session('message'))
                    <div class="mb-6 h-fit rounded-lg bg-green-500 p-4 text-center text-white">
                        {{ session('message') }}
                    </div>
                @endif
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="flex flex-col items-center justify-center space-y-6">
                        <section class="grid w-full gap-6 md:grid-cols-2 md:gap-4">

                            <input class="h-12 rounded-2xl border-2 border-white bg-black" id="name" name="name"
                                type="text" placeholder="Name">
                            <input class="h-12 rounded-2xl border-2 border-white bg-black" id="email" name="email"
                                type="email" placeholder="Email">
                        </section>

                        <input class="h-12 w-full rounded-2xl border-2 border-white bg-black" id="subject"
                            name="subject" type="text" placeholder="Subject">
                        <textarea class="w-full rounded-2xl border-2 border-white bg-black" id="message" name="message" placeholder="Message"
                            cols="30" rows="10"></textarea>

                        <button
                            class="mx-auto self-end rounded-xl bg-snapchat-yellow px-10 py-3 text-center text-2xl font-semibold text-black"
                            type="submit">
                            Send
                        </button>
                    </div>
                </form>

            </div>
        </article>

    </main>
</x-app-layout>
