<?php

use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
}; ?>

<nav class="max-w-8xl mx-2 my-4 sm:mx-10" x-data="{ open: false }">
    <div class="mx-auto flex flex-wrap items-center justify-between p-4">
        <x-logo class="lg:32 mb-2 w-20 sm:mb-6 sm:w-24 md:w-24" />

        <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="navbar-cta">
            <ul
                class="flex flex-col p-4 font-extralight rtl:space-x-reverse md:mt-0 md:flex-row md:space-x-4 md:border-0 md:p-0 lg:space-x-8">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link :href="route('snapchat-lenses')" :active="request()->routeIs('snapchat-lenses')" wire:navigate>
                    {{ __('Snapchat Lenses') }}
                </x-nav-link>
                <x-nav-link :href="route('filesandvideos')" :active="request()->routeIs('filesandvideos')" wire:navigate>
                    {{ __('Files & Videos') }}
                </x-nav-link>
                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" wire:navigate>
                    {{ __('Contact') }}
                </x-nav-link>
            </ul>

        </div>

        <div class="flex space-x-3 rtl:space-x-reverse md:order-2 md:space-x-4 lg:space-x-0">
            <a class="flex items-center justify-center rounded-lg bg-snapchat-yellow px-4 py-2 text-center text-sm font-medium text-black transition-all hover:bg-snapchat-yellow hover:opacity-80 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:text-lg"
                href="{{ route('contact') }}">
                Contact
                Me
            </a>

            <div class="-me-2 flex items-center md:hidden">
                <button
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none dark:text-gray-500 dark:hover:bg-gray-900 dark:hover:text-gray-400 dark:focus:bg-gray-900 dark:focus:text-gray-400"
                    @click="open = ! open">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" :class="{ 'hidden': open, 'inline-flex': !open }"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path class="hidden" :class="{ 'hidden': !open, 'inline-flex': open }" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>
    <div class="hidden md:hidden" :class="{ 'block': open, 'hidden': !open }">
        <div class="space-y-1 pb-3 pt-2">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" {{--                wire:navigate --}}>
                {{ __('Home') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('snapchat-lenses')" :active="request()->routeIs('snapchat-lenses')" {{--                wire:navigate --}}>
                {{ __('Snapchat Lenses') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('filesandvideos')" :active="request()->routeIs('filesandvideos')" {{--                wire:navigate --}}>
                {{ __('Files & Videos') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" {{--                wire:navigate --}}>
                {{ __('Contact') }}
            </x-responsive-nav-link>
        </div>

    </div>

</nav>
