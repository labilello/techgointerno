<x-app-layout>
    <x-slot name="header">
        {{ __('Lista de archivos') }}
    </x-slot>

    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        @livewire('cloud-files.cloud-files')
    </div>

</x-app-layout>
