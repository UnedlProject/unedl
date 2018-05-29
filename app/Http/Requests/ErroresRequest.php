<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ErroresRequest extends Request
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
        'salidas_detectadas'=>'required|max:255',
        'salidas_folio'=>'required|max:255',
        'salidas_fecha'=>'required',
        'salidas_descripcion'=>'required|max:1000',
        'salidas_cargo_det'=>'required|max:255',
        'salidas_cargo_com'=>'required|max:255',
        'salidas_area'=>'required|max:255',
        'salidas_correcion',
        'salidas_concesion',
        'salidas_inf',
        'salidas_veri'=>'required|max:255',
        'salidas_seg'=>'required|max:255',
        ];
    }
}
