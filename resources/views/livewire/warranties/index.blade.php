<div>
    <div class="flex">
        <div class="w-5/12">
            <input wire:model="search_query" type="text" placeholder="Ejemplo: Samsung" class="rounded py-2 px-3 w-full border-2 border-solid ">
            <div class="flex items-center mt-2" wire:loading wire:target="search_query">
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
        <div class="7/12 ml-6">
            <p class="text-primary text-sm block"><span class="mr-1 font-bold">AYUDA:</span>Si utiliza el buscador, solo se mostraran las marcas que concuerden con la busqueda.<br>Puede encontrar el periodo de garantía para cada marca en información general!</p>
        </div>

    </div>

    <div class="w-full my-4">
        @if(count($results) < 1)
            <p>No se han encontrado marcas en la busqueda.</p>
        @endif

        @foreach($results as $group=>$result)
            <div x-data={show:false} class="mb-2">
                <div class="rounded-t-md border border-b-0 px-10 py-4 flex justify-between transition duration-150 ease-in hover:text-white @if($group == 'Otros centros de soporte') text-white bg-red-400 @else text-primary-light bg-primary-light @endif">
                    <button @click="show=!show" class="text-left w-full focus:outline-none" type="button">
                        {{ $group }}
                    </button>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div x-show="show" class="border px-10 py-6 grid grid-cols-2 md:grid-cols-4 gap-6">
                    @foreach($result as $brand)
                        <a href="{{ route('warranty.details', ['warranty' => $brand->name]) }}" class="h-32 w-full text-center uppercase font-bold bg-green-400 px-8 py-3 flex justify-center items-center
                                                    hover:bg-green-300">
                            @if( Storage::disk('local')->exists('public/marcas/' . $brand->name . '.svg')  )
                                <img src="{{ asset('storage/marcas/'. $brand->name . '.svg') }}" alt="" class="h-full">
                            @elseif( Storage::disk('local')->exists('public/marcas/' . $brand->name . '.png') )
                                <img src="{{ asset('storage/marcas/'. $brand->name . '.png') }}" alt="" class="h-full">
                            @else
                                {{ $brand->name }}
                            @endif
                        </a>


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
