<header
    class="w-full fixed top-0 left-0  flex justify-center items-center bg-brand-primary-color  z-50 border-b border-slate-500">
    <div class="w-full flex justify-between items-center lg:max-w-6xl max-w-[355px] text-sm  not-has-[nav]:hidden">
        <div class="w-20 h-full flex justify-center items-center">
            <a href="/">
                {{--
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                <x-application-logo class="fill-current" />
            </a>
        </div>
        @if (Route::has('login'))
        {{-- <nav class="flex items-center justify-end gap-4">

            @auth
            <a href="{{ url('/dashboard') }}"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                Dashboard
            </a>
            @else
            <a href="/"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                Home
            </a>
            <a href="{{ route('page.about') }}"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                About
            </a>
            <a href="{{ route('page.contact') }}"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                Contact
            </a>
            <a href="{{ route('login') }}"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                Login
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                Register
            </a>
            @endif
            @endauth
        </nav> --}}


        <nav class="flex items-center justify-end gap-4 p-4 ">
            {{-- Zawsze widoczne --}}
            <x-nav-link :href="route('page.home')" :active="request()->is('/')">
                {{ __('Home') }}
            </x-nav-link>

            <x-nav-link :href="route('page.about')" :active="request()->routeIs('page.about')">
                {{ __('About') }}
            </x-nav-link>
            <x-nav-link :href="route('page.timetable')" :active="request()->routeIs('page.timetable')">
                {{ __('Timetable') }}
            </x-nav-link>

            <x-nav-link :href="route('page.contact')" :active="request()->routeIs('page.contact')">
                {{ __('Contact') }}
            </x-nav-link>

            @auth
            {{-- Tylko dla zalogowanych --}}
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
            @else
            {{-- Tylko dla gości --}}
            <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                {{ __('Log in') }}
            </x-nav-link>

            @if (Route::has('register'))
            <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                {{ __('Register') }}
            </x-nav-link>
            @endif
            @endauth
        </nav>
        @endif
    </div>
</header>