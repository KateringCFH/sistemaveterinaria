@extends('layouts.administrador')
@section('contenido')
<section id="main-content">
    <section class="wrapper">
        <h3>
            <i class="fa fa-angle-right">
            </i>
            Mascota
        </h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <h4>
                        <i class="fa fa-angle-right">
                        </i>
                        Listado de las mascotas
                        <a class="btn btn-success btn-xs" href="mascota/create">
                            <i class="fa fa-plus">
                                Nuevo
                            </i>
                        </a>
                    </h4>
                    @include('administrador.mascota.search')
                    <section id="no-more-tables">
                        <table class="table table-bordered table-striped table-condensed cf">
                            <thead class="cf">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        NOMBRE
                                    </th>
                                    <th>
                                        RAZA
                                    </th>
                                    <th>
                                        ESPECIE
                                    </th>
                                    <th>
                                        SEXO
                                    </th>
                                    <th>
                                        DESCRIPCION
                                    </th>
                                    <th>
                                        FECHA REGISTRO
                                    </th>
                                    <th>
                                        PROPIETARIO
                                    </th>
                                    <th width="200px">
                                        OPCIONES
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($Mascota as $m)
                            <tbody>
                                <tr>
                                    <td>
                                        {{ $m->idmascota }}
                                    </td>
                                    <td>
                                        {{ $m->nombre }}
                                    </td>
                                    <td>
                                        {{ $m->raza }}
                                    </td>
                                    <td>
                                        {{ $m->especie }}
                                    </td>
                                    <td>
                                        {{ $m->sexo }}
                                    </td>
                                    <td>
                                        {{ $m->descripcion }}
                                    </td>
                                    <td>
                                        {{ $m->fecha_registro }}
                                    </td>
                                    <td>
                                        {{ $m->pn }}
                                        {{ $m->pp }}
                                        {{ $m->pm }}
                                    </td>
                                    <td>
                                        <a class="btn btn-warning btn-xs" href="{{URL::action('MascotaController@edit',$m->idmascota)}}" type="submit">
                                            <i class="fa fa-pencil">
                                                Editar
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-xs" data-target="#modal-delete-{{$m->idmascota}}" data-toggle="modal" href="">
                                            <i class="fa fa-times">
                                                Eliminar
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                @include('administrador.mascota.modal')
                            </tbody>
                            @endforeach
                        </table>
                    </section>
                </div>
                <!-- /content-panel -->
                {{$Mascota->render()}}
            </div>
            <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
    </section>
    <!--/wrapper -->
</section>
<!-- /MAIN CONTENT -->
@endsection
