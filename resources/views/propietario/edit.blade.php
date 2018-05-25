@extends('layouts.administrador')
@section('contenido')
<section id="main-content">
    <section class="wrapper">
        <h3>
            <i class="fa fa-angle-right">
            </i>
            Personal
        </h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <h4>
                        <i class="fa fa-angle-right">
                        </i>
                        Editar: {{$propietario->nombre}}
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
      {!!Form::model($propietario,['method'=>'PATCH','route'=>['propietario.update', $propietario->idpropietario]])!!}
            {{Form::token()}}
                    <section class="panel" id="no-more-tables">
                        <table width="100%">
                            <tr>
                                <td width="8%">
                                </td>
                                <td width="33%">
                                    <br>
                                        <h4>
                                            <center>
                                                DATOS PERSONALES
                                            </center>
                                        </h4>
                                    </br>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                CODIGO RFID:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="rfid" type="text" value="{{$propietario->rfid}}">
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
                                                NOMBRE:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="nombre" type="text" value="{{$propietario->nombre}}">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                CI:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="ci" type="text" value="{{$propietario->ci}}">
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
                                                <input class="form-control" name="ap_paterno" type="text" value="{{$propietario->ap_paterno}}">
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
                                                <input class="form-control" name="telf" type="text" value="{{$propietario->telf}}">
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
                                                <input class="form-control" name="ap_materno" type="text" value="{{$propietario->ap_materno}}">
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
                                                <input class="form-control" name="direccion" type="text" value="{{$propietario->direccion}}">
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
                                <td colspan="2" width="33%">
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
