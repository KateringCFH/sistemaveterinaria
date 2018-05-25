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
                        Registrar nuevo mascota
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
      {!!Form::open(array('url'=>'administrador/mascota','method'=>'POST','autocomplete'=>'off'))!!}
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
                                                <select class="form-control" name="propietario">
                                                    @foreach ($propietario as $p)
                                                    <option value="{{$p->idpropietario}}">
                                                        {{$p->idpropietario}} .-
                                                        {{$p->nombre}}
                                                        {{$p->ap_paterno}}
                                                        {{$p->ap_materno}}
                                                    </option>
                                                    @endforeach
                                                </select>
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
                                                <input class="form-control" data-format="yyyy-MM-dd" name="fecha" type="date">
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
                                                <input class="form-control" name="nombre" type="text">
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
                                                <input class="form-control" name="especie" type="text">
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
                                                <textarea class="form-control" cols="40" name="descripcion" rows="5">
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
                                                <input class="form-control" name="raza" type="text">
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
                                                <input class="form-control" name="sexo" type="text">
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
            </div>
        </div>
    </section>
</section>
@endsection
