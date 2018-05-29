<?php

namespace App\Http\Controllers;

use App\Puesto;
use Illuminate\Http\Request;

use App\Http\Requests;

class PuestosController extends Controller
{
    public function create(Request $request){
        $puesto=new Puesto();
        $puesto->nombre=$request['nombre'];
        if($puesto->save()){
            $message='se creo correctamente';
            return redirect('/createPuesto')->with(['message'=>$message]);
        }
}
}
