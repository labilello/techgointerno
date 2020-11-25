<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Garantias') }}
        </h2>
    </x-slot>
    <div class="container">
        <h1 class="h1 text-uppercase font-weight-bolder">Motorola</h1>

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
                                <td class="font-weight-bold text-black-50">Smartphone</td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i></td>
                                <td class="text-center"><small>Validar proveedor en DRIVE</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Moto C / C+</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i></td>
                                <td class="text-center"><small>Validar proveedor en DRIVE</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Moto E4 Plus / E+</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i></td>
                                <td class="text-center"><small>Validar proveedor en DRIVE</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Moto E5 / Play / Plus</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i></td>
                                <td class="text-center"><small>Validar proveedor en DRIVE</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Moto E6 Play / Plus</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i></td>
                                <td class="text-center"><small>Validar proveedor en DRIVE</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Moto G5s</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i></td>
                                <td class="text-center"><small>Validar proveedor en DRIVE</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Moto G6 / Play / Plus</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i></td>
                                <td class="text-center"><small>Validar proveedor en DRIVE</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Moto One Vision / Action / Macro / Hyper</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i></td>
                                <td class="text-center"><small>Validar proveedor en DRIVE</small></td>
                            <tr>
                                <td class="font-weight-bold text-black-50">Moto G7 / Power / Play / Plus</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i></td>
                                <td class="text-center"><small>Validar proveedor en DRIVE</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Moto G8 / Power / Play / Plus</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i></td>
                                <td class="text-center"><small>Validar proveedor en DRIVE</small></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold text-black-50">Moto Z Play 2 / 3</td>
                                <td class="text-center"><i class="fas fa-check-circle text-success h5"></i></td>
                                <td class="text-center"><i class="fas fa-times-circle text-danger h5"></i></td>
                                <td class="text-center"><small>Validar proveedor en DRIVE</small></td>
                            </tr>
                        </tbody>

                    </table>
{{--                    <small class="text-muted">Momentaneamente no se permiten ingresos de equipos para esta marca</small>--}}
                </div>

                <div class="mb-4">
                    <h4 class="h4 text-success">Acciones al recibir un cliente</h4>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action bg-danger text-white"><small class="font-weight-bold text-uppercase mr-2">(No recepcionables)</small>Indicar al cliente que debe comunicarse el contact center para ser derivado a otro centro de servicio.</li>
                        <li class="list-group-item list-group-item-action bg-success text-white"><small class="font-weight-bold text-uppercase mr-2">(Recepcionables)</small>Verificar IMEI en el sitio web de Prexey.</li>
                        <li class="list-group-item list-group-item-action bg-success text-white"><small class="font-weight-bold text-uppercase mr-2">(Recepcionables)</small>Enviar el equipo a Camacua.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="h4 text-success">Documentación necesaria</h4>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">No se requiere documentación en caso de chequearse el IMEI en web de Prexey</li>
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
                                <a href="tel:08006668676" class="d-block">0800-666-8676</a>
                            </dd>

                            <dt class="col-sm-5">Whatsapp</dt>
                            <dd class="col-sm-7">
                                <a href="tel:+5215580546678" class="d-block">5255-8054-6678</a>
                            </dd>

                            <dt class="col-sm-5">En línea</dt>
                            <dd class="col-sm-7">
                                <a href="https://support.motorola.com/rola/es/Chat" class="d-block">Chat</a>
                            </dd>
                        </dl>
                    </div>

                    <div class="mb-1 col-6 col-md-12">
                        <h5 class="h5 text-black-50">Contacto Interno</h5>
                        <dl class="row">
                            <dt class="col-sm-5 mb-2">
                                <p class="m-0 d-block">Maribel Regueiro</p>
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
                            <dt class="col-sm-5">Portal de agentes</dt>
                            <dd class="col-sm-7">
                                <a href="https://america-mds.lenovo.com/index.php" class="d-block">Prexey</a>
                            </dd>

                            <dt class="col-sm-5">Proveedores autorizados</dt>
                            <dd class="col-sm-7">
                                <a href="https://docs.google.com/spreadsheets/d/1-znWdiAj5tdgYUc5RlcsZD-auyamjhCZoduue8NmEWA/edit?usp=sharing" class="d-block">Lista proveedores</a>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
