<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans bg-[#0F0F0F]">
    <div class="text-white">
        <header class="text-white text-xl">
            {{-- Navigation Bar --}}
            <ul class="flex gap-4 uppercase justify-center my-6">
                {{-- <li class="justify-self-start">Logo</li> --}}
                <li>Home</li>
                <li>Stapchat Lenses</li>
                <li>Files & Videos</li>
                <li>Contact</li>
            </ul>
        </header>

        <main class="mt-6 mx-20">
            <article class="space-y-10">

                <div class="flex gap-10">
                    {{-- Welcome Message --}}
                    <div class="bg-white rounded-3xl w-3/5 p-6 text-black ">
                        <p class="text-8xl">Hi, I'm Anas and this is my work gallery</p> <button
                            class="bg-[#0F0F0F] rounded-md px-6 py-4 mt-6 text-white">Watch me</button>
                    </div>
                    {{-- Profile Picture --}}
                    <div class="bg-yellow-400 rounded-3xl p-6 w-2/5 aspect-square">
                        <img src="" class="w-20" alt="">
                    </div>
                </div>
                <div class="flex justify-between gap-10">
                    {{-- Experience Level --}}
                    <div class="bg-gray-500 border-4 border-white rounded-3xl w-[65%] p-6 text-black">
                        <p class="text-white text-6xl"><span class="text-yellow-300 text-8xl font-bold">3 </span>Years
                            of Experience</p>
                        <p class="text-white text-6xl"><span class="text-yellow-300 text-8xl font-bold">3 </span>Years
                            of Experience</p>

                        <button class="bg-[#0F0F0F] rounded-md px-6 py-4 mt-6 text-white">See Lenses</button>
                    </div>
                    {{-- Persoanl Information --}}
                    <div class="space-y-4 w-[35%] ">
                        <div class="rounded-3xl bg-white h-20"></div>
                        <div class="rounded-3xl bg-yellow-300 h-20"></div>
                        <div class="rounded-3xl bg-white h-20"></div>
                        {{-- Social Media Links --}}
                        <div class="flex">
                            <div class="h-10 w-10 bg-white rounded-2xl aspect-square"></div>
                            <div class="h-10 w-10 bg-white rounded-2xl aspect-square"></div>
                            <div class="h-10 w-10 bg-white rounded-2xl aspect-square"></div>
                            <div class="h-10 w-10 bg-white rounded-2xl aspect-square"></div>
                        </div>
                    </div>
                </div>
            </article>

        </main>


    </div>
</body>

</html>
