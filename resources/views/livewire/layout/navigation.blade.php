<?php

use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
}; ?>


<nav x-data="{ open: false }" class="my-4 max-w-8xl mx-2 sm:mx-10">
    <div class="flex flex-wrap items-center justify-between mx-auto p-4">
        <x-logo class="w-20 sm:w-24 md:w-24 lg:32 sm:mb-10 mb-2"/>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul
                class="flex flex-col font-extralight p-4 md:p-0 lg:space-x-8 md:space-x-4  rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link :href="route('snapchat-lenses')" :active="request()->routeIs('snapchat-lenses')"
                            wire:navigate>
                    {{ __('Snapchat Lenses') }}
                </x-nav-link>
                <x-nav-link :href="route('filesandvideos')" :active="request()->routeIs('filesandvideos')"
                            wire:navigate>
                    {{ __('Files & Videos') }}
                </x-nav-link>
                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" wire:navigate>
                    {{ __('Contact') }}
                </x-nav-link>
            </ul>

        </div>

        <div class="flex md:order-2 space-x-3 md:space-x-4 lg:space-x-0 rtl:space-x-reverse">
            <a  href="{{route('contact')}}"
                    class=" flex justify-center items-center text-black bg-snapchat-yellow transition-all hover:bg-snapchat-yellow hover:opacity-80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:text-lg px-4 py-2 text-center">
                Contact
                Me
            </a>

            <div class="-me-2 flex items-center md:hidden">
                <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                              stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden md:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')"
                                   :active="request()->routeIs('home')" {{--                wire:navigate --}}>
                {{ __('Home') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('snapchat-lenses')"
                                   :active="request()->routeIs('snapchat-lenses')" {{--                wire:navigate --}}>
                {{ __('Snapchat Lenses') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('filesandvideos')"
                                   :active="request()->routeIs('filesandvideos')" {{--                wire:navigate --}}>
                {{ __('Files & Videos') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')"
                                   :active="request()->routeIs('contact')" {{--                wire:navigate --}}>
                {{ __('Contact') }}
            </x-responsive-nav-link>
        </div>


    </div>


</nav>
