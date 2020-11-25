<x-app-layout>
    <x-slot name="header">
            {{ __('Profile') }}
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @livewire('profile.update-information', ['user' => $user])
            @livewire('profile.update-password')

{{--            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))--}}
{{--                <x-jet-section-border />--}}

{{--                <div class="mt-10 sm:mt-0">--}}
{{--                    @livewire('profile.update-user-password')--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())--}}
{{--                <x-jet-section-border />--}}

{{--                <div class="mt-10 sm:mt-0">--}}
{{--                    @livewire('profile.two-factor-authentication-form')--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <x-jet-section-border />--}}

{{--            <div class="mt-10 sm:mt-0">--}}
{{--                @livewire('profile.logout-other-browser-sessions-form')--}}
{{--            </div>--}}

{{--            <x-jet-section-border />--}}

{{--            <div class="mt-10 sm:mt-0">--}}
{{--                @livewire('profile.delete-user-form')--}}
{{--            </div>--}}
        </div>
    </div>
</x-app-layout>
