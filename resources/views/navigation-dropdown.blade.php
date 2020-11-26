<div class="bg-gray-700 border-b border-white flex items-center">
    <div class="px-4 mx-auto">
        <img class="h-8 block w-auto" src="{{ asset('resource/techgo-logo.svg') }}" alt="Logo" />
    </div>
    <div class="flex-1">
        <div class="flex justify-between items-center w-full pr-4">
            {{-- TOP (NAV - USER) --}}
            <nav class="py-3">
                <a class="text-white font-bold px-3 text-xl"
                    href="#">
                    {{ __('Tecnicos') }}
                </a>
                <a class="text-white font-bold px-3 text-xl"
                   href="#">
                    {{ __('Informacion general') }}
                </a>
                <a class="text-white font-bold px-3 text-xl"
                   href="#">
                    {{ __('Herramientas') }}
                </a>
        </nav>

            <div class="flex items-center ">
                <div class="text-right leading-none">
                    <div class="block text-white font-bold uppercase"> {{ Auth::user()->name }} </div>
                    <div class="inline-flex">
                        <a href="/user/profile" class="text-gray-300 text-xs">Mi perfil</a>
                        <div class="mx-1 text-xs">&diam;</div>
                        <form method="POST" action="{{ route('logout') }}" class="text-gray-300 text-xs">
                            @csrf
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); this.closest('form').submit();"
                            >
                                Cerrar sesión
                            </a>
                        </form>
                    </div>
                </div>
                <button class="ml-2 flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
{{--                    <img class="h-10 w-10 rounded-full" src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="Profile image" />--}}
                    <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="Profile image" />
                </button>
            </div>

        </div>
        <div class="block" style="background: linear-gradient(to right,#00d9ff 0,#01ffb3 100%); height: 2px"></div>
        <div class="flex justify-end py-3 text-green-300 pr-4 mr-2">
            {{ $order }}
        </div>
    </div>

</div>


{{--<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">--}}
{{--    <!-- Primary Navigation Menu -->--}}
{{--    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">--}}
{{--        <div class="flex justify-between h-16">--}}
{{--            <div class="flex">--}}
{{--                <!-- Logo -->--}}
{{--                <div class="flex-shrink-0 flex items-center">--}}
{{--                    <a href="/dashboard">--}}
{{--                        <img class="h-10 block w-auto" src="{{ asset('resource/logo.svg') }}" alt="Logo" />--}}
{{--                        <x-jet-application-mark class="block h-9 w-auto" />--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <!-- Navigation Links -->--}}
{{--                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">--}}
{{--                    <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out"--}}
{{--                        href="#">--}}
{{--                        {{ __('Servicio tecnico 2') }}--}}
{{--                    </a>--}}


{{--                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">--}}
{{--                        {{ __('Dashboard') }}--}}
{{--                    </x-jet-nav-link>--}}

{{--                    <x-jet-nav-link href="{{ route('warranty.index') }}" :active="request()->routeIs('warranty.index')">--}}
{{--                        {{ __('Garantías') }}--}}
{{--                        {{ __('Servicio tecnico') }}--}}
{{--                    </x-jet-nav-link>--}}

{{--                    <x-jet-nav-link href="{{ route('users') }}" :active="request()->routeIs('users')">--}}
{{--                        {{ __('Usuarios') }}--}}
{{--                        {{ __('Informacion general') }}--}}
{{--                    </x-jet-nav-link>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Settings Dropdown -->--}}
{{--            <div class="hidden sm:flex sm:items-center sm:ml-6">--}}
{{--                <div class="hidden sm:flex items-center">--}}
{{--                    <div class="text-right leading-none">--}}
{{--                        <div class="block text-black uppercase text-sm"> {{ Auth::user()->name }} </div>--}}
{{--                        <div class="inline-flex">--}}
{{--                            <a href="/user/profile" class="text-blue-500 text-xs">Mi perfil</a>--}}
{{--                            <div class="mx-1 text-xs">&diam;</div>--}}
{{--                            <form method="POST" action="{{ route('logout') }}" class="text-blue-500 text-xs">--}}
{{--                                @csrf--}}
{{--                                <a href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault(); this.closest('form').submit();"--}}
{{--                                >--}}
{{--                                    Cerrar sesión--}}
{{--                                </a>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <button class="ml-2 flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">--}}
{{--                        <img class="h-10 w-10 rounded-full" src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="Profile image" />--}}
{{--                        <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="Profile image" />--}}
{{--                    </button>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Hamburger -->--}}
{{--            <div class="-mr-2 flex items-center sm:hidden">--}}
{{--                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">--}}
{{--                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">--}}
{{--                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- Responsive Navigation Menu -->--}}
{{--    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">--}}
{{--        <div class="pt-2 pb-3 space-y-1">--}}
{{--            <x-jet-responsive-nav-link href="/dashboard" :active="request()->routeIs('dashboard')">--}}
{{--                {{ __('Dashboard') }}--}}
{{--            </x-jet-responsive-nav-link>--}}
{{--            <x-jet-responsive-nav-link href="/garantias" :active="request()->routeIs('warranty')">--}}
{{--                {{ __('Garantías') }}--}}
{{--            </x-jet-responsive-nav-link>--}}
{{--            <x-jet-responsive-nav-link href="/usuarios" :active="request()->routeIs('users')">--}}
{{--                {{ __('Usuarios') }}--}}
{{--            </x-jet-responsive-nav-link>--}}
{{--        </div>--}}

{{--        <!-- Responsive Settings Options -->--}}
{{--        <div class="pt-4 pb-1 border-t border-gray-200">--}}
{{--            <div class="flex items-center px-4">--}}
{{--                <div class="flex-shrink-0">--}}
{{--                    <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="Profile image" />--}}
{{--                    <img class="h-10 w-10 rounded-full" src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->name }}" />--}}
{{--                </div>--}}

{{--                <div class="ml-3">--}}
{{--                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>--}}
{{--                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="mt-3 space-y-1">--}}
{{--                <!-- Account Management -->--}}
{{--                <x-jet-responsive-nav-link href="/user/profile" :active="request()->routeIs('profile.show')">--}}
{{--                    {{ __('Profile') }}--}}
{{--                </x-jet-responsive-nav-link>--}}

{{--                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())--}}
{{--                    <x-jet-responsive-nav-link href="/user/api-tokens" :active="request()->routeIs('api-tokens.index')">--}}
{{--                        {{ __('API Tokens') }}--}}
{{--                    </x-jet-responsive-nav-link>--}}
{{--                @endif--}}

{{--                <!-- Authentication -->--}}
{{--                <form method="POST" action="{{ route('logout') }}">--}}
{{--                    @csrf--}}

{{--                    <x-jet-responsive-nav-link href="{{ route('logout') }}"--}}
{{--                                    onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                        {{ __('Logout') }}--}}
{{--                    </x-jet-responsive-nav-link>--}}
{{--                </form>--}}

{{--                <!-- Team Management -->--}}
{{--                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())--}}
{{--                    <div class="border-t border-gray-200"></div>--}}

{{--                    <div class="block px-4 py-2 text-xs text-gray-400">--}}
{{--                        {{ __('Manage Team') }}--}}
{{--                    </div>--}}

{{--                    <!-- Team Settings -->--}}
{{--                    <x-jet-responsive-nav-link href="/teams/{{ Auth::user()->currentTeam->id }}" :active="request()->routeIs('teams.show')">--}}
{{--                        {{ __('Team Settings') }}--}}
{{--                    </x-jet-responsive-nav-link>--}}

{{--                    <x-jet-responsive-nav-link href="/teams/create" :active="request()->routeIs('teams.create')">--}}
{{--                        {{ __('Create New Team') }}--}}
{{--                    </x-jet-responsive-nav-link>--}}

{{--                    <div class="border-t border-gray-200"></div>--}}

{{--                    <!-- Team Switcher -->--}}
{{--                    <div class="block px-4 py-2 text-xs text-gray-400">--}}
{{--                        {{ __('Switch Teams') }}--}}
{{--                    </div>--}}

{{--                    @foreach (Auth::user()->allTeams() as $team)--}}
{{--                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
