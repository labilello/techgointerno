<div class="flex mb-3 flex-col md:flex-row">
    <div class="w-full order-2 md:order-1 md:w-4/5 rounded overflow-hidden shadow-lg bg-gray-100">
        <div class="px-4 py-4">
            <div class="w-full">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Busqueda por solicitud
                </label>
                <input wire:model="order" type="text" placeholder="Ejemplo: 200101-000001" class="rounded py-2 px-3 w-full border border-solid border-gray-600">
            </div>
        </div>
    </div>

    <div class="mb-2 md:mb-0 md:px-0 md:ml-5 w-full md:w-1/5 order-1 md:order-2">
        <a href="{{ route('photo.add') }}" class="block text-center py-2 bg-primary-light rounded text-white transition duration-150 ease-in
                                        hover:bg-primary">
            Nuevas imagenes
        </a>
    </div>


</div>
