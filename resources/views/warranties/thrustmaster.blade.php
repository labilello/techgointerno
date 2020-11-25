<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Garantias') }}
        </h2>
    </x-slot>
    <div class="container">
        <h1 class="h1 text-uppercase font-weight-bolder">Thrustmaster</h1>

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
                                <td class="font-weight-bold text-black-50">Auricular Gamer Y-300CPX Far Cry 5</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i>
                                <td class="text-center"><small>Distribuidor Autorizado</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Auricular Gamer Y-350CPX 7.1 Far Cry 5</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i>
                                <td class="text-center"><small>Distribuidor Autorizado</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Joystick Dual Analog 4</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i>
                                <td class="text-center"><small>Distribuidor Autorizado</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Joystick Controller</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i>
                                <td class="text-center"><small>Distribuidor Autorizado</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Joystick JYTH0705 T Wireless Duo Pack</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i>
                                <td class="text-center"><small>Distribuidor Autorizado</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Joystick JYTH0742 Vibracion GPX</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i>
                                <td class="text-center"><small>Distribuidor Autorizado</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Volante T80 Ferrari 488</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i>
                                <td class="text-center"><small>Distribuidor Autorizado</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Volante T80 THR-A-41944</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i>
                                <td class="text-center"><small>Distribuidor Autorizado</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Volante VOTH0096 Cabina Ferarri Vibration GT</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i>
                                <td class="text-center"><small>Distribuidor Autorizado</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Volante VOTH0096 Cabina Ferarri Wireless GT</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i>
                                <td class="text-center"><small>Distribuidor Autorizado</small></td>
                            </tr>
                        </tbody>

                    </table>
                    {{--                    <small class="text-muted">Momentaneamente no se permiten ingresos de equipos para esta marca</small>--}}
                </div>

                <div class="mb-4">
                    <h4 class="h4 text-success">Acciones al recibir un cliente</h4>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action bg-danger text-white"><small class="font-weight-bold text-uppercase mr-2">(No recepcionables)</small>Indicar al cliente que debe comunicarse el contact center para ser derivado a otro centro de servicio.</li>
                        <li class="list-group-item list-group-item-action bg-success text-white"><small class="font-weight-bold text-uppercase mr-2">(Recepcionables)</small>Realizar cambio del producto en sucursal y enviar el equipo dañaro a SupplyChain (service).</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="h4 text-success">Documentación necesaria</h4>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">Factura de compra</li>
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
                                <a href="tel:1132312601" class="d-block">11-3231-2601</a>
                                {{--                                <a href="tel:1146320696" class="d-block">11-4632-0696 (int. 114)</a>--}}
                            </dd>

                            <dt class="col-sm-5">
                                <p class="m-0 d-block">Lucas Paladino</p>
                                <small class="text-muted">Depósito</small>
                            </dt>
                            <dd class="col-sm-7">
                                <a href="tel:1137896188" class="d-block">11-3789-6188</a>
                            </dd>
                        </dl>
                    </div>

                    <div class="mb-1 col-6 col-md-12">
                        <h5 class="h5 text-black-50">Enlaces útiles para tecnicos</h5>
                        <dl class="row">
                            <dt class="col-sm-5">Distribuidores autorizados</dt>
                            <dd class="col-sm-7">
                                <a href="#" class="d-block">Lista de distribuidores</a>
                            </dd>

                            <dt class="col-sm-5">Productos recepcionables</dt>
                            <dd class="col-sm-7">
                                <a href="https://docs.google.com/spreadsheets/u/0/d/19HYA45RYBhniikuWPumVGZkVwOPQbTWkFnj1r4N65x4/htmlview" class="d-block">Lista de productos</a>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
