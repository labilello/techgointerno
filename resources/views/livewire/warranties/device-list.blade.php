<div class="mb-4">
    <livewire:warranties.element-header :description="'Lista de equipos'"/>

    <table class="table-auto w-full mb-1">
        <thead>
        <tr class="border-b-2 border-green-600 border-t">
            <th scope="col" class="p-1">Tipo equipo</th>
            <th scope="col" class="p-1 text-center">En garantía</th>
            <th scope="col" class="p-1 text-center">Fuera de garantía</th>
            <th scope="col" class="p-1 text-center">Origen</th>
            <th scope="col" class="p-1 text-center">&emsp;</th>
        </tr>
        </thead>
        <tbody class="align-middle text-sm">
            @foreach($devices as $n=>$device)
                <tr class="border-b align-middle">
                    <td class="p-1">
                        <input type="text" placeholder="Nombre equipo.." value="{{ $device['type'] }}" wire:model="devices.{{$n}}.type" class="rounded py-1 px-2 w-full border-2 border-solid" required>
                    </td>
                    <td class="text-center">
                        <input type="checkbox" value="{{ $device['warranty'] }}" wire:model="devices.{{$n}}.warranty">
                    </td>

                    <td class="text-center">
                        <input type="checkbox" value="{{ $device['outwarranty'] }}" wire:model="devices.{{$n}}.outwarranty">
                    </td>

                    <td>
                        <input type="text" placeholder="Origen" value="{{ $device['origin'] }}" wire:model="devices.{{$n}}.origin" class="rounded py-1 px-2 w-full border-2 border-solid " required>
                    </td>

                    <td class="text-center p-1">
                        <button type="button" class="text-center text-red-600 font-extrabold" wire:click="removeLine({{$n}})">&cross;</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

{{--    @foreach($devices as $n=>$device)--}}
{{--        <p class="block">{{$n}} --> {{ implode(", ", $device) }}</p>--}}
{{--    @endforeach--}}

{{--    <tr class="border-b h-8" valign="middle">--}}
{{--        <td class="pl-1 font-weight-bold text-black-50 ">{{ $device['type'] }}</td>--}}
{{--        <td class="text-center"><i class="fas my-auto @isset($device['warranty']) fa-check-circle text-green-400 @else fa-times-circle text-red-400 @endisset text-xl"></i></td>--}}
{{--        <td class="text-center"><i class="fas my-auto @isset($device['outwarranty']) fa-check-circle text-green-400 @else fa-times-circle text-red-400 @endisset text-xl"></i></td>--}}
{{--        <td class="pr-1 text-center "><small>{{ $device['origin']}}</small></td>--}}
{{--    </tr>--}}

{{--    <template x-for="(field, index) in fields" :key="index">--}}
{{--        <tr class="border-b align-middle">--}}
{{--            <td class="p-1">--}}
{{--                <input type="text" placeholder="Nombre equipo.." x-model="field.deviceType" x-bind:name=`devices[${index}][deviceType]` class="rounded py-1 px-2 w-full border-2 border-solid" required>--}}
{{--            </td>--}}
{{--            <td class="text-center">--}}
{{--                <input type="checkbox" x-model="field.inWarranty" x-bind:name=`devices[${index}][inWarranty]` value="true">--}}
{{--            </td>--}}

{{--            <td class="text-center">--}}
{{--                <input type="checkbox" x-model="field.outWarranty" x-bind:name=`devices[${index}][outWarranty]` value="true">--}}
{{--            </td>--}}

{{--            <td>--}}
{{--                <input type="text" placeholder="Origen" x-model="field.origin" x-bind:name=`devices[${index}][origin]` class="rounded py-1 px-2 w-full border-2 border-solid " required>--}}
{{--            </td>--}}

{{--            <td class="text-center p-1">--}}
{{--                <button type="button" class="text-center text-red-600 font-extrabold" @click="removeField(index)">&cross;</button>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    </template>--}}
</div>
