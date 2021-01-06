{{-- MD+ HEADER --}}
<div class="hidden md:flex relative bg-primary border-b border-white items-center justify-between">
    <div class="px-4 mx-auto">
        <a href="{{ route('index') }}">
            <img class="h-8 block w-auto" src="{{ asset('resource/techgo-logo.svg') }}" alt="Logo" />
        </a>
    </div>

    <div class="block flex-1">
        <div class="flex justify-between items-center w-full pr-4">
            {{-- TOP (NAV - USER) --}}
            <nav class="h-16 flex relative z-20">

                <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                <div class="relative group">
                    <button type="button"
                            class="h-full border-t-2 border-transparent inline-flex items-center space-x-2 transition duration-150 ease-in
                         hover:border-teal-300
                         focus:outline-none group-hover:border-teal-300">
                        <span class="font-bold px-3 text-xl text-white transition duration-150 ease-in
                                hover:text-tertiary
                                focus:outline-none focus:text-tertiary group-hover:text-tertiary">
                            {{ __('Tecnicos') }}
                        </span>
                        <!--
                          Heroicon name: chevron-down

                          Item active: "text-gray-600", Item inactive: "text-gray-400"
                        -->
                        <svg class="text-gray-400 h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="absolute z-10 hidden group-hover:block w-screen max-w-md">
                        <div class="rounded-lg shadow-lg">
                            <div class="rounded-lg shadow-xs overflow-hidden">
                                <div class="grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                    <a href="{{ route('photo.list') }}" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                                        <!-- Heroicon name: photograph -->
                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <div class="space-y-1">
                                            <p class="text-base leading-6 font-medium text-gray-900">
                                                Imagenes de dispositivos
                                            </p>
                                            <p class="text-sm leading-5 text-gray-500">
                                                Suba nuevas imagenes o visualice el contenido ya almacenado en el servidor.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="{{ route('cloud.index') }}" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                                        <!-- Heroicon name: document-search -->
                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z"></path>
                                        </svg>
                                        <div class="space-y-1">
                                            <p class="text-base leading-6 font-medium text-gray-900">
                                                Documentos útiles
                                            </p>
                                            <p class="text-sm leading-5 text-gray-500">
                                                Encuentre documentos que sean de utilidad para su labor diario.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> {{-- --}}
                </div>

                <div class="relative group">
                    <button type="button"
                            class="h-full border-t-2 border-transparent inline-flex items-center space-x-2 transition duration-150 ease-in
                         hover:border-teal-300
                         focus:outline-none group-hover:border-teal-300">
                        <span class="font-bold px-3 text-xl text-white transition duration-150 ease-in
                                hover:text-tertiary
                                focus:outline-none focus:text-tertiary group-hover:text-tertiary">
                            {{ __('Información general') }}
                        </span>
                        <!--
                          Heroicon name: chevron-down

                          Item active: "text-gray-600", Item inactive: "text-gray-400"
                        -->
                        <svg class="text-gray-400 h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="absolute z-10 hidden group-hover:block w-screen max-w-md">
                        <div class="rounded-lg shadow-lg">
                            <div class="rounded-lg shadow-xs overflow-hidden">
                                <div class="grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                    <a href="{{ route('warranty.index') }}" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                                        <!-- Heroicon name: view-grid -->
                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                        </svg>
                                        <div class="space-y-1">
                                            <p class="text-base leading-6 font-medium text-gray-900">
                                                {{ __('Soporte tecnico') }}
                                            </p>
                                            <p class="text-sm leading-5 text-gray-500">
                                                Obtenga toda la información referida al soporte tecnico en garantia y fuera de garantia.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="{{ route('users.list') }}" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                                        <!-- Heroicon name: user-group -->
                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                        <div class="space-y-1">
                                            <p class="text-base leading-6 font-medium text-gray-900">
                                                {{ __('Usuarios') }}
                                            </p>
                                            <p class="text-sm leading-5 text-gray-500">
                                                Obtenga información sobre los recursos de la compañia.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </nav>

            <div class="flex items-center ">
                <div class="text-right leading-none">
                    <div class="block text-white font-bold uppercase"> {{ Auth::user()->name }} </div>
                    <div class="inline-flex text-primary-light">
                        <a href="{{ route('profile.show') }}" class="text-xs hover:text-tertiary hover:no-underline transition ease-in duration-150">Mi perfil</a>
                        <div class="mx-1 text-xs">&diam;</div>
                        <form method="POST" action="{{ route('logout') }}" class="text-xs hover:text-tertiary hover:no-underline transition ease-in duration-150">
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
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="Profile image" />
                </button>
            </div>

        </div>
        <div class="block" style="background: linear-gradient(to right,#00d9ff 0,#01ffb3 100%); height: 2px"></div>
        <div class="flex justify-end py-3 text-secondary pr-4 mr-2">
            {{ $pagename }}
        </div>
    </div>
</div>

{{-- MD- HEADER --}}
<div x-data="{ open: false }" :class="{'': open, '': ! open}" class="flex flex-col md:hidden relative bg-primary border-b border-white items-center justify-between">
    <div class="block w-full" style="background: linear-gradient(to right,#00d9ff 0,#01ffb3 100%); height: 2px"></div>

    <div class="py-3 px-4 flex justify-between items-center w-full">
        <!-- Logo -->
        <a href="{{ route('index') }}">
            <img class="h-8 w-auto" src="{{ asset('resource/techgo-logo.svg') }}" alt="Logo" />
        </a>

        <!-- Hamburger -->
        <div class="-mr-2 flex items-center">
            <button @click="open = ! open" class="inline-flex items-center justify-center p-1 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <nav id="dropdown-menu" class="w-full my-0 overflow-hidden transition-all duration-500 ease-out" :class="{'h-96 ': open, 'h-0': ! open}">
        <!-- Responsive Navigation Menu -->
        <ul class="pt-2 pb-3 space-y-1 text-white text-sm">
            <li class="text-white hover:text-tertiary hover:border-l-4 hover:border-tertiary transition-all duration-150 ease-in-out">
                <a href="/" class="block pl-3 pr-4 py-2 border-l-4 border-transparent font-medium focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300">
                    Inicio
                </a>
            </li>

            <li class="text-white hover:text-tertiary hover:border-l-4 hover:border-tertiary focus:outline-none focus:text-gray-800 transition-all duration-150 ease-in-out">
                <a href="{{ route('cloud.index') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent font-medium focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300">
                    Documentos útiles
                </a>
            </li>

            <li class="text-white hover:text-tertiary hover:border-l-4 hover:border-tertiary focus:outline-none focus:text-gray-800 transition-all duration-150 ease-in-out">
                <a href="/fotos" class="block pl-3 pr-4 py-2 border-l-4 border-transparent font-medium focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300">
                    Imagenes de dispositivos
                </a>
            </li>

            <li class="text-white hover:text-tertiary hover:border-l-4 hover:border-tertiary focus:outline-none focus:text-gray-800 transition-all duration-150 ease-in-out">
                <a href="/soporte-tecnico" class="block pl-3 pr-4 py-2 border-l-4 border-transparent font-medium focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300">
                    Soporte tecnico
                </a>
            </li>

            <li class="text-white hover:text-tertiary hover:border-l-4 hover:border-tertiary focus:outline-none focus:text-gray-800 transition-all duration-150 ease-in-out">
                <a href="/usuarios" class="block pl-3 pr-4 py-2 border-l-4 border-transparent font-medium focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300">
                    Usuarios
                </a>
            </li>
        </ul>

        <!-- Responsive Settings Options -->
        <ul class="pt-4 pb-1 border-t border-gray-200">
            <li class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="Profile image" />
                </div>

                <div class="ml-3">
                    <div class="text-sm text-white font-bold uppercase">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-xs text-white">{{ Auth::user()->email }}</div>
                </div>
            </li>

            <ul class="mt-3 space-y-1 text-sm">
                <!-- Account Management -->
                <li class="text-white hover:text-tertiary hover:border-l-4 hover:border-tertiary focus:outline-none focus:text-gray-800 transition-all duration-150 ease-in-out">
                    <a href="/user/profile" class="block pl-3 pr-4 py-2 border-l-4 border-transparent font-medium focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300">
                        Mi perfil
                    </a>
                </li>
                <form method="POST" action="{{ route('logout') }}" class="text-white hover:text-tertiary hover:text-tertiary hover:border-l-4 hover:border-tertiary focus:outline-none focus:text-gray-800 transition-all duration-150 ease-in-out">
                    @csrf
                    <a href="{{ route('logout') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent font-medium focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300"
                       onclick="event.preventDefault(); this.closest('form').submit();"
                    >
                        Cerrar sesión
                    </a>
                </form>
            </ul>
        </ul>

        <div class="mx-4">
            <button hidden type="button" id="buttonInstall" class="py-2 w-full border-2 border-tertiary text-center text-tertiary hover:bg-tertiary-dark hover:text-white transition-all duration-150 ease-in-out"><i class="fas fa-download mr-2"></i>Instalar App</button>
        </div>
    </nav>

</div>
