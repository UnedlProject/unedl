<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FinancierosRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'objetivo'=>'required|string|max:255'
            ,'nombre_indicador'=>'required|max:255'
            ,'descripcion_indicador'=>'required|max:255'
            ,'valor_actual'=>'required|max:255',
            'meta_cortop'=>'required|max:255',
            'meta_medianop'=>'required|max:255',
            'meta_largop'=>'required|max:255',
            'proceso_medir'=>'string|max:255|required',
            'frecuencia'=>'required',
            'fuente_datos'=>'required',
            'R_calculo'=>'required',
            'R_analisis'=>'required',
            'R_acciones'=>'required',
        ];
    }
}
