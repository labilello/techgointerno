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


<form class="grid grid-cols-3 gap-4">
    {{--    <x-jet-form-section submit="updateProfileInformation">--}}
    <div class="col-span-3 md:col-span-1 mt-2">
        <h3 name="title" class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h3>

        <p name="description" class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </div>
    <div class="col-span-3 md:col-span-2 shadow overflow-hidden sm:rounded-md">
        <div class=" bg-white sm:p-6">
            <!-- Current -->
            <div class="mt-1">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="current_password">
                    {{ __('Current Password') }}
                </label>
                <input type="password" id="current_password" class="block w-full rounded-md shadow-sm mt-1 py-2 px-3 border border border-gray-500" wire:model.defer="state.name" autocomplete="name" >
            </div>

            <!-- New -->
            <div class="mt-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                    {{ __('New Password') }}
                </label>
                <input type="password" id="password" class="block w-full rounded-md shadow-sm mt-1 py-2 px-3 border border border-gray-500" wire:model.defer="state.name" autocomplete="name" >
            </div>

            <!-- Confirm -->
            <div class="mt-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password_confirmation">
                    {{ __('Confirm Password') }}
                </label>
                <input type="password" id="password_confirmation" class="block w-full rounded-md shadow-sm mt-1 py-2 px-3 border border border-gray-500" wire:model.defer="state.name" autocomplete="name" >
            </div>
        </div>

        <div class="bg-gray-400 py-3 flex justify-end px-4">
            <button type="button" class="px-3 py-2 bg-gray-800 text-white rounded-md">Guardar</button>
        </div>
    </div>

</form>
