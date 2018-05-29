@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <table class="table table-hover" id="cliente">
            <thead>
            <tr>
                <th>Id</th>
                <th>Objetivo</th>
                <th>Nombre del identificador</th>
                <th>Descripcion del identificador</th>
                <th>Valor Actual</th>
                <th>Indica la meta a corto plazo</th>
                <th>Indica la meta a mediano plazo</th>
                <th>Indica la meta a largo plazo</th>
                <th>Indica el proceso a medir</th>
                <th>Indica la frecuencia</th>
                <th>Indica la fuente de datos</th>
                <th>Responsable del calculo</th>
                <th>Responsable de analisis</th>
                <th>Responsable de acciones</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($clientes as $cliente)
                    <td>{{ $cliente->id}}</td>
                    <td>{{ $cliente->objetivo }}</td>
                    <td>{{$cliente->nombre_indicador}}</td>
                    <td>{{$cliente->descripcion_indicador}}</td>
                    <td>{{$cliente->valor_actual}}</td>
                    <td>{{$cliente->meta_cortop}}</td>
                    <td>{{ $cliente->meta_medianop}}</td>
                    <td>{{ $cliente->meta_largop}}</td>
                    <td>{{ $cliente->proceso_medir}}</td>
                    <td>{{ $cliente->frecuencia}}</td>
                    <td>{{ $cliente->fuente_datos}}</td>
                    <td>{{ $cliente->R_calculo}} {{ $cliente->R_calculo1}} {{ $cliente->R_calculo2}} {{ $cliente->R_calculo3}}</td>
                    <td>{{ $cliente->R_analisis}}</td>
                    <td>{{ $cliente->R_acciones}}</td>
                    <?php if($cliente->status == 'enabled'):?>
                    <td><a class="btn btn-xs btn-success edit" href="{{route('view.update.cliente',['id'=>$cliente->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a class="btn btn-xs btn-danger" href="{{route('update.status.cliente',['id'=>$cliente->id])}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                    <?php else: ?>
                    <td><a class="btn btn-xs btn-danger" href="{{route('update.status.cliente',['id'=>$cliente->id])}}">Habilitar</a></td>
                    <?php
                    endif; ?>
            </tr>
            @endforeach
            </tbody>
        </table><div class="col-sm-offset-4">{!! $clientes->render() !!}</div>
    </div>
   @endsection