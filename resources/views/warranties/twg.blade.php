<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Garantias') }}
        </h2>
    </x-slot>
    <div class="container">
        <h1 class="h1 text-uppercase font-weight-bolder">The Warranty Group</h1>

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
                                <td class="font-weight-bold text-black-50">Commodore</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center">-</td>
                                <td class="text-center"><small>Cualquier retail derivado por TWG - Argentina</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Asus</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center">-</td>
                                <td class="text-center"><small>Cualquier retail derivado por TWG - Argentina</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Nokia</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center">-</td>
                                <td class="text-center"><small>Cualquier retail derivado por TWG - Argentina</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Samsung</td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i></td>
                                <td class="text-center">-</td>
                                <td class="text-center"><small>Cualquier retail derivado por TWG - Argentina</small></td>
                            </tr>
                        </tbody>

                    </table>
{{--                    <small class="text-muted">Momentaneamente no se permiten ingresos de equipos para esta marca</small>--}}
                </div>

                <div class="mb-4">
                    <h4 class="h4 text-success">Acciones al recibir un cliente</h4>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action bg-danger text-white"><small class="font-weight-bold text-uppercase mr-2">(No recepcionables)</small>Indicar al cliente que debe comunicarse al contact center para ser derivado a otro centro de servicio.</li>
                        <li class="list-group-item list-group-item-action bg-success text-white"><small class="font-weight-bold text-uppercase mr-2">(Recepcionables)</small>Verificar periodo de garantía en póliza de seguro.</li>
                        <li class="list-group-item list-group-item-action bg-success text-white"><small class="font-weight-bold text-uppercase mr-2">(Recepcionables)</small>Recepción del equipo en TWG.</li>
                        <li class="list-group-item list-group-item-action bg-success text-white"><small class="font-weight-bold text-uppercase mr-2">(Recepcionables)</small>Enviar el equipo a Camacua.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="h4 text-success">Documentación necesaria</h4>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">Factura de compra o print de pantalla firmado y sellado</li>
                        <li class="list-group-item list-group-item-action">Póliza de seguro</li>
                        <li class="list-group-item list-group-item-action">Número de orden de terceros</li>
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
                                <a href="tel:08106664272" class="d-block">0810-666-4272</a>
                            </dd>
                        </dl>
                    </div>

                    <div class="mb-1 col-6 col-md-12">
                        <h5 class="h5 text-black-50">Contacto Interno</h5>
                        <dl class="row">

                            <dt class="col-sm-5 mb-2">
                                <p class="m-0 d-block">Milton Cardozo</p>
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

                    <div class="mb-1 col-6 col-md-12">
                        <h5 class="h5 text-black-50">Enlaces útiles para tecnicos</h5>
                        <dl class="row">
                            <dt class="col-sm-5">Portal de agentes</dt>
                            <dd class="col-sm-7">
                                <a href="http://twg.ciberbrain.net/" class="d-block">TWG Ciberbrain</a>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
