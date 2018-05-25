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
                        Registrar nueva historia
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
      {!!Form::open(array('url'=>'administrador/historial','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
                    <section class="panel" id="no-more-tables">
                        <table width="100%">
                            <tr>
                                <td>
                                </td>
                                <td colspan="2" width="33%">
                                    <br>
                                        <h4>
                                            <center>
                                                DATOS PERSONALES
                                            </center>
                                        </h4>
                                    </br>
                                </td>
                                <td width="33%">
                                    <br>
                                        <h4>
                                            <center>
                                                DATOS PARA USUARIO
                                            </center>
                                        </h4>
                                    </br>
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
                                                PROPIETARIO:
                                            </label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name="propietario">
                                                    <option value="1">
                                                        ADMINISTRADOR
                                                    </option>
                                                    <option selected="" value="2">
                                                        VETERINARIO
                                                    </option>
                                                    <option value="3">
                                                        RECEPCIONISTA
                                                    </option>
                                                </select>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                MASCOTA:
                                            </label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name="mascota">
                                                    <option value="1">
                                                        ADMINISTRADOR
                                                    </option>
                                                    <option selected="" value="2">
                                                        VETERINARIO
                                                    </option>
                                                    <option value="3">
                                                        RECEPCIONISTA
                                                    </option>
                                                </select>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                USUARIO:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="usuario" type="text">
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
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                AP. PATERNO:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="ap_paterno" type="text">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                TELEFONO:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="telf" type="text">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                PASSWORD:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="pass" type="text">
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
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                AP. MATERNO:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="ap_materno" type="text">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                DIRECCION:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="direccion" type="text">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                CARGO:
                                            </label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name="cargo">
                                                    <option value="1">
                                                        ADMINISTRADOR
                                                    </option>
                                                    <option selected="" value="2">
                                                        VETERINARIO
                                                    </option>
                                                    <option value="3">
                                                        RECEPCIONISTA
                                                    </option>
                                                </select>
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
                                </td>
                                <td width="33%">
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
