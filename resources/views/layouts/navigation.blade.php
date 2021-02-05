<nav class="bg-white" x-data="{show: false}">
    <x-container class="flex justify-between">
        <div class="flex items-center md:space-x-10">
            <x-application-logo></x-application-logo>
            <button
                @click="show = ! show"
                class="focus:outline-none ml-1 mt-1 text-gray-500 transition transform md:hidden"
                :class="{'rotate-180' : show}"
            >
                <x-icons.arrow-down></x-icons.arrow-down>
            </button>

            {{-- Left Nav --}}
            <div class="hidden md:flex space-x-5 mt-1">
                <x-nav-link href="/" :active="Request::routeIs('welcome')">Home</x-nav-link>
                <x-nav-link href="/">Shop</x-nav-link>
                <x-nav-link href="#">Contact Us</x-nav-link>
            </div>
        </div>

        {{-- Right Nav --}}
        <div class="flex md:space-x-8 items-center">
            <div class="hidden md:flex space-x-5">
               @guest
                   <x-nav-link href="{{ route('register') }}">Register</x-nav-link>
                   <x-nav-link href="{{ route('Login') }}">Login</x-nav-link>
               @else
                    <x-nav-link href="{{ route('dashboard') }}" :active="Request::routeIs('dashboard')">DashBord</x-nav-link>
               @endguest
            </div>
            <a href="#"><x-icons.cart></x-icons.cart></a>
        </div>
    </x-container>

    {{-- MObile Nav --}}
    <div
        class="text-center overflow-hidden absolute bg-white w-full md:hidden z-10"
        x-show="show"
        @click.away="show = false"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90"
    >
        <x-mobile-nav-link href="{{ route('welcome') }}" :active="Request::routeIs('welcome')">Home</x-mobile-nav-link>
        <x-mobile-nav-link href="{{ route('welcome') }}">Shop</x-mobile-nav-link>
        <x-mobile-nav-link href="{{ route('welcome') }}">Contact Us</x-mobile-nav-link>
        @guest
            <x-mobile-nav-link href="{{ route('welcome') }}">Login</x-mobile-nav-link>
            <x-mobile-nav-link href="{{ route('welcome') }}">Register</x-mobile-nav-link>
        @else
            <x-mobile-nav-link href="{{ route('dashboard') }}" :active="Request::routeIs('dashboard')">Dashboard</x-mobile-nav-link>
        @endguest
    </div>
</nav>
