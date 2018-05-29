<?php
$c= Auth::user()->cargo;
?>
@extends('layouts.'.$c)
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
                    </h4>
                    @include('historial.reporte_historial.r_hs')
                    <section id="no-more-tables">
                        <table class="table table-bordered table-striped table-condensed cf">
                            <thead class="cf">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        MASCOTA
                                    </th>
                                    <th>
                                        PROPIETARIO
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
                                        {{ $h->mn }}
                                    </td>
                                    <td>
                                        {{ $h->prn }}
                                        {{ $h->prap }}
                                        {{ $h->pram }}
                                    </td>
                                    <td>
                                        <a class="btn btn-warning btn-xs" href="{{url('/rhistorial', $h->id)}}" type="submit">
                                            <i class="fa fa-pencil-square-o">
                                                Reporte
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
