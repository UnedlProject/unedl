<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Crecimiento;
use App\Financiero;
use App\Indicador;
use App\Proceso;
use App\Puesto;
use App\Error;
use Illuminate\Http\Request;

use App\Http\Requests;

class UpdateController extends Controller
{
    public function viewUpdateCrecimientos(Request $request){
        $puesto = Puesto::orderBy('created_at', 'asc')->get();
        $indicador=Indicador::all();
        $id=$request->query('id');
        $crecimiento=Crecimiento::where('id',$id)->first();
        return view('updates.updateCrecimiento',['crecimiento'=>$crecimiento,'puesto'=>$puesto,'indicador'=>$indicador]);
    }
    public function viewUpdateFinancieros(Request $request){
        $puesto = Puesto::orderBy('created_at', 'asc')->get();
        $indicador=Indicador::all();
        $id=$request->query('id');
        $financiero=Financiero::where('id',$id)->first();
        return view('updates.updateFinanciero',['financiero'=>$financiero,'puesto'=>$puesto,'indicador'=>$indicador]);
    }
    public function viewProcesos(Request $request){
        $puesto = Puesto::orderBy('created_at', 'asc')->get();
        $indicador=Indicador::all();
        $id=$request->query('id');
        $proceso=Proceso::where('id',$id)->first();
        return view('updates.updateProceso',['proceso'=>$proceso,'puesto'=>$puesto,'indicador'=>$indicador]);
    }
    public function viewClientes(Request $request){
        $puesto = Puesto::orderBy('created_at', 'asc')->get();
        $indicador=Indicador::all();
        $id=$request->query('id');
        $cliente=Cliente::where('id',$id)->first();
        return view('updates.updateClientes',['cliente'=>$cliente,'puesto'=>$puesto,'indicador'=>$indicador]);
    }
    public function viewErrores(Request $request){
        $id=$request->query('id');
        $error=Error::where('id',$id)->first();
        return view('updates.updateErrores',['error'=>$error]);
    }
}
