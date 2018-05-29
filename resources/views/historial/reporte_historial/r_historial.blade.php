<?php
$c= Auth::user()->
cargo;
?>
@extends('layouts.'.$c)
@section('contenido')
<section id="main-content">
    <section class="wrapper">
        <h3>
            <i class="fa fa-angle-right">
            </i>
            Historial de {{$m->nombre}}
            <hr>
            {{-- Historial de {{$d}} --}}
        </h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <section class="unseen"><center>
                    <table border="0" width="90%">
                      <tr>
                        <td>
                          <table class="table table-bordered table-striped table-condensed" width="100%">
                            <tr>
                                <td rowspan="3" width="20%">
                                    <h5>
                                        LOGO
                                    </h5>
                                </td>
                                <td>
                                  VETERINARIA
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    DIRECCION:
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    TELEFONO:
                                </td>
                            </tr>
                          </table>
                          <table class="table table-bordered table-striped table-condensed" width="100%">
                            <tr>
                              <td> <center> DATOS DEL PROPIETARIO</center></td>
                            </tr>
                            <tr>
                                <td>
                                  NOMBRE COMPLETO:
                                  {{$p->nombre}}
                                  {{$p->app}}
                                  {{$p->apm}}
                              </td>
                            </tr>
                            <tr>
                              <td>
                                DIRECCION:
                                {{$p->direccion}}
                              </td>
                            </tr>
                            <tr>
                              <td>
                                TELEFONO:
                                {{$p->telefono}}
                              </td>
                            </tr>
                          </table>
                          <table class="table table-bordered table-striped table-condensed" width="100%">
                            <tr>
                              <td> <center> DATOS DE LA MASCOTA</center></td>
                            </tr>
                            <tr>
                              <td>
                                NOMBRE:
                                {{$m->nombre}}
                              </td>
                            </tr>
                            <tr>
                              <td>
                                RAZA:
                                {{$m->raza}}
                              </td>
                            </tr>
                            <tr>
                              <td>
                                SEXO:
                                {{$m->sexo}}
                              </td>
                            </tr>
                            <tr>
                              <td>
                                ESPECIE:
                                {{$m->especie}}
                              </td>
                            </tr>
                          </table>
                          <hr>
                          <table class="table table-bordered table-striped table-condensed" width="100%">
                            <tr>
                              <td colspan="6">
                                <center>HISTORIAL HASTA LA FECHA .....</center>
                              </td>
                            </tr>
                          </table>
                          <table class="table table-bordered table-striped table-condensed" width="100%">
                            <thead class="cf">
                                <tr>
                                    <th>
                                        FECHA
                                    </th>
                                    <th>
                                        EDAD
                                    </th>
                                    <th>
                                        PESO
                                    </th>
                                    <th>
                                        SERVICIO
                                    </th>
                                    <th>
                                        PRODUCTO
                                    </th>
                                    <th>
                                        OBSERVACION
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($d as $h)
                            <tbody>
                                <tr>
                                    <td>
                                        {{$h->fecha}}
                                    </td>
                                    <td>
                                        {{$h->edad}}
                                    </td>
                                    <td>
                                        {{$h->peso}}
                                    </td>
                                    <td>
                                        {{$h->servicio}}
                                    </td>
                                    <td>
                                        {{$h->producto}}
                                    </td>
                                    <td>
                                        {{$h->observacion}}
                                    </td>
                                </tr>
                            </tbody>

                            @endforeach
                          </table>
                        </td>
                      </tr>
                    </table>
                    <center>
                      <a class="btn btn-primary btn-20" href="{{url('/imprimir', $m->id_mascota)}}">
                        <i class="fa fa-plus">
                            Descargar PDF
                        </i>
                      </a>
                    </center>
                  </section>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
