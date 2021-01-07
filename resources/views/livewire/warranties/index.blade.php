<div>
    <div class="flex flex-col md:grid md:grid-cols-12 md:gap-x-14">
        {{-- Primera linea --}}
        <div x-data="{ show: false }" class=" md:col-span-4">
            <div class="">
                <button @click={show=true} type="button" class="w-full mb-2 px-4 bg-green-400 text-white py-2 md:py-3 transition-all duration-500 ease-in-out hover:border-gray-500 hover:bg-red-500 cursor-pointer">Periodos de Garantía</Button>
            </div>
            <div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                <div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">
                    <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                        <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                        <div class="px-6 py-3 text-xl border-b font-bold">Periodos de Garantías</div>
                        <div class="p-6 flex-grow text-xs sm:text-sm md:text-base">
                            <dl class="grid grid-cols-12">
                                <dt class="col-span-7 font-bold">Garantía de Reparacion</dt>
                                <dd class="col-span-5 uppercase mb-1">3 meses</dd>

                                <dt class="col-span-7 font-bold">Equipos de Outlet</dt>
                                <dd class="col-span-5 uppercase mb-1">6 meses</dd>

                                <dt class="col-span-7 font-bold">Smartphones</dt>
                                <dd class="col-span-5 uppercase mb-1">
                                    <dl class="grid grid-cols-12 mb-0 text-xs md:text-sm">
                                        <dt class="col-span-7 font-bold">Datsun</dt>
                                        <dd class="col-span-5 uppercase mb-1">6 meses</dd>
                                        <dt class="col-span-7 font-bold">Otros</dt>
                                        <dd class="col-span-5 uppercase">12 meses</dd>
                                    </dl>
                                </dd>

                                <dt class="col-span-7 font-bold">Baterias Smartphone Internas</dt>
                                <dd class="col-span-5 uppercase mb-1">12 meses</dd>

                                <dt class="col-span-7 font-bold">Baterias Smartphone Externas</dt>
                                <dd class="col-span-5 uppercase mb-1">6 meses</dd>

                                <dt class="col-span-7 font-bold">Notebooks</dt>
                                <dd class="col-span-5 uppercase mb-1">12 meses</dd>

                                <dt class="col-span-7 font-bold">Tablets</dt>
                                <dd class="col-span-5 uppercase mb-1">12 meses</dd>

                                <dt class="col-span-7 font-bold">PCs Escritorio</dt>
                                <dd class="col-span-5 uppercase mb-1">12 meses</dd>

                                <dt class="col-span-7 font-bold">Accesorios</dt>
                                <dd class="col-span-5 uppercase mb-1">6 meses</dd>

                                <dt class="col-span-7 font-bold">Purificadores</dt>
                                <dd class="col-span-5 uppercase mb-1">6 meses</dd>

                                <dt class="col-span-7 font-bold">Lavavajillas</dt>
                                <dd class="col-span-5 uppercase mb-1">12 meses</dd>

                                <dt class="col-span-7 font-bold">Cavas</dt>
                                <dd class="col-span-5 uppercase mb-1">12 meses</dd>

                                <dt class="col-span-7 font-bold">Mixers</dt>
                                <dd class="col-span-5 uppercase mb-1">6 meses</dd>

                                <dt class="col-span-7 font-bold">Jarras Termicas</dt>
                                <dd class="col-span-5 uppercase mb-1">12 meses</dd>

                                <dt class="col-span-7 font-bold">Tostadoras</dt>
                                <dd class="col-span-5 uppercase mb-1">12 meses</dd>

                                <dt class="col-span-7 font-bold">Cafeteras</dt>
                                <dd class="col-span-5 uppercase mb-1">12 meses</dd>

                                <dt class="col-span-7 font-bold">Aires Acondicionados</dt>
                                <dd class="col-span-5 uppercase mb-1">12 meses</dd>

                                <dt class="col-span-7 font-bold">Parlantes</dt>
                                <dd class="col-span-5 uppercase mb-1">6 meses</dd>

                                <dt class="col-span-7 font-bold">Microcomponentes</dt>
                                <dd class="col-span-5 uppercase mb-1">6 meses</dd>

                                <dt class="col-span-7 font-bold">Reproductores DVD</dt>
                                <dd class="col-span-5 uppercase mb-1">6 meses</dd>

                                <dt class="col-span-7 font-bold">Impresoras</dt>
                                <dd class="col-span-5 uppercase mb-1">12 meses</dd>

                                <dt class="col-span-7 font-bold">Maquinas de Coser</dt>
                                <dd class="col-span-5 uppercase mb-1">12 meses</dd>

                                <dt class="col-span-7 font-bold">Maquinas de Bordar</dt>
                                <dd class="col-span-5 uppercase mb-1">6 meses</dd>

                                <dt class="col-span-7 font-bold">Cintas de Correr</dt>
                                <dd class="col-span-5 uppercase mb-1">6 meses</dd>

                                <dt class="col-span-7 font-bold">Bicicletas Fijas</dt>
                                <dd class="col-span-5 uppercase mb-1">6 meses</dd>

                                <dt class="col-span-7 font-bold">Caminadoras</dt>
                                <dd class="col-span-5 uppercase mb-1">6 meses</dd>
                            </dl>
                        </div>
                        <div class="px-6 py-3 border-t">
                            <div class="flex justify-end">
                                <button @click={show=false} type="button" class="bg-gray-700 text-gray-100 rounded px-4 py-2 mr-1">Cerrar</Button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
            </div>
        </div>


        <div class=" md:col-span-8">
            <div class="flex items-center">
                <svg class="w-4 h-4 fill-current text-gray-500 ml-4 z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                <input wire:model="search_query" type="text" placeholder="Ejemplo: Samsung" class="w-full -ml-8 pl-10 px-4 py-2 md:py-3 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500"/>
            </div>
        </div>

        {{-- Segunda linea --}}
        <div class="mt-2 md:col-span-4 md:mt-0">
            <div wire:loading  wire:target="search_query">
                <svg class="inline-flex" width="25" height="25" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" stroke="#025aa5">
                    <g fill="none" fill-rule="evenodd">
                        <g transform="translate(1 1)" stroke-width="2">
                            <circle stroke-opacity=".5" cx="18" cy="18" r="18"/>
                            <path d="M36 18c0-9.94-8.06-18-18-18">
                                <animateTransform
                                    attributeName="transform"
                                    type="rotate"
                                    from="0 18 18"
                                    to="360 18 18"
                                    dur="1s"
                                    repeatCount="indefinite"/>
                            </path>
                        </g>
                    </g>
                </svg>
                <span class="ml-2 text-sm font-bold text-tertiary-dark">Buscando coincidencias...</span>
            </div>
        </div>

        <div class=" md:col-span-8 ml-1 mt-2 md:mt-1">
            <p class="text-primary text-sm block"><span class="mr-1 font-bold">AYUDA:</span>Si utiliza el buscador, solo se mostraran las marcas que concuerden con la busqueda.</p>
            {{--            <br>Puede encontrar el periodo de garantía para cada marca en información general!--}}
        </div>


    </div>

    <div class="w-full my-4">
        @if(count($warranties) < 1 && count($otherwarranties) < 1)
            <p>No se han encontrado marcas en la busqueda.</p>
        @endif

        @foreach($warranties as $group=>$result)
            <div x-data={show:false} class="mb-2">
                <div class="rounded-t-md border text-sm md:text-base border-b-0 px-4 py-2 md:px-10 md:py-4 flex justify-between transition duration-150 ease-in hover:text-white @if($group == 'Otros centros de soporte') text-white bg-red-400 @else text-primary-light bg-primary-light @endif">
                    <button @click="show=!show" class="text-left w-full focus:outline-none" type="button">
                        {{ $group }}
                    </button>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div x-show="show" class="border px-4 py-2 md:px-10 md:py-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    @foreach($result as $brand)
                        <a href="{{ route('warranty.details', ['warranty' => $brand]) }}" class="h-24 sm:h-32 w-full text-center uppercase font-bold bg-green-400 px-8 py-3 flex justify-center items-center
                                                    hover:bg-green-300">
                            @if( Storage::disk('local')->exists('public/marcas/' . $brand . '.svg')  )
                                <img src="{{ asset('storage/marcas/'. $brand . '.svg') }}" alt="" class="h-full">
                            @elseif( Storage::disk('local')->exists('public/marcas/' . $brand . '.png') )
                                <img src="{{ asset('storage/marcas/'. $brand . '.png') }}" alt="" class="h-full">
                            @else
                                {{ $brand }}
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach

        @foreach($otherwarranties as $group=>$result)
            <div x-data={show:false} class="mb-2">
                <div class="rounded-t-md border text-sm md:text-base border-b-0 px-4 py-2 md:px-10 md:py-4 flex justify-between transition duration-150 ease-in hover:text-white @if($group == 'Otros centros de soporte') text-white bg-red-400 @else text-primary-light bg-primary-light @endif">
                    <button @click="show=!show" class="text-left w-full focus:outline-none" type="button">
                        {{ $group }}
                    </button>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div x-show="show" class="border px-4 py-2 md:px-10 md:py-6 grid grid-cols-1 md:grid-cols-2 gap-x-6">
                    @foreach($result as $brand)
                        <div class="border-t-8 border-pink-600 rounded-lg mb-4 bg-white transition-all duration-150 transform cursor-default hover:scale-105 flex flex-col">
                            <h3 class="mt-2 text-center font-bold text-pink-700 text-lg md:text-xl">{{ $brand->name }}</h3>
                            <div class="text-left py-3 px-5 text-xs md:text-sm text-gray-400 flex-1">
                                @foreach($brand->phones as $phone)
                                    <div class="flex mb-1">
                                        <p class="w-5/12 inline-flex">{{ $phone['description'] }}:</p>
                                        <a class="w-7/12 ml-2 hover:underline hover:text-tertiary-dark truncate" href="tel:{{ $phone['value'] }}">{{ $phone['value'] }}</a>
                                    </div>
                                @endforeach
                                @foreach($brand->emails as $email)
                                    <div class="flex mb-1">
                                        <p class="w-5/12 inline-flex">{{ $email['description'] }}:</p>
                                        <a class="w-7/12 ml-2 hover:underline hover:text-tertiary-dark truncate" href="mailto:{{ $email['value'] }}">{{ $email['value'] }}</a>
                                    </div>
                                @endforeach
                                @foreach($brand->pages as $page)
                                    <div class="flex mb-1">
                                        <p class="w-5/12 inline-flex">{{ $page['description'] }}:</p>
                                        <a class="w-7/12 ml-2 hover:underline hover:text-tertiary-dark truncate" href="{{ $page['value'] }}">{{ $page['value'] }}</a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="text-center bg-gray-400 py-2 px-2">
                                <p class="text-xs antialiased italic">Ultima actualización: {{ \Carbon\Carbon::parse($brand->updated_at)->diffForHumans() }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach



{{--    <div class="card">--}}
{{--        <div class="card-header bg-primary" id="headingThree">--}}
{{--            <h5 class="mb-0">--}}
{{--                <button class="btn btn-link collapsed text-white btn-block text-left" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
{{--                    Garantías extendidas--}}
{{--                </button>--}}
{{--            </h5>--}}
{{--        </div>--}}
{{--        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">--}}
{{--            <div class="card-body">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                        <a href="garantias/twg" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                            Aseguradora The Warranty Group--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
