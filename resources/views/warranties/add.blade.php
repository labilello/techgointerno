<x-app-layout>
    <x-slot name="header">
        {{ __('Garantias / Administración') }}
    </x-slot>

    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <livewire:warranties.add/>
    </div>


{{--    <form class="max-w-7xl mx-auto sm:px-6 lg:px-8" method="POST" action="{{ route('warranty.add.post') }}">--}}
{{--    @csrf--}}
{{--        <div class="flex justify-between mb-5">--}}
{{--            <input type="text" name="name" placeholder="Ingrese el nombre de la marca a crear..." class="flex-1 bg-transparent border-b-2 border-green-400 py-2 px-4 text-xl font-bold" @isset($warranty) value="{{ $warranty->name }}" @endisset required>--}}
{{--            <select name="group" class="ml-2 rounded py-1 px-2 border-2 border-solid" required>--}}
{{--                <option hidden value="">Seleccione tipo de garantía</option>--}}
{{--                @foreach($warrantyGroups as $group)--}}
{{--                    <option value="{{ $group->id }}" @isset($warranty) @if($warranty->warranty_group_id == $group->id) selected @endif @endisset>{{ $group->name }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--            <div class="ml-12 flex justify-between my-auto">--}}
{{--                <input type="submit" value="Crear marca" class="mr-2 py-2 px-4 bg-blue-500 text-white rounded-md">--}}
{{--                <input type="button" value="Borrar marca" class="py-2 px-4 bg-red-600 text-white rounded-md">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="grid gap-4 grid-cols-12">--}}

{{--            <div class="col-span-12 md:col-span-8 col-start-1">  <!-- LADO IZQUIERDO -->--}}
{{--                <div class="mb-4">  <!-- LISTA EQUIPOS -->--}}
{{--                    <div class="flex justify-between">  <!-- HEADER -->--}}
{{--                        <h4 class="h4 text-success">Lista de equipos</h4>--}}
{{--                        <button type="button" class="text-center" onclick="addChildFromTemplate(event)"><i class="fas fa-plus-square h4 text-blue-400"></i></button>--}}
{{--                    </div>--}}

{{--                    <table class="table-auto w-full mb-1">--}}
{{--                        <thead>--}}
{{--                            <tr class="border-b-2 border-green-600 border-t">--}}
{{--                                <th scope="col" class="p-1">Tipo equipo</th>--}}
{{--                                <th scope="col" class="p-1 text-center">En garantía</th>--}}
{{--                                <th scope="col" class="p-1 text-center">Fuera de garantía</th>--}}
{{--                                <th scope="col" class="p-1 text-center">Origen</th>--}}
{{--                                <th scope="col" class="p-1 text-center">&emsp;</th>--}}
{{--                            </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody class="align-middle text-sm des-child">--}}
{{--                            @isset($warranty)--}}
{{--                                @foreach($warranty->devices as $device)--}}
{{--                                    <tr class="border-b h-8" valign="middle">--}}
{{--                                        <td class="pl-1 font-weight-bold text-black-50 ">{{ $device['deviceType'] }}</td>--}}
{{--                                        <td class="text-center"><i class="fas my-auto @isset($device['inWarranty']) fa-check-circle text-green-400 @else fa-times-circle text-red-400 @endisset text-xl"></i></td>--}}
{{--                                        <td class="text-center"><i class="fas my-auto @isset($device['outWarranty']) fa-check-circle text-green-400 @else fa-times-circle text-red-400 @endisset text-xl"></i></td>--}}
{{--                                        <td class="pr-1 text-center "><small>{{ $device['origin']}}</small></td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                            @endisset--}}
{{--                        </tbody>--}}
{{--                    </table>--}}

{{--                    <template>--}}
{{--                        <tr class="border-b align-middle">--}}
{{--                            <td class="p-1">--}}
{{--                                <input type="text" placeholder="Nombre equipo.." class="rounded py-1 px-2 w-full border-2 border-solid" required>--}}
{{--                            </td>--}}
{{--                            <td class="text-center">--}}
{{--                                <input type="checkbox" value="true">--}}
{{--                            </td>--}}

{{--                            <td class="text-center">--}}
{{--                                <input type="checkbox" value="true">--}}
{{--                            </td>--}}

{{--                            <td>--}}
{{--                                <input type="text" placeholder="Origen" class="rounded py-1 px-2 w-full border-2 border-solid " required>--}}
{{--                            </td>--}}

{{--                            <td class="text-center p-1">--}}
{{--                                <button type="button" class="text-center text-red-600 font-extrabold">&cross;</button>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    </template>--}}
{{--                </div>  <!-- FIN lista equipos -->--}}

{{--                <div class="mb-4">  <!-- Acciones Cliente -->--}}
{{--                    <div class="flex justify-between">  <!-- HEADER -->--}}
{{--                        <h4 class="h4 text-success">Acciones al recibir un cliente</h4>--}}
{{--                        <button type="button" class="text-center"><i class="fas fa-plus-square h4 text-blue-400" onclick="addChildFromTemplate(event)"></i></button>--}}
{{--                    </div>--}}

{{--                    <!-- BODY -->--}}
{{--                    <ul class="des-child">--}}
{{--                        @isset($warranty)--}}
{{--                            @foreach($warranty->actions as $action)--}}
{{--                                <li class="border border-gray-300 border-opacity-25 py-2 px-3 @if($action['actionType'] == 'Recepcionables') bg-green-300 text-white @elseif($action['actionType'] == 'No Recepcionables') bg-red-300 text-white @else bg-white text-gray-700 @endif">--}}
{{--                                    {{ $action['actionValue'] }}--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                        @endisset--}}


{{--                    </ul>--}}

{{--                    <template>--}}
{{--                        <li class="flex text-sm mb-1">--}}
{{--                            <select class="rounded py-1 px-2 border-2 border-solid">--}}
{{--                                <option>- Sin seleccion -</option>--}}
{{--                                <option>Recepcionables</option>--}}
{{--                                <option>No Recepcionables</option>--}}
{{--                            </select>--}}
{{--                            <select class="rounded py-1 px-2 w-full border-2 border-solid w-full mx-2" required>--}}
{{--                                <option hidden value="">Seleccione elemento</option>--}}
{{--                                <option>Indicar al cliente que debe comunicarse con el contact center para ser derivado a otro centro de servicio.</option>--}}
{{--                                <option>Recepción del equipo en Solnik.</option>--}}
{{--                                <option>(GARANTÍA) Enviar el equipo a Camacua.</option>--}}
{{--                                <option>(FUERA DE GARANTÍA) Enviar el equipo a Camacua.</option>--}}
{{--                                <option>Verificar IMEI en el sitio web de Prexey.</option>--}}
{{--                                <option>Verificar que no posea control parental activo. En caso de tenerlo y no recordar la contraseña, es un caso fuera de garntía que se resuelve en sucursal.</option>--}}
{{--                                <option>Verificar el origen del producto. Este debe figurar en la lista de distribuidores autorizados.</option>--}}
{{--                                <option>(GARANTÍA) Realizar cambio del producto en sucursal y enviar el equipo dañaro a SupplyChain (service).</option>--}}
{{--                                <option>(GARANTÍA) Generar autorización de cambio de equipo en retail de compra.</option>--}}
{{--                                <option>Verificar que en la documentación adjunta al equipo que la garantía sea "Camacua 46" o el importador sea "Garbarino". Casos contrarios derivar a Arq Design - Gonna.</option>--}}
{{--                                <option>(OTROS) Generar nota de cambio en sucursal de origen.</option>--}}
{{--                                <option>(FUERA DE GARANTIA) Generar nota de cambio en sucursal de origen.</option>--}}
{{--                                <option>(GARANTÍA) Sucursales INTERIOR generar autorización de cambio; Sucursales AMBA enviar a Camacua.</option>--}}
{{--                                <option>(FUERA DE GARANTÍA) Ofrecer descuento para un equipo nuevo.</option>--}}
{{--                                <option>(AMBA) Derivar al cliente al contact center para pactar una visita.</option>--}}
{{--                                <option>(REPRODUCTORES DVD) Enviar equipo a Camacua.</option>--}}
{{--                                <option>(INTERIOR) Pactar una visita para una inspeccion del producto.</option>--}}
{{--                                <option>Verificar periodo de garantía en póliza de seguro.</option>--}}
{{--                                <option>Recepcionar el equipo en sistema TWG.</option>--}}
{{--                            </select>--}}
{{--                            <button type="button" class="text-center text-red-600 font-extrabold">&cross;</button>--}}
{{--                        </li>--}}
{{--                    </template>--}}
{{--                </div>  <!-- FIN Acciones Cliente -->--}}

{{--                <div class="mb-4" x-data="handler()">  <!-- Documentacion -->--}}
{{--                    <div class="flex justify-between">  <!-- HEADER -->--}}
{{--                        <h4 class="h4 text-success">Documentación necesaria</h4>--}}
{{--                        <button type="button" class="text-center"><i class="fas fa-plus-square h4 text-blue-400" @click="addNewField()"></i></button>--}}
{{--                    </div>--}}

{{--                     <!-- BODY -->--}}
{{--                    <ul class="">--}}
{{--                        @isset($warranty)--}}
{{--                            @foreach($warranty->documents as $documents)--}}
{{--                                <li class="border border-gray-300 border-opacity-25 py-2 px-3 bg-white text-gray-700">--}}
{{--                                    {{ $documents }}--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                        @endisset--}}
{{--                        <template x-for="(field, index) in fields" :key="index">--}}
{{--                            <li class="flex text-sm mb-1">--}}
{{--                                <select class="rounded py-1 px-2 w-full border-2 border-solid w-full mr-2" x-bind:name=`documents[]` required>--}}
{{--                                    <option hidden value="">Seleccione elemento</option>--}}
{{--                                    <option>Factura de compra</option>--}}
{{--                                    <option>Póliza de seguro</option>--}}
{{--                                    <option>Factura de compra o print de pantalla firmado y sellado</option>--}}
{{--                                    <option>Número de orden de terceros</option>--}}
{{--                                    <option>No se requiere documentación en caso de chequearse el IMEI en web de Prexey</option>--}}
{{--                                </select>--}}
{{--                                <button type="button" class="text-center text-red-600 font-extrabold" @click="removeField(index)">&cross;</button>--}}
{{--                            </li>--}}
{{--                        </template>--}}
{{--                    </ul>--}}
{{--                </div>  <!-- FIN Documentacion -->--}}
{{--            </div>--}}

{{--            <div class="col-span-12 md:col-span-4 md:col-start-9 col-start-1"> <!--  LADO DERECHO -->--}}
{{--                <h4 class="h4 text-success mb-3">Información adicional</h4>--}}

{{--                <div class="mb-4" x-data="handler()"> <!--  Contacto externo -->--}}
{{--                    <div class="flex justify-between"> <!--  HEADER -->--}}
{{--                        <h5 class="h5 text-black-50">Contacto Externo</h5>--}}
{{--                        <button type="button" class="text-center"><i class="fas fa-plus-square h5 text-blue-400" @click="addNewField()"></i></button>--}}
{{--                    </div>--}}

{{--                    <ul class="">--}}
{{--                        @isset($warranty)--}}
{{--                            @foreach($warranty->externalContact as $contact)--}}
{{--                                <dl class="flex flex-wrap">--}}
{{--                                    <dt class="w-2/5">{{ $contact['externalContactName'] }}</dt>--}}
{{--                                    <dd class="flex-1">--}}
{{--                                        @if($contact['externalContactType'] == 'Telefono')--}}
{{--                                            <a href="tel:{{ $contact['externalContactValue'] }}" class="block">{{ $contact['externalContactValue'] }}</a>--}}
{{--                                        @elseif($contact['externalContactType'] == 'Link')--}}
{{--                                            <a href="{{ $contact['externalContactValue'] }}" class="block">Acceso al sitio <i class="ml-1 fas fa-external-link-alt"></i></a>--}}
{{--                                        @endif--}}
{{--                                    </dd>--}}
{{--                                </dl>--}}
{{--                            @endforeach--}}
{{--                        @endisset--}}
{{--                        <template x-for="(field, index) in fields" :key="index">--}}
{{--                            <li class="flex text-sm mb-1">--}}
{{--                                <select class="rounded py-1 px-2 border-2 border-solid" x-bind:name=`externalContact[${index}][externalContactName]`>--}}
{{--                                    <option>Contact center</option>--}}
{{--                                    <option>Whatsapp</option>--}}
{{--                                    <option>En línea</option>--}}
{{--                                    <option>Arq Design - Gonna</option>--}}
{{--                                </select>--}}
{{--                                <div class="mx-2">--}}
{{--                                    <input class="rounded py-1 px-2 w-full border-2 border-solid mb-1" placeholder="Numero/link..." x-bind:name=`externalContact[${index}][externalContactValue]` required>--}}
{{--                                    <select class="rounded py-1 px-2 w-full border-2 border-solid" x-bind:name=`externalContact[${index}][externalContactType]`>--}}
{{--                                        <option>Telefono</option>--}}
{{--                                        <option>Link</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <button type="button" class="text-center text-red-600 font-extrabold" @click="removeField(index)">&cross;</button>--}}
{{--                            </li>--}}
{{--                        </template>--}}
{{--                    </ul>--}}
{{--                </div> <!--  FIN Contacto externo -->--}}

{{--                <div class="mb-4" x-data="handler()"> <!--  Contacto interno -->--}}
{{--                    <div class="flex justify-between"> <!--  HEADER -->--}}
{{--                        <h5 class="h5 text-black-50">Contacto Interno</h5>--}}
{{--                        <button type="button" class="text-center"><i class="fas fa-plus-square h5 text-blue-400" @click="addNewField()"></i></button>--}}
{{--                    </div>--}}

{{--                    <ul class="">--}}
{{--                        @isset($warranty)--}}
{{--                            @foreach($warranty->internalContacts as $user)--}}
{{--                                <dl class="flex flex-wrap">--}}
{{--                                    <dt class="w-3/6 mb-2">--}}
{{--                                        <p class="m-0 leading-3 block">{{ $user->name }}</p>--}}
{{--                                        <small class="text-blue-300 font-normal ">{{ $user->sector }}</small>--}}
{{--                                    </dt>--}}
{{--                                    <dd class="flex-1">--}}
{{--                                        @foreach($user->phones as $phone)--}}
{{--                                            <a href="tel:{{ $phone }}" class="block">{{ $phone }}</a>--}}
{{--                                        @endforeach--}}
{{--                                    </dd>--}}
{{--                                </dl>--}}
{{--                            @endforeach--}}
{{--                        @endisset--}}
{{--                        <template x-for="(field, index) in fields" :key="index">--}}
{{--                            <li class="flex text-sm mb-1">--}}
{{--                                <select class="rounded py-1 px-2 w-full border-2 border-solid mr-2" x-bind:name=`internalContact[]` required>--}}
{{--                                    <option hidden value="">Seleccione elemento</option>--}}
{{--                                    @foreach($users as $user)--}}
{{--                                        <option value="{{ $user->id }}">{{ $user->name }} - {{ $user->sector }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                                <button type="button" class="text-center text-red-600 font-extrabold" @click="removeField(index)">&cross;</button>--}}
{{--                            </li>--}}
{{--                        </template>--}}
{{--                    </ul>--}}
{{--                </div>  <!-- FIN Contacto interno -->--}}

{{--                <div x-data="handler()">  <!-- Enlaces utiles -->--}}
{{--                    <div class="flex justify-between">  <!-- HEADER -->--}}
{{--                        <h5 class="h5 text-black-50">Enlaces útiles para tecnicos</h5>--}}
{{--                        <button type="button" class="text-center"><i class="fas fa-plus-square h5 text-blue-400" @click="addNewField()"></i></button>--}}
{{--                    </div>--}}

{{--                    <ul class="">--}}
{{--                        @isset($warranty)--}}
{{--                            @foreach($warranty->internalLinks as $link)--}}
{{--                                <dl class="flex flex-wrap">--}}
{{--                                    <dt class="w-2/5">{{ $link['internalLinksType'] }}</dt>--}}
{{--                                    <dd class="flex-1">--}}
{{--                                        <a href="{{ $link['internalLinksValue'] }}" class="block">Acceso al sitio <i class="ml-1 fas fa-external-link-alt"></i></a>--}}
{{--                                    </dd>--}}
{{--                                </dl>--}}
{{--                            @endforeach--}}
{{--                        @endisset--}}
{{--                        <template x-for="(field, index) in fields" :key="index">--}}
{{--                            <li class="flex text-sm mb-1">--}}
{{--                                <input class="rounded py-1 px-2 border-2 border-solid" type="text" placeholder="Descripcion link" x-bind:name=`internalLinks[${index}][internalLinksType]` required>--}}
{{--                                <input class="rounded py-1 px-2 w-full border-2 border-solid mr-2" type="text" placeholder="Numero/link..." x-bind:name=`internalLinks[${index}][internalLinksValue]` required>--}}
{{--                                <button type="button" class="text-center text-red-600 font-extrabold" @click="removeField(index)">&cross;</button>--}}
{{--                            </li>--}}
{{--                        </template>--}}
{{--                    </ul>--}}
{{--                </div>  <!-- FIN Enlaces utiles -->--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </form>--}}
</x-app-layout>

