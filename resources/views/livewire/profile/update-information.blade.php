{{--<x-jet-form-section submit="updateProfileInformation">--}}
{{--    <x-slot name="title">--}}
{{--        {{ __('Profile Information') }}--}}
{{--    </x-slot>--}}

{{--    <x-slot name="description">--}}
{{--        {{ __('Update your account\'s profile information and email address.') }}--}}
{{--    </x-slot>--}}

{{--    <x-slot name="form">--}}
{{--        <!-- Profile Photo -->--}}
{{--        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())--}}
{{--            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">--}}
{{--                <!-- Profile Photo File Input -->--}}
{{--                <input type="file" class="hidden"--}}
{{--                            wire:model="photo"--}}
{{--                            x-ref="photo"--}}
{{--                            x-on:change="--}}
{{--                                    photoName = $refs.photo.files[0].name;--}}
{{--                                    const reader = new FileReader();--}}
{{--                                    reader.onload = (e) => {--}}
{{--                                        photoPreview = e.target.result;--}}
{{--                                    };--}}
{{--                                    reader.readAsDataURL($refs.photo.files[0]);--}}
{{--                            " />--}}

{{--                <x-jet-label for="photo" value="{{ __('Photo') }}" />--}}

{{--                <!-- Current Profile Photo -->--}}
{{--                <div class="mt-2" x-show="! photoPreview">--}}
{{--                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">--}}
{{--                </div>--}}

{{--                <!-- New Profile Photo Preview -->--}}
{{--                <div class="mt-2" x-show="photoPreview">--}}
{{--                    <span class="block rounded-full w-20 h-20"--}}
{{--                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">--}}
{{--                    </span>--}}
{{--                </div>--}}

{{--                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">--}}
{{--                    {{ __('Select A New Photo') }}--}}
{{--                </x-jet-secondary-button>--}}

{{--                @if ($this->user->profile_photo_path)--}}
{{--                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">--}}
{{--                        {{ __('Remove Photo') }}--}}
{{--                    </x-jet-secondary-button>--}}
{{--                @endif--}}

{{--                <x-jet-input-error for="photo" class="mt-2" />--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <!-- Name -->--}}
{{--        <div class="col-span-6 sm:col-span-4">--}}
{{--            <x-jet-label for="name" value="{{ __('Name') }}" />--}}
{{--            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />--}}
{{--            <x-jet-input-error for="name" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email -->--}}
{{--        <div class="col-span-6 sm:col-span-4">--}}
{{--            <x-jet-label for="email" value="Email" />--}}
{{--            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />--}}
{{--            <x-jet-input-error for="email" class="mt-2" />--}}
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

<form class="grid grid-cols-3 gap-4" wire:submit.prevent="saveInformation">
    <div class="col-span-3 md:col-span-1 mt-2">
        <h3 name="title" class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h3>

        <p name="description" class="mt-1 text-sm text-gray-600">
            {{ __('Update your account\'s profile information and email address.') }}
        </p>
    </div>
    <div class="col-span-3 md:col-span-2 shadow overflow-hidden sm:rounded-md">
        <div>
            @if (session()->has('message'))
                <div class="@if(session()->has('type_message')) @if(session('type_message') == 'error') bg-red-200 border border-red-700 text-red-800 @endif @else bg-green-200 border-green-700 text-green-800 @endif w-full border rounded-sm py-3 px-4 mb-2">
                    <span class="error">{{ session('message') }}</span>
                </div>
            @endif
        </div>


        <div class=" bg-white sm:p-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                {{ __('Photo') }}
            </label>

            <div x-data="{photoName: null, photoPreview: null}" class="flex items-center">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden" accept="image/*"
                       wire:model="photo"
                       x-ref="photo"
                       x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <button type="button" x-on:click.prevent="$refs.photo.click()" class="ml-3 mrelative items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs">
                    {{ __('Select A New Photo') }}
                </button>

                @if ($this->user->profile_photo_path)
                    <button type="button" wire:click="deleteProfilePhoto" class="ml-1 relative items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs">
                        {{ __('Remove Photo') }}
                    </button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>

            <!-- Name -->
            <div class="mt-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    {{ __('Name') }}
                </label>
                <input type="text" id="name" class="block w-full rounded-md shadow-sm mt-1 py-2 px-3 border border border-gray-500" wire:model.lazy="name">
                @error('name') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- Email -->
            <div class="mt-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                    {{ __('Email') }}
                </label>
                <input type="text" id="email" class="block w-full rounded-md shadow-sm mt-1 py-2 px-3 border border border-gray-500" wire:model.lazy="email">
                @error('email') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- Telefono -->
            <div class="mt-2">
                <div class="mb-2">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="phone">
                        {{ __('Telefonos') }}
                    </label>
                    <small class="text-xs text-primary">(Ingrese sus telefonos de contacto separados por guion medio "-")</small>
                </div>

                <input type="tel" class="block w-full rounded-md shadow-sm mt-1 py-2 px-3 border border border-gray-500" wire:model.defer="phones" >
                @error('phones') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="bg-gray-400 py-3 flex justify-end px-4">
            <button type="submit" class="px-3 py-2 bg-gray-800 text-white rounded-md">Guardar</button>
        </div>
    </div>

</form>
