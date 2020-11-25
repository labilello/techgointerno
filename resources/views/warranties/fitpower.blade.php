<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Garantias') }}
        </h2>
    </x-slot>
    <div class="container">
        <h1 class="h1 text-uppercase font-weight-bolder">Fitpower</h1>

        <div class="row mt-3">
            <div class="col-12 col-md-8">

                <h4 class="h4 text-success">Lista de equipos</h4>
                <div class="table-responsive">
                    <table class="table table-sm ">
                        <thead>
                            <tr>
                                <th scope="col">Tipo equipo</th>
                                <th scope="col" class="text-center">En garantía</th>
                                <th scope="col" class="text-center">Fuera de garantía</th>
                                <th scope="col" class="text-center">Origen</th>
                            </tr>
                        </thead>
{{--                        <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>--}}
{{--                        <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i></td>--}}
                        <tbody class="align-middle">
                            <tr>
                                <td class="font-weight-bold text-black-50">Caminadoras</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><small>Compumundo - Garbarino</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Bicicletas Fijas</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><small>Compumundo - Garbarino</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Cinta</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><small>Compumundo - Garbarino</small></td>
                            </tr>
                        </tbody>

                    </table>
{{--                    <small class="text-muted">Momentaneamente no se permiten ingresos de equipos para esta marca</small>--}}
                </div>

                <div class="mb-4">
                    <h4 class="h4 text-success">Acciones al recibir un cliente</h4>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">No recepciónar en sucursal los productos de la marca</li>
                        <li class="list-group-item list-group-item-action bg-success text-white"><small class="font-weight-bold text-uppercase mr-2">(AMBA)</small>Derivar al cliente al contact center para pactar una visita.</li>
                        <li class="list-group-item list-group-item-action bg-danger text-white"><small class="font-weight-bold text-uppercase mr-2">(Interior)</small>Pactar una visita para una inspeccion del producto.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="h4 text-success">Documentacion necesaria</h4>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">Factura de compra o print de pantalla</li>
                    </ul>
                </div>
            </div>


            <div class="col-12 col-md-4 ">
                <h4 class="h4 text-success mb-3">Información adicional</h4>

                <div class="row">
                    <div class="mb-1 col-6 col-md-12">
                        <h5 class="h5 text-black-50">Contacto Externo</h5>
                        <dl class="row">
                            <dt class="col-sm-5">Contact center</dt>
                            <dd class="col-sm-7">
                                <a href="tel:08104448320" class="d-block">0810-444-8320</a>
                            </dd>
                        </dl>
                    </div>

                    <div class="mb-1 col-6 col-md-12">
                        <h5 class="h5 text-black-50">Contacto Interno</h5>
                        <dl class="row">

                            <dt class="col-sm-5 mb-2">
                                <p class="m-0 d-block">Rafael Gutierrez</p>
                                <small class="text-muted">Comercial</small>
                            </dt>
                            <dd class="col-sm-7">
                                <a href="tel:1146320696" class="d-block">11-4632-0696 (int. 114)</a>
                            </dd>

                            <dt class="col-sm-5">
                                <p class="m-0 d-block">Lucas Paladino</p>
                                <small class="text-muted">Depósito</small>
                            </dt>
                            <dd class="col-sm-7">
                                <a href="tel:1146320696" class="d-block">11-4632-0696 (int. 114)</a>
                            </dd>
                        </dl>
                    </div>

{{--                    <div class="mb-1 col-6 col-md-12">--}}
{{--                        <h5 class="h5 text-black-50">Enlaces útiles para tecnicos</h5>--}}
{{--                        <dl class="row">--}}
{{--                            <dt class="col-sm-5">Portal de agentes</dt>--}}
{{--                            <dd class="col-sm-7">--}}
{{--                                <a href="http://am.eservice.asus.com/ls-web/" class="d-block">Asus Lean eService</a>--}}
{{--                            </dd>--}}
{{--                        </dl>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
