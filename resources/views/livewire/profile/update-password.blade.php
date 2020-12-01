{{--<x-jet-form-section submit="updatePassword">--}}
{{--    <x-slot name="title">--}}
{{--        {{ __('Update Password') }}--}}
{{--    </x-slot>--}}

{{--    <x-slot name="description">--}}
{{--        {{ __('Ensure your account is using a long, random password to stay secure.') }}--}}
{{--    </x-slot>--}}

{{--    <x-slot name="form">--}}
{{--        <div class="col-span-6 sm:col-span-4">--}}
{{--            <x-jet-label for="current_password" value="{{ __('Current Password') }}" />--}}
{{--            <x-jet-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />--}}
{{--            <x-jet-input-error for="current_password" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="col-span-6 sm:col-span-4">--}}
{{--            <x-jet-label for="password" value="{{ __('New Password') }}" />--}}
{{--            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />--}}
{{--            <x-jet-input-error for="password" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="col-span-6 sm:col-span-4">--}}
{{--            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />--}}
{{--            <x-jet-input-error for="password_confirmation" class="mt-2" />--}}
{{--        </div>--}}
{{--    </x-slot>--}}

{{--    <x-slot name="actions">--}}
{{--        <x-jet-action-message class="mr-3" on="saved">--}}
{{--            {{ __('Saved.') }}--}}
{{--        </x-jet-action-message>--}}

{{--        <x-jet-button>--}}
{{--            {{ __('Save') }}--}}
{{--        </x-jet-button>--}}
{{--    </x-slot>--}}
{{--</x-jet-form-section>--}}


<form class="grid grid-cols-3 gap-4 mt-4" wire:submit.prevent="updatePassword">
    {{--    <x-jet-form-section submit="updateProfileInformation">--}}
    <div class="col-span-3 md:col-span-1 mt-2">
        <h3 class="text-lg font-medium text-gray-900">
            {{ __('Actualizar tu contraseña') }}
        </h3>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Asegurate que tu cuenta esta protegida con una contraseña con varios caracteres y lo mas aleatorios posible.') }}
        </p>
    </div>
    <div class="col-span-3 md:col-span-2 shadow overflow-hidden sm:rounded-md">
        <div class="bg-white p-4 sm:p-6">
            <div>
                @if (session()->has('message'))
                    <div class="@if(session()->has('type_message')) @if(session('type_message') == 'error') bg-red-200 border border-red-700 text-red-800 @endif @else bg-green-200 border-green-700 text-green-800 @endif w-full border rounded-sm py-3 px-4 mb-2">
                        <span class="error">{{ session('message') }}</span>
                    </div>
                @endif
            </div>

            <!-- Current -->
            <div class="mt-1">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="current_password">
                    {{ __('Contaseña Actual') }}
                </label>
                <input type="password" id="current_password" class="text-sm sm:text-base block w-full rounded-md shadow-sm mt-1 py-2 px-3 border border border-gray-500" wire:model.lazy="current">
                @error('current') <span class="error text-xs sm:text-sm text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- New -->
            <div class="mt-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                    {{ __('Nueva Contraseña') }}
                </label>
                <input type="password" id="password" class="text-sm sm:text-base block w-full rounded-md shadow-sm mt-1 py-2 px-3 border border border-gray-500" wire:model.lazy="password">
                @error('password') <span class="error text-xs sm:text-sm text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- Confirm -->
            <div class="mt-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password_confirmation">
                    {{ __('Confirma Contraseña') }}
                </label>
                <input type="password" id="password_confirmation" class="text-sm sm:text-base block w-full rounded-md shadow-sm mt-1 py-2 px-3 border border border-gray-500" wire:model.lazy="password_confirmation" >
                @error('password_confirmation') <span class="error text-xs sm:text-sm text-red-400">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="bg-gray-400 py-2 sm:py-3 flex justify-end px-4">
            <button type="submit" class="px-3 py-1 sm:py-2 bg-gray-800 text-white rounded-md">Guardar</button>
        </div>
    </div>

</form>
