<?php

use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
}; ?>


<nav class="my-4 max-w-8xl mx-2 sm:mx-10">
    <div class="flex flex-wrap items-center justify-between mx-auto p-4">
        <x-logo class="w-14 sm:w-40 sm:mb-10 mb-2" />

        <div class="flex md:order-2 space-x-3 md:space-x-4 lg:space-x-0 rtl:space-x-reverse">
            <button type="button"
                class="text-black bg-snapchat-yellow transition-all hover:bg-snapchat-yellow hover:opacity-80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:text-lg px-4 py-2 text-center">Contact
                Me</button>
{{--            <x-dropdown >--}}
{{--                <x-slot name="trigger">--}}
{{--                    <button--}}
{{--                        class="inline-flex aspect-square lg:hidden items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">--}}
{{--                        <div x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>--}}

{{--                        <div class="">--}}
{{--                            <span class="sr-only">Open main menu</span>--}}
{{--                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"--}}
{{--                                viewBox="0 0 17 14">--}}
{{--                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                    stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                    </button>--}}
{{--                </x-slot>--}}

{{--                <x-slot name="content">--}}
{{--                    <x-dropdown-link :href="route('profile')" --}}{{----}}{{--                                    wire:navigate --}}{{----}}{{-->--}}
{{--                        {{ __('Profile') }}--}}
{{--                    </x-dropdown-link>--}}

{{--                    <!-- Authentication -->--}}
{{--                        <x-dropdown-link>--}}
{{--                            {{ __('Log Out') }}--}}
{{--                        </x-dropdown-link>--}}
{{--                </x-slot>--}}
{{--            </x-dropdown>--}}
        </div>
        <div class="items-center justify-between hidden w-full lg:flex md:w-auto md:order-1" id="navbar-cta">
            <ul
                class="flex flex-col font-extralight p-4 md:p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link :href="route('snapchat-lenses')" :active="request()->routeIs('snapchat-lenses')" wire:navigate>
                    {{ __('Snapchat Lenses') }}
                </x-nav-link>
                <x-nav-link :href="route('filesandvideos')" :active="request()->routeIs('filesandvideos')" wire:navigate>
                    {{ __('Files & Videos') }}
                </x-nav-link>
                <x-nav-link
                :href="route('contact')" :active="request()->routeIs('contact')" wire:navigate>
                    {{ __('Contact') }}
                </x-nav-link>
            </ul>

{{--<<<<<<< HEAD--}}

{{--=======--}}
{{--            <x-dropdown--}}
{{--            align="right"--}}
{{--            width="48">--}}
{{--            <x-slot name="trigger">--}}
{{--                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">--}}
{{--                    <div--}}
{{--                        x-data="{{ json_encode(['name' => \App\Models\User::first()->name]) }}"--}}
{{--                        x-text="name"--}}
{{--                        x-on:profile-updated.window="name = $event.detail.name"></div>--}}

{{--                    <div class="ms-1">--}}
{{--                        <svg--}}
{{--                            class="fill-current h-4 w-4"--}}
{{--                            xmlns="http://www.w3.org/2000/svg"--}}
{{--                            viewBox="0 0 20 20">--}}
{{--                            <path--}}
{{--                                fill-rule="evenodd"--}}
{{--                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"--}}
{{--                                clip-rule="evenodd"/>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                </button>--}}
{{--            </x-slot>--}}

{{--            <x-slot name="content">--}}
{{--                <x-dropdown-link--}}
{{--                    :href="route('profile')"--}}
{{--                    --}}{{--                                    wire:navigate--}}
{{--                >--}}
{{--                    {{ __('Profile') }}--}}
{{--                </x-dropdown-link>--}}
{{--                @if(\App\Models\User::first()->email === 'a@a.com')--}}
{{--                    <x-dropdown-link--}}
{{--                        href="/admin"--}}
{{--                    >--}}
{{--                        {{ __('Admin Panel') }}--}}
{{--                    </x-dropdown-link>--}}
{{--                @endif--}}
{{--                <!-- Authentication -->--}}
{{--                <button--}}
{{--                    wire:click="logout"--}}
{{--                    class="w-full text-start">--}}
{{--                    <x-dropdown-link>--}}
{{--                        {{ __('Log Out') }}--}}
{{--                    </x-dropdown-link>--}}
{{--                </button>--}}
{{--            </x-slot>--}}
{{--        </x-dropdown>--}}
{{-->>>>>>> 6e48483b008fa9321c498c04a1d753eff95da785--}}
        </div>
    </div>
</nav>
