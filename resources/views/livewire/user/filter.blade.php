<div class="w-full rounded overflow-hidden shadow-lg mb-3">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Filtros de Busqueda</div>
        <div class="grid grid-cols-12 grid-rows-2 gap-4">
            <div class="col-span-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Nombre y Apellido
                </label>
                <input wire:model="name" type="text" placeholder="Ejemplo: Micaela Romero" class="rounded py-2 px-3 w-full border-2 border-solid ">
            </div>

            <div class="col-span-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Rol en el sistema
                </label>
                <input wire:model="role" type="text" placeholder="Ejemplo: Administrador" class="rounded py-2 px-3 w-full border-2 border-solid ">
            </div>

            <div class="col-span-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Legajo
                </label>
                <input wire:model="legajo"  type="text" placeholder="Ejemplo: 56441" class="rounded py-2 px-3 w-full border-2 border-solid ">
            </div>

            <div class="col-span-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Sector de la compañia
                </label>
                <input wire:model="sector" type="text" placeholder="Ejemplo: Asesor Integral" class="rounded py-2 px-3 w-full border-2 border-solid ">
            </div>

            <div class="col-span-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Sucursal
                </label>
                <select wire:model="store" class="rounded py-2 px-3 w-full border-2 border-solid"> {{-- Store --}}
                    <option value="" selected>-</option>
                    @foreach($stores as $store)
                        <option value="{{ $store->id }}">{{ $store->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
