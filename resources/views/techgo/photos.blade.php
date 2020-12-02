<x-app-layout>
    <x-slot name="header">
        {{ __('Fotos de dispositivos - Nuevas imagenes') }}
    </x-slot>

    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        @livewire('upload-file.input')

    </div>
</x-app-layout>
