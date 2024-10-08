<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Anas El-Ferjani - Snapchat Lens Creator and Graphic Designer with 5 years of experience and over 622 million plays. Explore my portfolio, Snapchat lenses, and more.">
    <meta name="keywords" content="Anas El-Ferjani, Snapchat Lenses, Graphic Designer, Portfolio, Snapchat Creator">
    <meta name="author" content="Anas El-Ferjani">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('storage/'.\App\Models\User::first()?->profile_picture) }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-black text-white">
<div class="min-h-screen ">
    <livewire:layout.navigation/>

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main class="max-w-7xl mx-auto">
        {{ $slot }}
    </main>
</div>
</body>
</html>
