@extends('layouts.app')
<?php
include(__DIR__.'/../../../resources/selects.php');
?>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" id="color-panel">Registrar</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">Selecciona la dirección</label>
                            <div class="col-md-6">
                                <select name="direccion" id="direccion" class="form-control">
                                    <option value="">Selecciona la opcion</option>
                                    @foreach($direcciones as $direccion =>$dir)
                                        <option value="{{$direccion}}">{{$dir}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electronico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('puesto') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="col-md-4 control-label">Selecciona tu puesto</label>
                        <div class="col-md-6">
                                <select name="puesto" id="puesto" class="form-control">
                                    <option value="">Selecciona la opcion</option>
                                    @foreach($puestos as $puesto =>$pues)
                                        <option value="{{$puesto}}">{{$pues}}</option>
                                    @endforeach
                                </select>
                            @if ($errors->has('puesto'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('puesto') }}</strong>
                                    </span>
                            @endif
                        </div>
                        </div>
                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label for="role" class="col-md-4 control-label">Registrarme como</label>
                            <div class="col-md-6">
                                <div class="select">
                                    <select class="form-control" id="role" name="role">
                                        <option disabled selected>Selecciona una opción</option>
                                        <option value="Usuario">Usuario</option>
                                        <option value="Responsable de calculo">Responsable de calculo</option>                                       
                                        <option value="Administrador">Administrador</option>
                                    </select>
                                </div>
                                @if ($errors->has('role'))
                                    <small class="help-block">{{ $errors->first('role') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }} " id="code" style="display: none">
                            <label for="codigo" class="col-md-4 control-label">Codigo</label>
                            <div class="col-md-6">
                                <input id="codigo" type="text" class="form-control" name="codigo" value="{{ old('codigo') }}" >

                                @if ($errors->has('codigo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codigo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

/*<script src="js/scripts.js">
</script>*/
@endsection
