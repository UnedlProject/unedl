@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Salida no conforme detectada</th>
                <th>numero de documento o folio</th>
                <th>Fecha</th>
                <th>Descripcion de la salida no conforme</th>
                <th>Cargo que detecta la salida no conforme</th>
                <th>Cargo a quien detecta la salida no conforme</th>
                <th>Area o programa donde se detecta</th>
                <th>Correccion</th>
                <th>Concesion</th>
                <th>Informar al cliente</th>
                <th>Indica quien la verifica</th>
                <th>Indica el seguimiento</th>
                <th>Ciclo</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($salidas as $salida)
                    <td>{{ $salida->id}}</td>
                    <td>{{ $salida->salidas_detectadas }}</td>
                    <td>{{$salida->salidas_folio}}</td>
                    <td>{{$salida->salidas_fecha}}</td>
                    <td>{{$salida->salidas_descripcion}}</td>
                    <td>{{$salida->salidas_cargo_det}}</td>
                    <td>{{ $salida->salidas_cargo_com}}</td>
                    <td>{{ $salida->salidas_area}}</td>
                    <td>{{ $salida->salidas_correcion}}</td>
                    <td>{{ $salida->salidas_concesion}}</td>
                    <td>{{ $salida->salidas_inf}}</td>
                    <td>{{ $salida->salidas_veri}}</td>
                    <td>{{ $salida->salidas_seg}}</td>
                    <td>{{$salida->ciclo}}</td>
                    <?php if($salida->status == 'enabled'):?>
                    <td><a class="btn btn-xs btn-success edit" href="{{route('view.update.error',['id'=>$salida->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a class="btn btn-xs btn-danger" href="{{route('update.status.error',['id'=>$salida->id])}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                    <?php else: ?>
                    <td><a class="btn btn-xs btn-danger " href="{{route('update.status.error',['id'=>$salida->id])}}">Habilitar</a></td>
                    <?php
                    endif; ?>
            </tr>
            @endforeach
            </tbody>
        </table>
    <div class="col-sm-offset-4">{!! $salidas->render() !!}</div>
    </div>
@endsection