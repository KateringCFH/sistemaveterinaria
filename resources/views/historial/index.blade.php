@extends('layouts.administrador')
@section('contenido')
<section id="main-content">
    <section class="wrapper">
        <h3>
            <i class="fa fa-angle-right">
            </i>
            Historial
        </h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <h4>
                        <i class="fa fa-angle-right">
                        </i>
                        Listado del historiales
                        <a class="btn btn-success btn-xs" href="">
                            <i class="fa fa-plus">
                                Nuevo
                            </i>
                        </a>
                    </h4>
                    @include('administrador.historial.search')
                    <section id="no-more-tables">
                        <table class="table table-bordered table-striped table-condensed cf">
                            <thead class="cf">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        FECHA
                                    </th>
                                    <th>
                                        MASCOTA
                                    </th>
                                    <th>
                                        PROPIETARIO
                                    </th>
                                    <th>
                                        ESPECIE
                                    </th>
                                    <th>
                                        RAZON DE ATENCION
                                    </th>
                                    <th>
                                        TRATAMIENTO
                                    </th>
                                    <th>
                                        ATENDIDO POR ...
                                    </th>
                                    <th width="200px">
                                        OPCIONES
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($Historial as $h)
                            <tbody>
                                <tr>
                                    <td>
                                        {{ $h->id }}
                                    </td>
                                    <td>
                                        {{ $h->fecha }}
                                    </td>
                                    <td>
                                        {{ $h->mn }}
                                    </td>
                                    <td>
                                        {{ $h->prn }}
                                        {{ $h->prap }}
                                        {{ $h->pram }}
                                    </td>
                                    <td>
                                        {{ $h->e }}
                                    </td>
                                    <td>
                                        {{ $h->obs }}
                                    </td>
                                    <td>
                                        {{ $h->des }}
                                    </td>
                                    <td>
                                        {{ $h->pn }}
                                        {{ $h->pap }}
                                        {{ $h->pam }}
                                    </td>
                                    <td>
                                        <a class="btn btn-warning btn-xs" href="" type="submit">
                                            <i class="fa fa-pencil">
                                                Editar
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-xs" href="">
                                            <i class="fa fa-times">
                                                Eliminar
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </section>
                </div>
                <!-- /content-panel -->
                {{$Historial->render()}}
            </div>
            <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
    </section>
    <!--/wrapper -->
</section>
<!-- /MAIN CONTENT -->
@endsection
