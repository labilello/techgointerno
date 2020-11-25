<div class="flex mb-3">
    <div class="w-4/5 rounded overflow-hidden shadow-lg">
        <div class="px-6 py-4">
{{--            <div class="font-bold text-xl mb-2">Filtros de Busqueda</div>--}}
            <div class="w-full">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Solicitud
                </label>
                <input wire:model="order" type="text" placeholder="Ejemplo: 200101-000001" class="rounded py-2 px-3 w-full border-2 border-solid ">
            </div>
        </div>
    </div>

    <div class="ml-5 w-1/5">
        <a href="{{ route('photo.add') }}" class="block text-center py-2 bg-primary-light rounded text-white transition duration-150 ease-in
                                        hover:bg-primary">
            Nuevas imagenes
        </a>
    </div>


</div>
