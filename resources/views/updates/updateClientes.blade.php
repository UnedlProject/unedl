
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <form action="{{route('update.cliente',['id'=>$cliente->id])}}" role="form" method="post">
                    {{csrf_field()}}
                    @include('includes.messages-block')
                    <h2>Edita Clientes</h2>
                    <div class="form-group {{ $errors->has('objetivo') ? ' has-error' : '' }}">
                        <label for="">Objetivo</label>
                        <input id="objetivo"  value="{{$cliente->objetivo}}" type="text" class="form-control" name="objetivo" placeholder="indica el objetivo">
                        @if ($errors->has('objetivo'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('objetivo') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('nombre_indicador') ? ' has-error' : '' }}">
                        <label for="">Nombre del indicador</label>
                        <select name="nombre_indicador" id="nombre_indicador" class="form-control">
                            <option value="">Selecciona la opcion</option>
                            @foreach($indicador as $indicadores)
                                <option
                                        {{$cliente->nombre_indicador == $indicadores->nombre ? 'selected':''}}
                                        value="{{$indicadores->nombre}}">{{$indicadores->nombre}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('nombre_indicador'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('nombre_indicador') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('descripcion_indicador') ? ' has-error' : '' }}">
                        <label for="">Descripcion del identificador</label>
                        <textarea type="text" class="form-control" name="descripcion_indicador" placeholder="descripcion del indicador" rows="4">{{$cliente->descripcion_indicador}}</textarea>
                        @if($errors->has('descripcion_indicador'))
                            <span class="help-block">
                                <strong>{{$errors->first('descripcion_indicador')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('valor_actual') ? ' has-error' : '' }}">
                        <label for="valor_actual">Valor Actual</label>
                        <input type="text" value="{{$cliente->valor_actual}}" class="form-control" id="valor_actual" name="valor_actual" placeholder="valor actual">

                        @if ($errors->has('valor_actual'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('valor_actual') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('meta_cortop') ? ' has-error' : '' }}">
                        <label for="">Indica la meta a corto plazo</label>
                        <input type="text" value="{{$cliente->meta_cortop}}" class="form-control" name="meta_cortop" placeholder="indica la meta a corto plazo">
                        @if($errors->has('meta_cortop'))
                            <span class="help-block">
                                <strong>{{$errors->first('meta_cortop')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('meta_medianop') ? ' has-error' : '' }}">
                        <label for="">Indica la meta a mediano plazo</label>
                        <input type="text" value="{{$cliente->meta_medianop}}" class="form-control" name="meta_medianop" placeholder="indica la meta a corto plazo">
                        @if($errors->has('meta_medianop'))
                            <span class="help-block">
                                <strong>{{$errors->first('meta_medianop')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('meta_largop') ? ' has-error' : '' }}">
                        <label for="">Indica la meta a largo plazo</label>
                        <input value="{{$cliente->meta_largop}}" type="text" class="form-control" name="meta_largop" placeholder="indica la meta a corto plazo">
                        @if($errors->has('meta_largop'))
                            <span class="help-block">
                                <strong>{{$errors->first('meta_largop')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('proceso_medir') ? 'has-error':''}}">
                        <label for="">Indica el proceso a medir</label>
                        <input type="text" value="{{$cliente->proceso_medir}}" class="form-control" name="proceso_medir" placeholder="indica el proceso a medir">
                        @if($errors->has('proceso_medir'))
                            <span class="help-block">
                                <strong>{{$errors->first('proceso_medir')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('frecuencia') ? 'has-error':''}}" >
                        <label for="">Indica la frecuencia</label>
                        <select class="form-control" id="frecuencia" name="frecuencia">
                            <option
                                    {{ $cliente->frecuencia =='Mensual' ? 'selected': ''  }}
                                    value="Mensual">Mensual</option>
                            <option
                                    {{ $cliente->frecuencia =='Bimestral' ? 'selected': ''  }}
                                    value="Bimestral">Bimestral</option>
                            <option
                                    {{ $cliente->frecuencia == 'Semestral '? 'selected': ''  }}
                                    value="Semestre">Semestral</option>
                            <option
                                    {{ $cliente->frecuencia =='Anual' ? 'selected': ''  }}
                                    value="Anual">Anual</option>
                        </select>
                        @if($errors->has('frecuencia'))
                            <span class="help-block">
                                <strong>{{$errors->first('frecuencia')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('fuente_datos') ? 'has-error':''}}">
                        <label for="">Indica la fuente de datos</label>
                        <input type="text" value="{{$cliente->fuente_datos}}" class="form-control" name="fuente_datos" placeholder="indica la fuente de datos">
                        @if($errors->has('fuente_datos'))
                            <span class="help-block">
                                <strong>{{$errors->first('fuente_datos')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('R_calculo') ? 'has-error':''}}">
                        <label for="">Responsable del calculo</label>
                        <select name="R_calculo" id="R_calculo" class="form-control">
                            <option value="">Selecciona la opcion</option>
                            @foreach($puesto as $puestos)
                                <option
                                        {{$cliente->R_calculo == $puestos->nombre ? 'selected':''}}
                                        value="{{$puestos->nombre}}">{{$puestos->nombre}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('R_calculo'))
                            <span class="help-block">
                                <strong>{{$errors->first('R_calculo')}}</strong>
                            </span>
                        @endif
                    </div>
                    <a class="button" id="show"><span class="glyphicon glyphicon-plus"></span></a>
                    <!--campos opcionales -->
                    <div class="campos">
                        <div class="form-group">
                            <label for="">Responsable del calculo</label>
                            <select name="R_calculo1" id="R_calculo1" class="form-control">
                                <option value="">Selecciona la opcion</option>
                                @foreach($puesto as $puestos)
                                    <option
                                            {{$cliente->R_calculo1 == $puestos->nombre ? 'selected':''}}
                                            value="{{$puestos->nombre}}">{{$puestos->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Responsable del calculo</label>
                            <select name="R_calculo2" id="R_calculo2" class="form-control">
                                <option value="">Selecciona la opcion</option>
                                @foreach($puesto as $puestos)
                                    <option
                                            {{$cliente->R_calculo2 == $puestos->nombre ? 'selected':''}}
                                            value="{{$puestos->nombre}}">{{$puestos->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Responsable del calculo</label>
                            <select name="R_calculo3" id="R_calculo3" class="form-control">
                                <option value="">Selecciona la opcion</option>
                                @foreach($puesto as $puestos)
                                    <option
                                            {{$cliente->R_calculo3 == $puestos->nombre ? 'selected':''}}
                                            value="{{$puestos->nombre}}">{{$puestos->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> <!---fin campos opcionales-->
                    <div class="form-group {{$errors->has('R_analisis') ? 'has-error':''}}">
                        <label for="">Responsable de analisis</label>
                        <select name="R_analisis" id="R_analisis" class="form-control">
                            <option value="">Selecciona la opcion</option>
                            @foreach($puesto as $puestos)
                                <option
                                        {{$cliente->R_analisis == $puestos->nombre ? 'selected':''}}
                                        value="{{$puestos->nombre}}">{{$puestos->nombre}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('R_analisis'))
                            <span class="help-block">
                                <strong>{{$errors->first('R_analisis')}}</strong>
                            </span>
                        @endif
                    </div>
                    <a class="button" id="show1"><span class="glyphicon glyphicon-plus"></span></a>
                    <!-- campos opcionales-->
                    <div class="campos1">
                        <div class="form-group {{$errors->has('R_analisis1') ? 'has-error':''}}">
                            <label for="">Responsable de analisis</label>
                            <select name="R_analisis1" id="R_analisis1" class="form-control">
                                <option value="">Selecciona la opcion</option>
                                @foreach($puesto as $puestos)
                                    <option
                                            {{$cliente->R_analisis1 == $puestos->nombre ? 'selected':''}}
                                            value="{{$puestos->nombre}}">{{$puestos->nombre}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('R_analisis1'))
                                <span class="help-block">
                                <strong>{{$errors->first('R_analisis1')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('R_analisis2') ? 'has-error':''}}">
                            <label for="">Responsable de analisis</label>
                            <select name="R_analisis2" id="R_analisis2" class="form-control">
                                <option value="">Selecciona la opcion</option>
                                @foreach($puesto as $puestos)
                                    <option
                                            {{$cliente->R_analisis2 == $puestos->nombre ? 'selected':''}}
                                            value="{{$puestos->nombre}}">{{$puestos->nombre}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('R_analisis2'))
                                <span class="help-block">
                                <strong>{{$errors->first('R_analisis2')}}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('R_analisis3') ? 'has-error':''}}">
                            <label for="">Responsable de analisis</label>
                            <select name="R_analisis3" id="R_analisis3" class="form-control">
                                <option value="">Selecciona la opcion</option>
                                @foreach($puesto as $puestos)
                                    <option
                                            {{$cliente->R_analisis3 == $puestos->nombre ? 'selected':''}}
                                            value="{{$puestos->nombre}}">{{$puestos->nombre}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('R_analisis3'))
                                <span class="help-block">
                                <strong>{{$errors->first('R_analisis3')}}</strong>
                            </span>
                            @endif
                        </div>
                    </div> <!-- fin de campos opcionales-->
                    <div class="form-group {{$errors->has('R_acciones') ? 'has-error':''}}">
                        <label for="">Responsable de acciones</label>
                        <select name="R_acciones" id="R_acciones" class="form-control">
                            <option value="">Selecciona la opcion</option>
                            @foreach($puesto as $puestos)
                                <option
                                        {{$cliente->R_acciones == $puestos->nombre ? 'selected':''}}
                                        value="{{$puestos->nombre}}">{{$puestos->nombre}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('R_acciones'))
                            <span class="help-block">
                                <strong>{{$errors->first('R_acciones')}}</strong>
                            </span>
                        @endif
                    </div>
                    <a class="button" id="show2"><span class="glyphicon glyphicon-plus"></span></a>
                    <!--campos opcionales -->
                    <div class="campos2">
                        <div class="form-group {{$errors->has('R_acciones1') ? 'has-error':''}}">
                            <label for="">Responsable de acciones</label>
                            <select name="R_acciones1" id="R_acciones1" class="form-control">
                                <option value="">Selecciona la opcion</option>
                                @foreach($puesto as $puestos)
                                    <option
                                            {{$cliente->R_acciones1 == $puestos->nombre ? 'selected':''}}
                                            value="{{$puestos->nombre}}">{{$puestos->nombre}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('R_acciones1'))
                                <span class="help-block">
                                <strong>{{$errors->first('R_acciones1')}}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('R_acciones2') ? 'has-error':''}}">
                            <label for="">Responsable de acciones</label>
                            <select name="R_acciones2" id="R_acciones2" class="form-control">
                                <option value="">Selecciona la opcion</option>
                                @foreach($puesto as $puestos)
                                    <option
                                            {{$cliente->R_acciones2 == $puestos->nombre ? 'selected':''}}
                                            value="{{$puestos->nombre}}">{{$puestos->nombre}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('R_acciones2'))
                                <span class="help-block">
                                <strong>{{$errors->first('R_acciones2')}}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('R_acciones3') ? 'has-error':''}}">
                            <label for="">Responsable de acciones</label>
                            <select name="R_acciones3" id="R_acciones3" class="form-control">
                                <option value="">Selecciona la opcion</option>
                                @foreach($puesto as $puestos)
                                    <option
                                            {{$cliente->R_acciones3 == $puestos->nombre ? 'selected':''}}
                                            value="{{$puestos->nombre}}">{{$puestos->nombre}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('R_acciones3'))
                                <span class="help-block">
                                <strong>{{$errors->first('R_acciones3')}}</strong>
                            </span>
                            @endif
                        </div>
                    </div><!--fin campos opcionales-->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
