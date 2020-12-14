



<x-guest-layout>
    <x-slot name="header">
        {{ __('Inicio de sesión') }}
    </x-slot>

    <div class="bg-white rounded-lg w-11/12 md:w-2/5 px-7 py-5 mx-auto mt-4">
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Legajo') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="legajo" :value="old('legajo')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Contraseña') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordar credenciales') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4" x-data="{ show: false }">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Solicitar un nuevo usuario') }}--}}
{{--                    </a>--}}
                <div class="">
                    <button @click={show=true} type="button" class="underline text-sm text-gray-600 hover:text-gray-900">Solicitar nuevo usuario</Button>
                </div>
                <div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                    <div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">
                        <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                            <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                            <div class="px-6 py-3 text-xl border-b font-bold">Solicitar un nuevo usuario</div>
                            <div class="p-6 flex-grow text-xs sm:text-sm md:text-base">
                                <p>Para solicitar un nuevo usuario debera completar el siguiente formulario <a class="uppercase underline text-red-600" href="https://forms.gle/6svaURcdtU2RwEU7A">(IR AL FORMULARIO)</a><br>Luego de completarlo, un administrador se contactará contigo informandote usuario y contraseña.</p>
                            </div>
                            <div class="px-6 py-3 border-t">
                                <div class="flex justify-end">
                                    <button @click={show=false} type="button" class="bg-gray-700 text-gray-100 rounded px-4 py-2 mr-1">Cerrar</Button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
                </div>

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>

    </div>


</x-guest-layout>
