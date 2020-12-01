{{--<div class="bg-primary border-b border-white flex items-center">--}}
{{--    <div class="px-4 mx-auto">--}}
{{--        <a href="/dashboard">--}}
{{--            <img class="h-8 block w-auto" src="{{ asset('resource/techgo-logo.svg') }}" alt="Logo" />--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <div class="flex-1">--}}
{{--        <div class="flex justify-between items-center w-full pr-4">--}}
{{--            --}}{{-- TOP (NAV - USER) --}}
{{--            <nav class="h-16 flex">--}}
{{--                <div class="h-full border-t-2 border-transparent hover:border-teal-300 flex items-center transition duration-150 ease-in">--}}
{{--                    <a class="text-white font-bold px-3 text-xl transition duration-150 ease-in--}}
{{--                            hover:text-tertiary hover:no-underline--}}
{{--                            focus:outline-none focus:text-tertiary"--}}
{{--                       href="#">--}}
{{--                        {{ __('Tecnicos') }}--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="h-full border-t-2 border-transparent hover:border-teal-300 flex items-center ml-2 transition duration-150 ease-in">--}}
{{--                    <a class="text-white font-bold px-3 text-xl transition duration-150 ease-in--}}
{{--                            hover:text-tertiary hover:no-underline--}}
{{--                            focus:outline-none focus:text-tertiary"--}}
{{--                       href="#">--}}
{{--                        {{ __('Informacion general') }}--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="h-full border-t-2 border-transparent hover:border-teal-300 flex items-center ml-2 transition duration-150 ease-in">--}}
{{--                    <a class="text-white font-bold px-3 text-xl transition duration-150 ease-in--}}
{{--                            hover:text-tertiary hover:no-underline--}}
{{--                            focus:outline-none focus:text-tertiary"--}}
{{--                       href="#">--}}
{{--                        {{ __('Herramientas') }}--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </nav>--}}

{{--            <div class="flex items-center ">--}}
{{--                <div class="text-right leading-none">--}}
{{--                    <div class="block text-white font-bold uppercase"> {{ Auth::user()->name }} </div>--}}
{{--                    <div class="inline-flex text-primary-light">--}}
{{--                        <a href="/user/profile" class="text-xs hover:text-tertiary hover:no-underline transition ease-in duration-150">Mi perfil</a>--}}
{{--                        <div class="mx-1 text-xs">&diam;</div>--}}
{{--                        <form method="POST" action="{{ route('logout') }}" class="text-xs hover:text-tertiary hover:no-underline transition ease-in duration-150">--}}
{{--                            @csrf--}}
{{--                            <a href="{{ route('logout') }}"--}}
{{--                               onclick="event.preventDefault(); this.closest('form').submit();"--}}
{{--                            >--}}
{{--                                Cerrar sesión--}}
{{--                            </a>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <button class="ml-2 flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">--}}
{{--                    --}}{{--                    <img class="h-10 w-10 rounded-full" src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="Profile image" />--}}
{{--                    <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="Profile image" />--}}
{{--                </button>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <div class="block" style="background: linear-gradient(to right,#00d9ff 0,#01ffb3 100%); height: 2px"></div>--}}
{{--        <div class="flex justify-end py-3 text-secondary pr-4 mr-2">--}}
{{--            {{ $pagename }}--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</div>--}}

<div class="hidden md:flex relative bg-primary border-b border-white items-center ">
    <div class="py-3 md:py-0 px-6 md:px-4 md:mx-auto">
        <a href="{{ route('index') }}">
            <img class="h-6 block" src="{{ asset('resource/techgo-logo.svg') }}" alt="Logo" />
        </a>
    </div>

    <div class="flex-1">
        <div class="flex justify-between items-center w-full pr-4">
            {{-- TOP (NAV - USER) --}}

            <div class="flex items-center text-sm md:text-base text-white transition duration-150 ease-in hover:text-teal-300">
                <i class="fas fa-backward md:text-lg mr-2"></i>
                <a href="https://www.techgo.com.ar">Volver a techgo.com.ar</a>
            </div>

        </div>
        <div class="block" style="background: linear-gradient(to right,#00d9ff 0,#01ffb3 100%); height: 2px"></div>
        <div class="flex justify-end text-sm md:text-base py-3 text-secondary pr-4 mr-2">
            {{ $pagename }}
        </div>
    </div>

</div>

<div class="block md:hidden relative bg-primary border-b">
    <div class="w-full" style="background: linear-gradient(to right,#00d9ff 0,#01ffb3 100%); height: 2px"></div>

    <div class="py-3 px-6 flex justify-between items-center w-full">
        <a href="{{ route('index') }}">
            <img class="h-6" src="{{ asset('resource/techgo-logo.svg') }}" alt="Logo" />
        </a>

        <div class="flex items-center text-sm text-white transition duration-150 ease-in hover:text-teal-300">
            <i class="fas fa-backward mr-2"></i>
            <a href="https://www.techgo.com.ar">Volver a techgo.com.ar</a>
        </div>
    </div>

</div>
