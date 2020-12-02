<form class="col-span-4 bg-white shadow rounded" wire:submit.prevent="importUsers">
    @csrf
    <div class="w-full p-3">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full w-100 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Archivo de usuarios (.csv)
                </label>
                <div class="">
                    <label class="w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leanding-tight focus:outline-none focus:bg-white focus:border-gray-500" for="file">Presione aqui para subir un archivo... </label>
                    <input wire:model="file" type="file" class="opacity-0 hidden w-0" id="file" required>
                </div>
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            </div>
        </div>
        {{--                    <div class="flex flex-wrap -mx-3 mb-6">--}}
        {{--                        <div class="w-full px-3 mb-6 md:mb-0">--}}
        {{--                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">--}}
        {{--                                Sucursal--}}
        {{--                            </label>--}}
        {{--                            <div class="relative">--}}
        {{--                                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">--}}
        {{--                                    <option>CM-043 San Justo</option>--}}
        {{--                                    <option>CM-053 Gonzalez Catan</option>--}}
        {{--                                </select>--}}
        {{--                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">--}}
        {{--                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
    </div>

    <input type="submit" class="w-full bg-green-400 text-white py-3 transition duration-500 ease-in-out hover:border-gray-500 hover:bg-red-500" value="Crear usuarios">
</form>
