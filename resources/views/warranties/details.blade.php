<x-app-layout>
    <x-slot name="header">
        {{ __('Marcas') }} - {{ $warranty->name }}
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-2">
            @if( $warranty->name == 'Asus' )
                <div class="flex justify-between items-center bg-yellow-200 relative text-yellow-600 py-3 px-6 rounded-lg">
                    <div>
                        <span class="font-semibold text-yellow-700">¡ATENCIÓN!</span>
                        Los equipos fuera de garantía quedan sujetos a disponibilidad de piezas en el páis
                    </div>
                    <div>
                        <button type="button" class=" text-yellow-700">
                            <span class="text-2xl">&times;</span>
                        </button>
                    </div>
                </div>
            @elseif( $warranty->name == 'Datsun' )
                <div class="flex justify-between items-center bg-yellow-200 relative text-yellow-600 py-3 px-6 rounded-lg">
                    <div>
                        <span class="font-semibold text-yellow-700">¡ATENCIÓN!</span>
                        A excepcion de otras marcas, los Smartphones de esta marca poseen un periodo de garantía de <strong>6 MESES</strong>
                    </div>
                    <div>
                        <button type="button" class=" text-yellow-700">
                            <span class="text-2xl">&times;</span>
                        </button>
                    </div>
                </div>
            @elseif( $warranty->name == 'Hyundai' || $warranty->name == 'Nokia' )
                <div class="flex justify-between items-center bg-yellow-200 relative text-yellow-600 py-3 px-6 rounded-lg">
                    <div>
                        <span class="font-semibold text-yellow-700">¡ATENCIÓN!</span>
                        Actualmente las reparaciones para esta marca se encuentran con demoras
                    </div>
                    <div>
                        <button type="button" class=" text-yellow-700">
                            <span class="text-2xl">&times;</span>
                        </button>
                    </div>
                </div>
            @elseif( $warranty->name == 'Nintendo' )
                <div class="mb-1 flex justify-between items-center bg-red-200 relative text-yellow-600 py-3 px-6 rounded-lg">
                    <div>
                        <span class="font-semibold text-yellow-700">¡ATENCIÓN!</span>
                        Momentaneamente nos encontramos sin stock de Joycon. Por favor, tomar los datos del cliente para informarle cuando la situacion se regularice
                    </div>
                    <div>
                        <button type="button" class=" text-yellow-700">
                            <span class="text-2xl">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="flex justify-between items-center bg-yellow-200 relative text-yellow-600 py-3 px-6 rounded-lg">
                    <div>
                        <span class="font-semibold text-yellow-700">¡ATENCIÓN!</span>
                        Si se trata de una consola de origen extranjero, se confirmará la validez de la garantía con Nintendo EEUU
                    </div>
                    <div>
                        <button type="button" class=" text-yellow-700">
                            <span class="text-2xl">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
        </div>


        <div class="grid gap-20 grid-cols-12">
            <div class="col-span-12 md:col-span-8 col-start-1"> {{-- LADO IZQUIERDO --}}

                @if( count($warranty->devices) > 0)
                    <div class="mb-4"> {{-- LISTA EQUIPOS --}}

                        <h4 class="text-2xl font-semibold text-green-500 mb-2">Lista de equipos</h4>
                        <table class="table-auto w-full mb-1">
                            <thead>
                            <tr class="border-b-2 border-green-600 border-t">
                                <th scope="col" class="p-1">Tipo equipo</th>
                                <th scope="col" class="text-center">En garantía</th>
                                <th scope="col" class="text-center">Fuera de garantía</th>
                                <th scope="col" class="text-center p-1">Origen</th>
                            </tr>
                            </thead>
                            <tbody class="text-sm">
                            @foreach($warranty->devices as $device)
                                <tr class="border-b h-8" valign="middle">
                                    <td class="pl-1 font-weight-bold text-black-50 ">{{ $device['deviceType'] }}</td>
                                    <td class="text-center"><i class="fas my-auto @isset($device['inWarranty']) fa-check-circle text-green-400 @else fa-times-circle text-red-400 @endisset text-lg"></i></td>
                                    <td class="text-center"><i class="fas my-auto @isset($device['outWarranty']) fa-check-circle text-green-400 @else fa-times-circle text-red-400 @endisset text-lg"></i></td>
                                    <td class="pr-1 text-center "><small>{{ $device['origin']}}</small></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div> {{-- FIN lista equipos --}}
                @endif

                @if( count($warranty->actions) > 0)
                    <div class="mb-4"> {{-- Acciones Cliente --}}
                        <h4 class="text-2xl font-semibold text-green-500 mb-2">Acciones al recibir un cliente</h4>

                        {{-- BODY --}}
                        <ul class="border rounded border-opacity-0 border-gray-700">
                            @foreach($warranty->actions as $action)
                                <li class="border border-gray-500 border-opacity-25 py-2 px-4 @if($action['actionType'] == 'Recepcionables') bg-green-400 text-white @elseif($action['actionType'] == 'No Recepcionables') bg-red-400 text-white @else bg-white text-gray-700 @endif">
                                    {{ $action['actionValue'] }}
                                </li>
                            @endforeach
                        </ul>
                    </div> {{-- FIN Acciones Cliente --}}
                @endif

                @if( count($warranty->documents) > 0)
                    <div class="mb-4"> {{-- Documentacion --}}
                        <h4 class="text-2xl font-semibold text-green-500 mb-2">Documentación necesaria</h4>

                        {{-- BODY --}}
                        <ul class="border rounded border-opacity-0 border-gray-700">
                            @foreach($warranty->documents as $documents)
                                <li class="border border-gray-500 border-opacity-25 py-2 px-4 bg-white text-gray-700">
                                    {{ $documents }}
                                </li>
                            @endforeach
                        </ul>
                    </div> {{-- FIN Documentacion --}}
                @endif

            </div> {{-- Fin lado izquierdo --}}

            <div class="col-span-12 md:col-span-4 md:col-start-9 col-start-1"> {{-- LADO DERECHO --}}
                <h4 class="text-2xl font-semibold text-green-500 ">Información adicional</h4>

                @if( count($warranty->externalContact) > 0)
                    <div class="mb-3"> {{-- Contacto externo --}}
                        <h5 class="text-xl text-tertiary font-semibold ">Contacto Externo</h5>

                        @foreach($warranty->externalContact as $contact)
                            <dl class="flex flex-wrap">
                                <dt class="w-7/12">{{ $contact['externalContactName'] }}</dt>
                                <dd class="flex-1 text-right transition duration-150 ease-in hover:text-tertiary-dark">
                                    @if($contact['externalContactType'] == 'Telefono')
                                        <a href="tel:{{ $contact['externalContactValue'] }}" class="block">{{ $contact['externalContactValue'] }} <i class="ml-1 fas fa-phone text-tertiary-dark"></i></a>
                                    @elseif($contact['externalContactType'] == 'Link')
                                        <a href="{{ $contact['externalContactValue'] }}" class="block">Acceso al sitio <i class="ml-1 fas fa-external-link-alt text-tertiary-dark"></i></a>
                                    @endif
                                </dd>
                            </dl>
                        @endforeach

                    </div> {{-- FIN Contacto externo --}}
                @endif

                @if( count($warranty->internalContacts) > 0)
                    <div> {{-- Contacto interno --}}
                        <h5 class="text-xl mb-1 text-tertiary font-semibold">Contacto Interno</h5>

    {{--                    @dd($warranty->internalContacts)--}}
                        @foreach($warranty->internalContacts as $user)
                            <dl class="flex flex-wrap">
                                <dt class="w-6/12 mb-3">
                                    <p class="m-0 leading-3 block ">{{ $user->name }}</p>
                                    <small class="text-green-500 font-semibold">{{ $user->sector }}</small>
                                </dt>
                                <dd class="flex-1 text-sm text-right">
                                    @foreach($user->phones as $phone)
                                        <div class="block transition duration-150 ease-in hover:text-tertiary-dark">
                                            <a href="tel:{{ $phone }}">{{ $phone }}</a>
                                            <i class="ml-1 fas fa-phone text-tertiary-dark"></i>
                                        </div>
                                    @endforeach
                                        <div class="block transition duration-150 ease-in hover:text-tertiary-dark">
                                            <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                            <i class="ml-1 fas fa-envelope text-tertiary-dark"></i>
                                        </div>
                                </dd>
                            </dl>
                        @endforeach

                    </div> {{-- FIN Contacto interno --}}
                @endif

                @if( count($warranty->internalLinks) > 0)
                    <div> {{-- Enlaces utiles --}}
                        <h5 class="text-xl mb-2 text-tertiary font-semibold">Enlaces útiles para tecnicos</h5>

                        @foreach($warranty->internalLinks as $link)
                            <dl class="flex flex-wrap">
                                <dt class="w-7/12">{{ $link['internalLinksType'] }}</dt>
                                <dd class="flex-1 text-right">
                                    <a href="{{ $link['internalLinksValue'] }}" class="block transition duration-150 ease-in hover:text-tertiary-dark">Acceso al sitio <i class="ml-1 fas fa-external-link-alt text-tertiary-dark"></i></a>
                                </dd>
                            </dl>
                        @endforeach
                    </div> {{-- FIN Enlaces utiles --}}
                @endif
            </div> {{-- Fin lado derecho --}}
        </div>

    </div>
</x-app-layout>
