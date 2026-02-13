<header class="header-nav">
    <div class="menu-btn" id="openSidebar">
        <i class="fas fa-bars"></i>
    </div>

    {{-- <div class="logo">MoniDash</div> --}}
    <div class="flex">
        <!-- Logo -->
        <div class="shrink-0 flex items-center">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('images/logo/logo.png') }}" class="block h-9 w-auto fill-current text-gray-800" />
            </a>
        </div>
    </div>

    {{-- <div class="user-info">Rolly <i class="fas fa-chevron-down"></i></div> --}}
    <!-- Right Side -->
    <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4">
        <!-- Guest Links -->
        @guest
            <a href="{{ route('login') }}" class="text-blue-600 font-semibold hover:underline">Login</a>
            <a href="{{ route('register') }}" class="text-blue-600 font-semibold hover:underline">Register</a>
        @endguest

        <!-- Authenticated User Dropdown -->
        @auth
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

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
        @endauth
    </div>

</header>
