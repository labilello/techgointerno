<x-app-layout>
    <x-slot name="header">
        {{ __('Pagina principal') }}
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class=" w-6/8 p-6 text-black text-base">
                <span class="font-semibold block text-2xl">¡Bienvenido al nuevo sitio de uso interno de TechGo!</span>
                Estamos trabajando para que tengas la información necesaria sobre TechGo al alcance de la mano y siempre actualizada.
            </div>
        </div>

        <div class="bg-primary-light overflow-hidden shadow-xl sm:rounded-lg mt-5">
            <div class=" w-6/8 p-6 text-white text-base mb-4">
                <span class="font-semibold block text-2xl mb-3">Notas de la version actual [1.0.1]</span>
                <ul class="pl-4">
                    <li>- Gestión de imagenes de dispositivos enviados a Camacua</li>
                    <li>- Información sobre el soporte tecnico en garantía y fuera de garantía de diversas marcas</li>
                    <li>- Información de contacto sobre recursos registrados en la plataforma</li>
                </ul>
            </div>
        </div>

    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    </div>
</x-app-layout>
