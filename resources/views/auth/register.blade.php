<x-guest-layout>

    <x-slot name="header">
        {{ __('Crear nuevo usuario') }}
    </x-slot>

    <div class="bg-white rounded-lg w-11/12 md:w-2/5 px-7 py-5 mx-auto mt-4">
        <x-jet-validation-errors class="mb-4" />
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Nombre') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Legajo') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="legajo" :value="old('legajo')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Correo Electronico') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Sector') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="sector" :value="old('sector')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Rol en sistema') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="role" :value="old('role')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirm Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

{{--            <div class="mt-4">--}}
{{--                <x-jet-label value="{{ __('Sucursal') }}" />--}}
{{--                <select name="store" id="store" class="">--}}
{{--                    @foreach($stores as $store)--}}
{{--                        <option value="{{ $store->id }}">{{ $store->name }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}


            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Crear usuario') }}
                </x-jet-button>
            </div>
        </form>
    </div>
</x-guest-layout>
