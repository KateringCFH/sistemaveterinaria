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
            Personal
        </h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <h4>
                        <i class="fa fa-angle-right">
                        </i>
                        Editar: {{$personal->name}}
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
                    {!!Form::model($personal)!!}
                    {{Form::token()}}

                    <section class="form-horizontal style-form">
                      <table class="table table-condensed table-bordered">
                        <tr>
                          <td colspan="2">
                            <h4>
                                <center><label style="text-size: 15px">DATOS PERSONALES</label>
                            </h4>
                          </td>
                          <td>
                            <h4>
                                <center><label>DATOS PARA USUARIO</label>
                            </h4>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre</label>
                                <div class="col-md-12">
                                    <input disabled id="name" type="text" class="form-control" name="name" value="{{ $personal->name }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                          </td>
                          <td>
                            <div class="{{ $errors->has('ci') ? ' has-error' : '' }}">
                                <label for="ci" class="col-md-4 control-label">CI</label>

                                <div class="col-md-12">
                                    <input disabled id="ci" type="text" class="form-control" name="ci" value="{{ $personal->ci }}" required autofocus>

                                    @if ($errors->has('ci'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ci') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                          </td>
                          <td>
                            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Usuario</label>

                                <div class="col-md-12">
                                    <input disabled id="email" type="text" class="form-control" name="email" value="{{ $personal->email }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="{{ $errors->has('app') ? ' has-error' : '' }}">
                                <label for="app" class="col-md-6 control-label">Apellido Paterno</label>

                                <div class="col-md-12">
                                    <input disabled id="app" type="text" class="form-control" name="app" value="{{ $personal->app }}" required autofocus>

                                    @if ($errors->has('app'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('app') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                          </td>
                          <td>
                            <div class="{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                <label for="telefono" class="col-md-4 control-label">Telefono</label>

                                <div class="col-md-12">
                                    <input disabled id="telefono" type="text" class="form-control" name="telefono" value="{{ $personal->telefono }}" required autofocus>

                                    @if ($errors->has('telefono'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('telefono') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                          </td>
                          <td>
                            <div class="{{ $errors->has('cargo') ? ' has-error' : '' }}">
                                <label for="cargo" class="col-md-4 control-label">Cargo</label>
                                <div class="col-md-12">
                                    <select disabled id="cargo" type="text" class="form-control" name="cargo" value="{{ $personal->cargo }}" required autofocus>
                                      <option value="Administrador">
                                          Administrador
                                      </option>
                                      <option selected="" value="Veterinario">
                                          Veterinario
                                      </option>
                                      <option value="Recepcionista">
                                          Recepcionista
                                      </option>
                                    </select>
                                    @if ($errors->has('cargo'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cargo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="{{ $errors->has('apm') ? ' has-error' : '' }}">
                                <label for="apm" class="col-md-5 control-label">Apellido Materno</label>
                                <div class="col-md-12">
                                    <input disabled id="apm" type="text" class="form-control" name="apm" value="{{ $personal->apm }}" required autofocus>

                                    @if ($errors->has('apm'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('apm') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                          </td>
                          <td>
                            <div class="{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                <label for="direccion" class="col-md-4 control-label">Direccion</label>

                                <div class="col-md-12">
                                    <input disabled id="direccion" type="text" class="form-control" name="direccion" value="{{ $personal->direccion }}" required autofocus>

                                    @if ($errors->has('direccion'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('direccion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                          </td>
                          <td>

                          </td>
                        </tr>
                      </table>
                      <center>
                          <div class="form-group">
                              <br>
                                  <div class="col-sm-12">
                                      <!--<button class="btn btn-primary" type="submit">Guardar</button>-->
                                      <a class="btn btn-danger" href="{!! URL::previous() !!}" type="reset">Cancelar</a>
                                  </div>
                              </br>
                          </div>
                      </center>
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
