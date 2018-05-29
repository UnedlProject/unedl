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
                @foreach($financiero as $financieros)
                    <td>{{ $financieros->id}}</td>
                    <td>{{ $financieros->objetivo }}</td>
                    <td>{{$financieros->nombre_indicador}}</td>
                    <td>{{$financieros->descripcion_indicador}}</td>
                    <td>{{$financieros->valor_actual}}</td>
                    <td>{{$financieros->meta_cortop}}</td>
                    <td>{{ $financieros->meta_medianop}}</td>
                    <td>{{ $financieros->meta_largop}}</td>
                    <td>{{ $financieros->proceso_medir}}</td>
                    <td>{{ $financieros->frecuencia}}</td>
                    <td>{{ $financieros->fuente_datos}}</td>
                    <td>{{ $financieros->R_calculo}} {{ $financieros->R_calculo1}} {{ $financieros->R_calculo2}} {{ $financieros->R_calculo3}}</td>
                    <td>{{ $financieros->R_analisis}} {{ $financieros->R_analisis1}} {{ $financieros->R_analisis2}} {{ $financieros->R_analisis3}}</td>
                    <td>{{ $financieros->R_acciones}} {{ $financieros->R_acciones1}} {{ $financieros->R_acciones2}} {{ $financieros->R_acciones3}}</td>
                    <?php if($financieros->status == 'enabled'):?>
                    <td><a class="btn btn-xs btn-success edit" href="{{route('view.update.financiero',['id'=>$financieros->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a class="btn btn-xs btn-danger" href="{{route('update.status.financiero',['id'=>$financieros->id])}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                    <?php else: ?>
                    <td><a class="btn btn-xs btn-danger " href="{{route('update.status.financiero',['id'=>$financieros->id])}}">Habilitar</a></td>
                    <?php
                    endif; ?>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="col-sm-offset-4">{!! $financiero->render() !!}</div>
    </div>

@endsection