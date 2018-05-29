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
                @foreach($crecimiento as $crecimientos)
                    <td>{{ $crecimientos->id}}</td>
                    <td>{{ $crecimientos->objetivo }}</td>
                    <td>{{$crecimientos->nombre_indicador}}</td>
                    <td>{{$crecimientos->descripcion_indicador}}</td>
                    <td>{{$crecimientos->valor_actual}}</td>
                    <td>{{$crecimientos->meta_cortop}}</td>
                    <td>{{ $crecimientos->meta_medianop}}</td>
                    <td>{{ $crecimientos->meta_largop}}</td>
                    <td>{{ $crecimientos->proceso_medir}}</td>
                    <td>{{ $crecimientos->frecuencia}}</td>
                    <td>{{ $crecimientos->fuente_datos}}</td>
                    <td>{{ $crecimientos->R_calculo}} {{ $crecimientos->R_calculo1}} {{ $crecimientos->R_calculo2}} {{ $crecimientos->R_calculo3}}</td>
                    <td>{{ $crecimientos->R_analisis}} {{ $crecimientos->R_analisis1}} {{ $crecimientos->R_analisis2}} {{ $crecimientos->R_analisis3}}</td>
                    <td>{{ $crecimientos->R_acciones}} {{ $crecimientos->R_acciones1}} {{ $crecimientos->R_acciones2}} {{ $crecimientos->R_acciones3}}</td>
                    <?php if($crecimientos->status == 'enabled'):?>
                        <td><a class="btn btn-xs btn-success edit" href="{{route('view.update',['id'=>$crecimientos->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                        <td><a class="btn btn-xs btn-danger" href="{{route('update.status',['id'=>$crecimientos->id])}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                    <?php else: ?>
                    <td><a class="btn btn-xs btn-danger" href="{{route('update.status',['id'=>$crecimientos->id])}}">Habilitar</a></td>
                    <?php
                    endif; ?>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="col-sm-offset-4">{!! $crecimiento->render() !!}</div>
    </div>

@endsection