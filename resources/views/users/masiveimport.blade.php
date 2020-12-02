<x-app-layout>
    <x-slot name="header">
            {{ __('Usuarios / Importación Masiva') }}
    </x-slot>

    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-6 md:gap-12">
            <div class="col-span-2 mb-4 md:mb-0">
                <h3 class="text-lg font-medium text-gray-900">Creación masiva de usuarios</h3>
                <p class="mt-1 text-sm text-gray-600">Importe un archivo .csv con todos los datos de los usuarios a crear. El formato deberá ser como el siguiente:</p>
            </div>

            @livewire('user.masive-import')
        </div>
    </div>
</x-app-layout>
