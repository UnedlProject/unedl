@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <table class="table table-hover">
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
                @foreach($home as $homes)
                    <td>{{ $homes->id}}</td>
                    <td>{{ $homes->Objetivo }}</td>
                    <td>{{$homes->nombre_indicador}}</td>
                    <td>{{$homes->descripcion_indicador}}</td>
                    <td>{{$homes->valor_actual}}</td>
                    <td>{{$homes->meta_cortop}}</td>
                    <td>{{ $homes->meta_medianop}}</td>
                    <td>{{ $homes->meta_largop}}</td>
                    <td>{{ $homes->proceso_medir}}</td>
                    <td>{{ $homes->frecuencia}}</td>
                    <td>{{ $homes->fuente_datos}}</td>
                    <td>{{ $homes->R_calculo}} {{ $homes->R_calculo1}} {{ $homes->R_calculo2}} {{ $homes->R_calculo3}}</td>
                    <td>{{ $homes->R_analisis}} {{ $homes->R_analisis1}} {{ $homes->R_analisis2}} {{ $homes->R_analisis3}}</td>
                    <td>{{ $homes->R_acciones}} {{ $homes->R_acciones1}} {{ $homes->R_acciones2}} {{ $homes->R_acciones3}}</td>
                    <?php if($homes->status == 'enabled'):?>
                    <td><a class="btn btn-xs btn-success edit" href="{{route('view.update.proceso',['id'=>$homes->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a class="btn btn-xs btn-danger" href="{{route('update.status.proceso',['id'=>$homes->id])}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                    <?php else: ?>
                    <td><a class="btn btn-xs btn-danger " href="{{route('update.status.proceso',['id'=>$homes->id])}}">Habilitar</a></td>
                    <?php
                    endif; ?>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="col-sm-offset-4">{!! $home->render() !!}</div>
    </div>
@endsection