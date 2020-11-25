{{--@extends('layouts.app')--}}

{{--@section('content')--}}
<x-app-layout>
    <x-slot name="header">
        {{ __('Soporte tecnico') }}
    </x-slot>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @livewire('warranties.index')


{{--        <div id="accordion">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header bg-success" id="headingOne">--}}
{{--                    <h5 class="mb-0">--}}
{{--                        <button class="btn btn-link text-white btn-block text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                            Soporte Marcas--}}
{{--                        </button>--}}
{{--                    </h5>--}}
{{--                </div>--}}

{{--                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/samsung" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Samsung--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/nokia" class="btn btn-block text-uppercase py-5 font-weight-bold mb-2 bg-warning">--}}
{{--                                    Nokia--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 134.84" class="w-full h-auto my-auto" aria-label="Nokia logo" focusable="false">--}}
{{--                                        <path fill="#124191" d="M38.52 133.18H0V2.18H66.62L143.05 99.98V2.18H181.57V133.18H116.3L38.52 33.71V133.18M365.87 92.67C365.87 110.88 362.65 117.16 357.32 123.18C349.15 132.14 337.26 134.84 314.35 134.84L248.58 134.84C225.67 134.84 213.76 132.14 205.6 123.18C200.27 117.16 197.05 110.88 197.05 92.67L197.05 42.17C197.05 23.97 200.27 17.7 205.6 11.67C213.77 2.7 225.67 0 248.58 0L314.35 0C337.26 0 349.15 2.7 357.32 11.67C362.65 17.7 365.87 23.97 365.87 42.17L365.87 92.67M312.73 101.65C321.53 101.65 324.63 101.13 326.74 99.21C328.71 97.42 329.58 95.11 329.58 87.41L329.58 47.43C329.58 39.73 328.71 37.44 326.74 35.64C324.63 33.71 321.53 33.2 312.73 33.2L250.19 33.2C241.39 33.2 238.29 33.71 236.19 35.64C234.21 37.44 233.34 39.73 233.34 47.43L233.34 87.41C233.34 95.11 234.21 97.42 236.19 99.21C238.29 101.13 241.39 101.65 250.19 101.65L312.73 101.65V101.65M421.85 2.18V133.18H381.6V2.18H421.85M489.85 2.18H542.99L471.27 63.45 552.16 133.18H495.3L421.85 64.86 489.85 2.18M559.58 2.18H599.84V133.18H559.58M753.31 133.18 741.4 110.36H663.51L651.74 133.17H607.27L678.62 2.18H728.66L800 133.18H753.31M677.5 81.91H727.55L702.52 34.48 677.5 81.91">--}}
{{--                                        </path>--}}
{{--                                    </svg>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/hyundai" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Hyundai--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/lg" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    LG--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/motorola" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Motorola--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/apple" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Apple--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/brother" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Brother--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/asus" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Asus--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/exo" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    EXO--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/nintendo" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Nintendo--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/roku" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Roku--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/turtlebeach" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Turtle Beach--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/thrustmaster" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    ThrustMaster--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="card">--}}
{{--                <div class="card-header bg-secondary" id="headingTwo">--}}
{{--                    <h5 class="mb-0">--}}
{{--                        <button class="btn btn-link collapsed text-white btn-block text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
{{--                            Soporte Marcas Propias--}}
{{--                        </button>--}}
{{--                    </h5>--}}
{{--                </div>--}}
{{--                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/commodore" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Commodore--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/datsun" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Datsun--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/blu" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    BLU--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/next" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Next--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/fitpower" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Fitpower--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/audiologic" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Audiologic--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/coventry" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Coventry--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 col-md-3">--}}
{{--                                <a href="garantias/outlet" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Outlet--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="card">--}}
{{--                <div class="card-header bg-primary" id="headingThree">--}}
{{--                    <h5 class="mb-0">--}}
{{--                        <button class="btn btn-link collapsed text-white btn-block text-left" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
{{--                            Garantías extendidas--}}
{{--                        </button>--}}
{{--                    </h5>--}}
{{--                </div>--}}
{{--                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-6 px-2 px-md-3 col-md-3">--}}
{{--                                <a href="garantias/twg" class="btn btn-block text-uppercase font-weight-bold py-5 mb-2 bg-warning">--}}
{{--                                    Aseguradora The Warranty Group--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="modal fade bg-white " tabindex="-1" id="modalPeriodos">--}}
{{--        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header bg-danger text-white">--}}
{{--                    <h5 class="modal-title text-left" id="modalPeriodos">Periodos de garantía por tipo de producto</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <dl class="row">--}}
{{--                        <dt class="col-sm-6">Garantía de Reparacion</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">3 meses</dd>--}}

{{--                        <dt class="col-sm-6">Equipos de Outlet</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">6 meses</dd>--}}

{{--                        <dt class="col-sm-6">Smartphones</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">--}}
{{--                            <dl class="row mb-0">--}}
{{--                                <dt class="col-5">Datsun</dt>--}}
{{--                                <dd class="col-7 text-uppercase">6 meses</dd>--}}
{{--                                <dt class="col-5">Otros</dt>--}}
{{--                                <dd class="col-7 text-uppercase">12 meses</dd>--}}
{{--                            </dl>--}}
{{--                        </dd>--}}

{{--                        <dt class="col-sm-6">Baterias Smartphone Internas</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">12 meses</dd>--}}

{{--                        <dt class="col-sm-6">Baterias Smartphone Externas</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">6 meses</dd>--}}

{{--                        <dt class="col-sm-6">Notebooks</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">12 meses</dd>--}}

{{--                        <dt class="col-sm-6">Tablets</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">12 meses</dd>--}}

{{--                        <dt class="col-sm-6">Computadoras</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">12 meses</dd>--}}

{{--                        <dt class="col-sm-6">Accesorios</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">6 meses</dd>--}}

{{--                        <dt class="col-sm-6">Purificadores</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">6 meses</dd>--}}

{{--                        <dt class="col-sm-6">Lavavajillas</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">12 meses</dd>--}}

{{--                        <dt class="col-sm-6">Cavas</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">12 meses</dd>--}}

{{--                        <dt class="col-sm-6">Mixer</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">6 meses</dd>--}}

{{--                        <dt class="col-sm-6">Jarras Termicas</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">12 meses</dd>--}}

{{--                        <dt class="col-sm-6">Tostadoras</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">12 meses</dd>--}}

{{--                        <dt class="col-sm-6">Cafeteras</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">12 meses</dd>--}}

{{--                        <dt class="col-sm-6">Aires Acondicionados</dt>--}}
{{--                        <dd class="col-sm-6 text-uppercase">12 meses</dd>--}}

{{--                    </dl>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

</x-app-layout>

