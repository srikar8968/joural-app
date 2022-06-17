<header>
    <nav x-data="{ open: false }" class="bg-white border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="container mx-auto mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex w-full justify-between">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}">
                            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-4 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link class="items-center flex leading-normal" href="#" :active="request()->routeIs('sdsds')">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5 mr-1"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <span>&nbsp;{{ __('+91 9563654125') }}</span>
                        </x-nav-link>
                        <x-nav-link class="items-center flex leading-normal" :href="route('home')" :active="request()->routeIs('contact')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5 mr-1"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            &nbsp;{{ __('info@journal.com') }}
                        </x-nav-link>
                    </div>
                </div>

                <!-- Settings Dropdown -->
                @if (!Auth::check())
                    <!-- <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                        {{ __('Login') }}
                    </x-nav-link>
                    <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                        {{ __('Register') }}
                    </x-nav-link> -->
                @else
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif
                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                @if (Auth::check())
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                @endif

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="bg-gradient-to-t from-gray-300 to-gray-100 border-t border-b border-gray-200 font-alt">
        <div class="container mx-auto mx-auto h-12 px-4 flex justify-end">
            <div class="hidden sm:flex justify-end w-full">
                <x-nav-link class="text-gray-600 font-semibold border-gray-300 border-r w-full justify-center" :href="route('about')" :active="request()->routeIs('about')">
                    {{ __('About Us') }}
                </x-nav-link>
                <x-nav-link class="text-gray-600 font-semibold border-gray-300 border-l border-r w-full justify-center" :href="route('journals')" :active="request()->routeIs('journals')">
                    {{ __('Journals') }}
                </x-nav-link>
                <x-nav-link class="text-gray-600 font-semibold border-gray-300 border-l border-r w-full justify-center" :href="route('journals')" :active="request()->routeIs('journals')">
                    {{ __('Submit Manuscript') }}
                </x-nav-link>
                <x-nav-link class="text-gray-600 font-semibold border-gray-300 border-l border-r w-full justify-center" :href="route('editors')" :active="request()->routeIs('editors')">
                    {{ __('Editors') }}
                </x-nav-link>
                <x-nav-link class="text-gray-600 font-semibold border-gray-300 border-l border-r w-full justify-center" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Our Services') }}
                </x-nav-link>
                <x-nav-link class="text-gray-600 font-semibold border-gray-300 w-full justify-center" :href="route('contact')" :active="request()->routeIs('contact')">
                    {{ __('Contact Us') }}
                </x-nav-link>
            </div>
            <div class="flex sm:hidden justify-end w-full">
                <x-nav-link class="text-gray-600 font-semibold border-gray-300 border-r w-full justify-center" :href="route('about')" :active="request()->routeIs('about')">
                    {{ __('+91 9563654125') }}
                </x-nav-link>
                <x-nav-link class="text-gray-600 font-semibold border-gray-300 border-l w-full justify-center" :href="route('journals')" :active="request()->routeIs('journals')">
                    {{ __('info@journal.com') }}
                </x-nav-link>
            </div>
        </div>
    </div>
</header>