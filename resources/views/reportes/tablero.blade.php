@extends('layouts.app')
@section('content')

<table class="table table-hover" id="tablero">
<thead>
    <tr>
        <th>Objetivo Estrategico</th>
        <th>N° del indicador</th>
        <th>Nombre del indicador</th>
        <th>Proceso al que mide</th>
        <th>Metrica</th>
        <th>Frecuencia de medición</th>
        <th>Enero</th>
        <th>Febrero</th>
        <th>Marzo</th>
        <th>Abril</th>
        <th>Mayo</th>
        <th>Junio</th>
        <th>Julio</th>
        <th>Agosto</th>
        <th>Septiembre</th>
        <th>Octubre</th>
        <th>Noviembre</th>
        <th>Diciembre</th>
        <th>Porcentaje del cumplimiento del indicador</th>
        <th>Porcentaje del cumplimiento del objetivo de calidad</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td rowspan="6">Contribuir al desarrollo sostenible de la sociedad que 
        se refleje en el bienestar de toda la comunidad UNEDL. (Perspectiva financiera/accionista)
        </td>
        <td>1</td>
        <td>Ingresos Reales</td>
        <td>GESTIÓN DE RECURSOS FINANCIEROS</td>
        <td>5%</td>
        <td>SEMESTRAL</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>0.00%</td>
        <td>0.00%</td>
    </tr>
    <tr>
        <td rowspan="2">2</td>
        <td rowspan="2">Egresos reales</td>
        <td>SUMINISTROS</td>
        <td rowspan="2">90</td>
        <td>SEMESTRAL</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>0.00%</td>
        <td>0.00%</td>
    </tr>
    <tr><td>GESTIÓN DE RECURSOS FINANCIEROS</td></tr>
    <tr>
        <td rowspan="2">3</td>
        <td rowspan="2">Remanente real</td>
        <td>SUMINISTROS</td>
        <td>5%</td>
        <td>SEMESTRAL</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>0.00%</td>
        <td>0.00%</td>
    </tr>
    <tr><td>GESTIÓN DE RECURSOS FINANCIEROS</td></tr>
    <tr>
            <td>4</td>
            <td>Acciones con impacto social</td>
            <td>GESTIÓN DE ÉXITO SOSTENIDO</td>
            <td>100%</td>
            <td>SEMESTRAL</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>0.00%</td>
            <td>0.00%</td>
    </tr>
    <tr>
            <td rowspan="6">
             Satisfacer las necesidades educativas de nuestros grupos de interés logrando el desarrollo
             humano y la trascendencia profesional de nuestros egresados (Perspectiva cliente/mercado)   
            </td>
            <td>5</td>
            <td>Consolidación de la matricula de alumnos</td>
            <td>TODOS LOS PROCESOS</td>
            <td>16%</td>
            <td>SEMESTRAL</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>0.00%</td>
            <td>0.00%</td> 
    </tr>
    <tr>
            <td rowspan="3">6</td>
            <td rowspan="3">Índice de retención de alumnos.</td>
            <td>INGRESO</td>
            <td>90%</td>
            <td>CICLO ESCOLAR</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>N/A</td>
            <td>0.00%</td>
            <td>0.00%</td>
    </tr>
    <tr><td>TRAYECTORIA ACADEMICA</td></tr>
    <tr><td>PLANEACIÓN Y GESTIÓN ACADEMICA</td></tr>
</tbody>

</table>

@endsection