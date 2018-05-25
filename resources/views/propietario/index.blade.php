@extends('layouts.administrador')
@section('contenido')
<section id="main-content">
    <section class="wrapper">
        <h3>
            <i class="fa fa-angle-right">
            </i>
            Propietario
        </h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <h4>
                        <i class="fa fa-angle-right">
                        </i>
                        Listado del Propietarios
                        <a class="btn btn-success btn-xs" href="propietario/create">
                            <i class="fa fa-plus">
                                Nuevo
                            </i>
                        </a>
                    </h4>
                    @include('administrador.propietario.search')
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
                                        AP. PATERNO
                                    </th>
                                    <th>
                                        AP. MATERNO
                                    </th>
                                    <th>
                                        TELEFONO
                                    </th>
                                    <th>
                                        C.I.
                                    </th>
                                    <th>
                                        DIRECCION
                                    </th>
                                    <th>
                                        CODIGO RFID
                                    </th>
                                    <th width="200px">
                                        OPCIONES
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($Propietario as $pr)
                            <tbody>
                                <tr>
                                    <td>
                                        {{ $pr->idpropietario }}
                                    </td>
                                    <td>
                                        {{ $pr->nombre }}
                                    </td>
                                    <td>
                                        {{ $pr->ap_paterno }}
                                    </td>
                                    <td>
                                        {{ $pr->ap_materno }}
                                    </td>
                                    <td>
                                        {{ $pr->telf }}
                                    </td>
                                    <td>
                                        {{ $pr->ci }}
                                    </td>
                                    <td>
                                        {{ $pr->direccion }}
                                    </td>
                                    <td>
                                        {{ $pr->rfid }}
                                    </td>
                                    <td>
                                        <a class="btn btn-warning btn-xs" href="{{URL::action('PropietarioController@edit',$pr->idpropietario)}}" type="submit">
                                            <i class="fa fa-pencil">
                                                Editar
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-xs" data-target="#modal-delete-{{$pr->idpropietario}}" data-toggle="modal" href="">
                                            <i class="fa fa-times">
                                                Eliminar
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                @include('administrador.propietario.modal')
                            </tbody>
                            @endforeach
                        </table>
                    </section>
                </div>
                {{$Propietario->render()}}
            </div>
        </div>
    </section>
</section>
@endsection
