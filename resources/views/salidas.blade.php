@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <form action="{{route('create.error')}}" method="post">
                    {{csrf_field()}}
                    <h2>Salidas no conformes</h2>
                    @include('includes.messages-block')
                    <div class="form-group {{ $errors->has('salidas_detectadas') ? ' has-error' : '' }}">
                        <label for="">Salida no conforme detectada</label>
                        <input id="salidas_detectadas" type="text" class="form-control" name="salidas_detectadas" placeholder="indica la salida no conforme">
                        @if(($errors->has('salidas_detectadas')))
                            <span class="help-block">
                                        <strong>{{ $errors->first('salidas_detectadas') }}</strong>
                                    </span>
                       @endif
                    </div>
                    <div class="form-group {{ $errors->has('salidas_folio') ? ' has-error' : '' }}">
                        <label for="">numero de documento o folio</label>
                        <input type="text" class="form-control" id="salidas_folio" name="salidas_folio" placeholder="numero de folio">
                        @if(($errors->has('salidas_folio')))
                            <span class="help-block">
                                        <strong>{{ $errors->first('salidas_folio') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('salidas_fecha') ? ' has-error' : '' }}">
                        <label for="">Fecha</label>
                        <input type='text' name="salidas_fecha" class="form-control" id='salidas_fecha' placeholder="indica la fecha">
                        @if(($errors->has('salidas_fecha')))
                            <span class="help-block">
                                        <strong>{{ $errors->first('salidas_fecha') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('salidas_descripcion') ? ' has-error' : '' }}">
                        <label for="">Descripcion de la salida no conforme</label>
                        <textarea id="salidas_descripcion" type="text" name="salidas_descripcion" class="form-control" placeholder="describe la salida no conforme" rows="4"></textarea>
                        @if(($errors->has('salidas_descripcion')))
                            <span class="help-block">
                                        <strong>{{ $errors->first('salidas_descripcion') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('salidas_cargo_det') ? ' has-error' : '' }}">
                        <label for="">Cargo que detecta la salida no conforme</label>
                        <input type="text" id="salidas_cargo_det" class="form-control" name="salidas_cargo_det" placeholder="indica el cargo que detecta la salida no conforme">
                        @if(($errors->has('salidas_cargo_det')))
                            <span class="help-block">
                                        <strong>{{ $errors->first('salidas_cargo_det') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('salidas_cargo_com') ? ' has-error' : '' }}">
                        <label for="">Cargo a quien detecta la salida no conforme</label>
                        <input type="text" id="salidas_cargo_com" class="form-control" name="salidas_cargo_com" placeholder="indica a quien se le detecta la salida no conforme">
                        @if(($errors->has('salidas_cargo_com')))
                            <span class="help-block">
                                        <strong>{{ $errors->first('salidas_cargo_com') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('salidas_area') ? ' has-error' : '' }}">
                        <label for="">Area o programa donde se detecta</label>
                        <input type="text" id="salidas_area" class="form-control" name="salidas_area" placeholder="indica el area o programa donde se detecta">
                        @if(($errors->has('salidas_area')))
                            <span class="help-block">
                                        <strong>{{ $errors->first('salidas_area') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Acciones para atender</label>
                        <div class="checkbox">
                            <label><input type="checkbox" name="salidas_correcion" value="Correccion">Correccion</label>
                            <label><input type="checkbox" name="salidas_concesion" value="Concesion">Concesion</label>
                            <label><input type="checkbox" name="salidas_inf" value="Informar al cliente">Informar al cliente</label>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('salidas_veri') ? ' has-error' : '' }}">
                        <label for="">Indica quien la verifica</label>
                        <input type="text" id="salidas_veri" class="form-control" name="salidas_veri" placeholder="indica la verificacion">
                        @if(($errors->has('salidas_veri')))
                            <span class="help-block">
                                        <strong>{{ $errors->first('salidas_veri') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('salidas_seg') ? ' has-error' : '' }}">
                        <label for="">Indica el seguimiento</label>
                        <input type="text" id="salidas_seg" class="form-control" name="salidas_seg" placeholder="indica la el seguimiento">
                        @if(($errors->has('salidas_seg')))
                            <span class="help-block">
                                        <strong>{{ $errors->first('salidas_seg') }}</strong>
                                    </span>
                        @endif
                    </div>
                     <div class="form-group {{$errors->has('ciclo') ? 'has-error':''}}" >
                        <label for="">Indica el semestre</label>
                        <select class="form-control" id="ciclo" name="ciclo">
                            <option value="">Selecciona la opcion</option>
                            <option value="Semestre A">Semestre A</option>
                            <option value="Semestre B">Semestre B</option>
                        </select>
                        @if($errors->has('ciclo'))
                            <span class="help-block">
                                <strong>{{$errors->first('ciclo')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    </div>
    <style>

    </style>
@endsection
