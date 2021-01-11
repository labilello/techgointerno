<x-app-layout>
    <x-slot name="header">
        {{ __('Pagina principal') }}
    </x-slot>

    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="w-6/8 p-5 md:p-6 text-black text-sm md:text-base">
                <span class="font-semibold block text-lg md:text-2xl mb-2">¡Bienvenido al nuevo sitio de uso interno de TechGo!</span>
                Estamos trabajando para que tengas la información necesaria sobre TechGo al alcance de la mano y siempre actualizada.
                <span class="block mt-1">Por consultas o informar errores, busque los datos de contacto en la seccion de "Usuarios" de <strong>Leandro Bilello</strong> e informelo!</span>
            </div>
        </div>

        <div class="bg-primary-light overflow-hidden shadow-xl sm:rounded-lg mt-5">
            <div class="w-6/8 p-5 md:p-6 text-primary-light">
                <span class="font-semibold block text-lg md:text-2xl mb-3">Notas de la version actual [1.4.2]</span>
                <ul class="pl-4 text-sm md:text-base">
                    <li class="mb-2">- Gestión de imagenes de dispositivos enviados a Camacua</li>
                    <li class="mb-2">- Información sobre el soporte tecnico en garantía y fuera de garantía de diversas marcas</li>
                    <li class="mb-2">- Información de contacto sobre recursos registrados en la plataforma</li>
                    <li class="mb-2"><span class="bg-blue-600 text-gray-200 text-xs px-2 py-1 rounded-full">Nuevo</span> - Listado de documentos utiles para la labor diaria como manuales y documentos de capacitación</li>
                </ul>
            </div>
        </div>

    </div>
</x-app-layout>
