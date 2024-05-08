<x-app-layout>
    <main class="mt-6 sm:mx-10 mx-4">
        <x-header>
            Contact Me
        </x-header>

        <article class="grid md:grid-cols-2 gap-8 mb-20">

            <div class="border-2 border-white grid justify-center md:text-4xl md:p-10 p-4 text-2xl  rounded-3xl text-center">

                <p>If you have any idea in mind, Contact me and I will turn it into reality!</p>

                <p class="my-6 mt-10">Contact me on:</p>
                <div class="flex items-center justify-center gap-4 mb-20">
                    <a href="#" target="_blank" class="md:h-16 h-10 aspect-square"><img src="{{ asset('assets/telegram.png') }}"
                            alt=""></a>
                    <a href="#" target="_blank" class="md:h-16 h-10 aspect-square"><img src="{{ asset('assets/whatsapp.png') }}"
                            alt=""></a>
                </div>

                <div class="flex justify-center gap-3 md:mt-20 mt-14">
                    {{-- <a href="#"
                        class="md:h-24 sm:h-[90px] h-16 bg-white rounded-2xl flex content-center p-4 aspect-square"><img
                            src="{{ asset('assets/Snapchat.png') }}" alt=""></a> --}}

                            <x-social-media-icon imageUrl="{{ asset('assets/Snapchat.png') }}" name='snapchat'></x-social-media-icon>
                            <x-social-media-icon imageUrl="{{ asset('assets/Twitter.png') }}" name='twitter'></x-social-media-icon>
                            <x-social-media-icon imageUrl="{{ asset('assets/Instagram.png') }}" name='instagram'></x-social-media-icon>
                            <x-social-media-icon imageUrl="{{ asset('assets/Discord.png') }}" name='discord'></x-social-media-icon>

                </div>
            </div>

            <div class="w-full grid">
                <div class="space-y-6">
                    <section class="grid md:grid-cols-2 md:gap-4 gap-6">

                        <input placeholder="Name" class="border-2 h-12 border-white bg-black rounded-2xl" type="text"
                            name="name" id="name">
                        <input placeholder="Email" class="border-2 h-12 border-white bg-black rounded-2xl"
                            type="email" name="email" id="email">
                    </section>

                    <input placeholder="Subject" class="border-2 w-full h-12 border-white bg-black rounded-2xl"
                        type="text" name="subject" id="subject">
                    <textarea placeholder="Message" class="border-2 w-full border-white bg-black rounded-2xl" name="message" id="message"
                        cols="30" rows="10"></textarea>
                </div>
                <button
                    class="bg-snapchat-yellow text-black rounded-2xl px-16 text-3xl font-bold text-center mx-auto mt-14">Send</button>
            </div>
        </article>

    </main>
</x-app-layout>
