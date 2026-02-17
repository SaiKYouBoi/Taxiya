<nav
    class="sticky top-0 z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl border-b border-white/20 dark:border-slate-800/50 shadow-glass transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('home') }}">
        <div class="flex justify-between items-center h-20">
            <div class="flex items-center gap-3 group cursor-pointer">
                <div class="relative w-10 h-10 flex items-center justify-center">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-brand-blue via-blue-600 to-indigo-700 rounded-xl transform rotate-6 group-hover:rotate-12 transition-transform duration-500 shadow-lg shadow-blue-500/30">
                    </div>
                    <div class="absolute inset-0 bg-white/10 rounded-xl backdrop-blur-sm border border-white/10"></div>
                    <div class="relative z-10 text-white flex items-center justify-center">
                        <span class="material-symbols-outlined text-[26px]">local_taxi</span>
                    </div>
                    <div
                        class="absolute -top-1 -right-1 w-3.5 h-3.5 bg-brand-orange rounded-full border-2 border-white dark:border-slate-900 shadow-sm animate-pulse">
                    </div>
                </div>
                <div class="flex flex-col">
                    <span
                        class="text-2xl font-brand font-bold text-slate-900 dark:text-white tracking-tight leading-none group-hover:text-brand-blue transition-colors">
                        Taxi<span class="text-brand-blue">Ya</span>
                    </span>
                </div>
            </div>
            </a>


            @if (Route::has('login'))
                @auth
                    <div class="flex items-center gap-0">
                        <div class="relative">
                            <img alt="User Profile Avatar"
                                class="h-10 w-10 rounded-full object-cover ring-2 ring-white dark:ring-slate-800 shadow-md"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqb3JUVvb-dhsF-A8GXvfhnlUY-FsKzpE7H0x_hOqLV744yEbfQaBlxYmQAjRNHi-TQFZaIRGMCnsFChYkEckkCUQEkWavCKU0Xqr7o84do_V0NgfXqQdsUbjEKnmFaan2OGplUPftzXMUdxEaza65pp5lGe1kqP2yq9VPq8ZFPHLBC7rpG0sOV6rElmuOFCjdNV66g5ZpazX1mO2jLowPm5CHYUIH-Xp3xrbKJgqK85N76Zw54dmMljGyWdTJn0yLfuitE1Eo4Q" />
                            <span
                                class="absolute top-0 right-0 block h-3 w-3 rounded-full ring-2 ring-white dark:ring-slate-900 bg-green-500"></span>
                        </div>
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                    <x-dropdown-link :href="route('mybookings.index')">
                                        {{ __('My bookings') }}
                                    </x-dropdown-link>

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
                    @else
                    <div class="flex gap-4">
                        <a class="hidden sm:inline-flex text-sm font-medium text-slate-900 dark:text-white hover:text-primary transition-colors px-4 py-2"
                            href="{{ route('login') }}">Log In</a>
                        @if (Route::has('register'))
                            <a class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-medium text-white bg-primary rounded-full hover:bg-primary-dark shadow-md shadow-blue-500/20 transition-all transform hover:scale-105"
                                href="{{ route('register') }}">
                                Sign Up
                            </a>
                        </div>
                        @endif

                    @endauth
                    @endif
                    <!-- Hamburger -->
                    <div class="-me-2 flex items-center sm:hidden">
                        <button @click="open = ! open"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
    </div>



    </div>
    </div>
    </div>
</nav>
