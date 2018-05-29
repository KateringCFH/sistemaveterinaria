<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
            <title>
                Document
            </title>
            <style>
              h1{
                 text-align: center;
                 text-transform: uppercase;
                 }
              .contenido{
                 font-size: 20px;
                 }
              #primero{
                 background-color: #ccc;
                 }
              #segundo{
                 color:#44a359;
                 }
              #tercero{
                 text-decoration:line-through;
                 }
            </style>
        </meta>
    </head>
    <body>
            <div class="">
                <table border="2" width="100%">
                  <tr>
                      <td rowspan="3">
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
                <br>
                <table border="2" width="100%">
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
                <br>
                <table border="2" width="100%">
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
                <table border="2" width="100%">
                  <tr>
                    <td colspan="6">
                      <center>HISTORIAL HASTA LA FECHA
                      {{$today}}
                    </center>
                    </td>
                  </tr>
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
            </div>
        </hr>
    </body>
</html>
