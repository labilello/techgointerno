<x-app-layout>
    <x-slot name="header">
        {{ __('Usuarios') }}
    </x-slot>

    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        @livewire('user.show')
    </div>
</x-app-layout>
