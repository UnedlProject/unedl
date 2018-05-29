<?php

namespace App\Http\Controllers;

use App\Error;
use Illuminate\Http\Request;
use DateTime;
use App\Http\Requests;
use App\Http\Requests\ErroresRequest;
class ErroresController extends Controller
{
    public function index(){
        return view('salidas');
    }
    public function getSalidas(){
        $salida = Error::orderBy('created_at','asc')->paginate(5);
    
        return view('ViewSalida',['salidas' => $salida]);
    }
    public function createErrores(ErroresRequest $request){
        $proceso=new Error();
        $proceso->salidas_detectadas=$request['salidas_detectadas'];
        $proceso->salidas_folio=$request['salidas_folio'];
        $proceso->salidas_fecha=$request['salidas_fecha'];
        $proceso->salidas_descripcion=$request['salidas_descripcion'];
        $proceso->salidas_cargo_det=$request['salidas_cargo_det'];
        $proceso->salidas_cargo_com=$request['salidas_cargo_com'];
        $proceso->salidas_area=$request['salidas_area'];
        $proceso->salidas_correcion=$request['salidas_correcion'];
        $proceso->salidas_concesion=$request['salidas_concesion'];
        $proceso->salidas_inf=$request['salidas_inf'];
        $proceso->salidas_veri=$request['salidas_veri'];
        $proceso->salidas_seg=$request['salidas_seg'];
        $proceso->status='enabled';
        $proceso->ciclo=$request['ciclo'];
        if($proceso->save()){
            $message='se creo correctamente';
            return redirect('salidas')->with(['message'=>$message]);
        }
    }
    public function updateStatus(Request $request){
        $id=$request->input('id');
        $error=Error::where('id',$id)->first();
        $status = $error->status;
        $error->status = $status == 'enabled' ? 'disabled' : 'enabled';
        $error->save();
        return redirect()->back();
    }
    public function UpdateErrores(Request $request){
        $id=$request->input('id');
        $informacion=Error::where('id',$id)->first();
        $salidas_detectadas=$request->get('salidas_detectadas');
        $salidas_folio=$request->get('salidas_folio');
        $salidas_fecha=$request->get('salidas_fecha');
        $salidas_descripcion=$request->get('salidas_descripcion');
        $salidas_cargo_det=$request->get('salidas_cargo_det');
        $salidas_cargo_com=$request->get('salidas_cargo_com');
        $salidas_area=$request->get('salidas_area');
        $salidas_correcion=$request->get('salidas_correcion');
        $salidas_concesion=$request->get('salidas_concesion');
        $salidas_inf=$request->get('salidas_inf');
        $salidas_veri=$request->get('salidas_veri');
        $salidas_seg=$request->get('salidas_seg');
        $ciclo=$request->get('ciclo');
        if($salidas_detectadas !=null){
            $informacion->salidas_detectadas=$salidas_detectadas;
        }
        if($salidas_folio !=null){
            $informacion->salidas_folio=$salidas_folio;
        }
        if($salidas_fecha !=null){
            $informacion->salidas_fecha=$salidas_fecha;
        }
        if($salidas_descripcion !=null){
            $informacion->salidas_descripcion=$salidas_descripcion;
        }
        if($salidas_cargo_det !=null){
            $informacion->salidas_cargo_det=$salidas_cargo_det;
        }
        if($salidas_cargo_com !=null){
            $informacion->salidas_cargo_com=$salidas_cargo_com;
        }
        if($salidas_area !=null){
            $informacion->salidas_area=$salidas_area;
        }
        if($salidas_correcion !=null){
            $informacion->salidas_correcion=$salidas_correcion;
        }
        if($salidas_concesion !=null){
        $informacion->salidas_concesion=$salidas_concesion;
        }
        if($salidas_inf !=null){
        $informacion->salidas_inf=$salidas_inf;
        }
        if($salidas_veri !=null){
        $informacion->salidas_veri=$salidas_veri;
        }
        if($salidas_seg !=null){
        $informacion->salidas_seg=$salidas_seg;
        }
        if($ciclo !=null){
        $informacion->ciclo=$ciclo;
        }
        if(!$informacion->save()){
         $message = 'la informacion no se pudo actualizar';
        }
        $message = 'la informacion ha sido actualizada';
        return redirect()->back()->with(['message' => $message]);
        }
}
