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
                        Editar: {{$mascota->nombre}}
                    </h4>
                    @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
      {!!Form::model($mascota,['method'=>'PATCH','route'=>['mascota.update', $mascota->idmascota]])!!}
            {{Form::token()}}
                    <section class="panel" id="no-more-tables">
                        <table width="100%">
                            <tr>
                                <td width="15%">
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                PROPIETARIO:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="nombre" type="text" value=" {{ $idp->nombre }} {{ $idp->app }} {{ $idp->pm }}">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                FECHA:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="fecha" type="date" value="{{ $mascota->fecha_registro }}">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="8%">
                                </td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-6 col-sm-6 control-label">
                                                NOMBRE DE LA MASCOTA:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="nombre" type="text" value=" {{ $mascota->nombre }}">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                ESPECIE:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="especie" type="text" value=" {{ $mascota->especie }}">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td rowspan="2" width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                DESCRIPCION:
                                            </label>
                                            <div class="col-sm-12">
                                                <textarea class="form-control" cols="40" name="descripcion" rows="5">{{$mascota->descripcion }}
                                                </textarea>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="8%">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                RAZA:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="raza" type="text" value=" {{ $mascota->raza }}">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                SEXO:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="sexo" type="text" value=" {{ $mascota->sexo }}">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="8%">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td colspan="3">
                                    <center>
                                        <div class="form-group">
                                            <br>
                                                <div class="col-sm-12">
                                                    <button class="btn btn-primary" type="submit">
                                                        Guardar
                                                    </button>
                                                    <a class="btn btn-danger" href="{{url()->previous()}}" type="reset">
                                                        Cancelar
                                                    </a>
                                                </div>
                                            </br>
                                        </div>
                                    </center>
                                </td>
                                <td width="33%">
                                </td>
                                <td width="8%">
                                </td>
                            </tr>
                        </table>
                    </section>
                    {!!Form::close()!!}
                </div>
                <!-- /content-panel -->
            </div>
            <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
    </section>
    <!--/wrapper -->
</section>
<!-- /MAIN CONTENT -->
@endsection
