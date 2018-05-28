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
            Historial
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
                                <td>NOMBRE:</td>
                            </tr>
                            <tr>
                              <td>APELLIDO:</td>
                            </tr>
                            <tr>
                              <td>DIRECCION:</td>
                            </tr>
                            <tr>
                              <td>TELEFONO:</td>
                            </tr>
                          </table>
                          <table class="table table-bordered table-striped table-condensed" width="100%">
                            <tr>
                              <td> <center> DATOS DE LA MASCOTA</center></td>
                            </tr>
                            <tr>
                              <td>NOMBRE:</td>
                            </tr>
                            <tr>
                              <td>RAZA:</td>
                            </tr>
                            <tr>
                              <td>SEXO:</td>
                            </tr>
                            <tr>
                              <td>ESPECIE:</td>
                            </tr>
                          </table>
                          <hr>
                          <table class="table table-bordered table-striped table-condensed" width="100%">
                            <tr>
                              <td colspan="6">
                                <center>HISTORIAL HASTA LA FECHA .....</center>
                              </td>
                            </tr>
                            <tr>
                              <td>FECHA</td>
                              <td>EDAD</td>
                              <td>PESO</td>
                              <td>SERVICIO</td>
                              <td>PRODUCTO</td>
                              <td>OBSERVACION</td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                    <center>
                      <a class="btn btn-primary btn-20" href="{{url('/imprimir')}}">
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
