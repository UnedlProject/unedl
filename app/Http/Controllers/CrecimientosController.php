<?php

namespace App\Http\Controllers;

use App\Crecimiento;
use App\Indicador;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Puesto;
use App\Http\Requests\FinancierosRequest;
class CrecimientosController extends Controller
{
    public function index(){
        return view('crecimientos');
    }
    public function getCrecimientos(){
        $crecimientos = Crecimiento::orderBy('created_at','asc')->paginate(5);
        //dd($events);
        return view('ViewCrecimiento',['crecimiento' => $crecimientos]);
    }
    public function getpuestosCrecimientos(){
        $puesto = Puesto::orderBy('created_at', 'asc')->get();
        $indicador=Indicador::all();
        return view('crecimientos', ['puesto' => $puesto,'indicador'=>$indicador]);
    }

    public function updateStatus(Request $request){
        $id=$request->input('id');
        $crecimiento=Crecimiento::where('id',$id)->first();
        $status = $crecimiento->status;
        $crecimiento->status = $status == 'enabled' ? 'disabled' : 'enabled';
        $crecimiento->save();
        return redirect()->back();
    }
    public function createCrecimientos(FinancierosRequest $request){
        $proceso=new Crecimiento();
        $proceso->objetivo=$request['objetivo'];
        $proceso->nombre_indicador=$request['nombre_indicador'];
        $proceso->descripcion_indicador=$request['descripcion_indicador'];
        $proceso->valor_actual=$request['valor_actual'];
        $proceso->meta_cortop=$request['meta_cortop'];
        $proceso->meta_medianop=$request['meta_medianop'];
        $proceso->meta_largop=$request['meta_largop'];
        $proceso->proceso_medir=$request['proceso_medir'];
        $proceso->frecuencia=$request['frecuencia'];
        $proceso->fuente_datos=$request['fuente_datos'];
        $proceso->R_calculo=$request['R_calculo'];
        $proceso->R_calculo1=$request['R_calculo1'];
        $proceso->R_calculo2=$request['R_calculo2'];
        $proceso->R_calculo3=$request['R_calculo3'];
        $proceso->R_analisis=$request['R_analisis'];
        $proceso->R_analisis1=$request['R_analisis1'];
        $proceso->R_analisis2=$request['R_analisis2'];
        $proceso->R_analisis3=$request['R_analisis3'];
        $proceso->R_acciones=$request['R_acciones'];
        $proceso->R_acciones1=$request['R_acciones1'];
        $proceso->R_acciones2=$request['R_acciones2'];
        $proceso->R_acciones3=$request['R_acciones3'];
        $proceso->status='enabled';

        if($proceso->save()){
            $message='se creo correctamente';
            return redirect('crecimientos')->with(['message'=>$message]);
        }
    }
    public function CrecimientoUpdate(Request $request)
    {
        $id=$request->input('id');
        $informacion = Crecimiento::where('id',$id)->first();
        $objetivo = $request->get('objetivo');
        $nombre_indicador = $request->get('nombre_indicador');
        $descripcion = $request->get('descripcion_indicador');
        $valor_actual = $request->get('valor_actual');
        $meta_cortop = $request->get('meta_cortop');
        $meta_medianop = $request->get('meta_medianop');
        $meta_largop = $request->get('meta_largop');
        $proceso_medir=$request->get('proceso_medir');
        $frecuencia=$request->get('frecuencia');
        $fuente_datos=$request->get('fuente_datos');
        $R_calculo = $request->get('R_calculo');
        $R_calculo1=$request->get('R_calculo1');
        $R_calculo2=$request->get('R_calculo2');
        $R_calculo3=$request->get('R_calculo3');
        $R_analisis=$request->get('R_analisis');
        $R_analisis1=$request->get('R_analisis1');
        $R_analisis2=$request->get('R_analisis2');
        $R_analisis3=$request->get('R_analisis3');
        $R_acciones=$request->get('R_acciones');
        $R_acciones1=$request->get('R_acciones1');
        $R_acciones2=$request->get('R_acciones2');
        $R_acciones3=$request->get('R_acciones3');
        if ($objetivo != null) {
            $informacion->objetivo = $objetivo;
        }
        if($nombre_indicador !=null){
            $informacion->nombre_indicador =$nombre_indicador;
        }
        if($descripcion !=null){
            $informacion->descripcion_indicador=$descripcion;
        }
        if($valor_actual !=null){
            $informacion->valor_actual=$valor_actual;
        }
        if($meta_cortop !=null){
            $informacion->meta_cortop=$meta_cortop;
        }
        if($meta_medianop !=null){
            $informacion->meta_medianop=$meta_medianop;
        }
        if($meta_largop !=null){
            $informacion->meta_largop=$meta_largop;
        }
        if($proceso_medir !=null){
            $informacion->proceso_medir=$proceso_medir;
        }
        if($frecuencia !=null){
            $informacion->frecuencia=$frecuencia;
        }
        if($fuente_datos !=null){
            $informacion->fuente_datos=$fuente_datos;
        }
        if($R_calculo !=null){
            $informacion->R_calculo=$R_calculo;
        }
        if($R_calculo1 !=null){
            $informacion->R_calculo1=$R_calculo1;
        }
        if($R_calculo2 !=null){
            $informacion->R_calculo2=$R_calculo2;
        }
        if($R_calculo3 !=null){
            $informacion->R_calculo3=$R_calculo3;
        }
        if($R_analisis !=null){
            $informacion->R_analisis=$R_analisis;
        }
        if($R_analisis1 !=null){
            $informacion->R_analisis1=$R_analisis1;
        }
        if($R_analisis2 !=null){
            $informacion->R_analisis2=$R_analisis2;
        }
        if($R_analisis3 !=null){
            $informacion->R_analisis3=$R_analisis3;
        }
        if($R_acciones !=null){
            $informacion->R_acciones=$R_acciones;
        }
        if($R_acciones1 !=null){
            $informacion->R_acciones1=$R_acciones1;
        }
        if($R_acciones2 !=null){
            $informacion->R_acciones2=$R_acciones2;
        }
        if($R_acciones3 !=null){
            $informacion->R_acciones3=$R_acciones3;
        }
        if (!$informacion->save()) {
            $message = 'la informacion no se pudo actualizar';
        }
        $message = 'la informacion ha sido actualizada';
        return redirect()->back()->with(['message' => $message]);
    }

}
