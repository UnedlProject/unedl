<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crecimiento extends Model
{
    protected $fillable = [
        'objetivo','nombre_indicador','descripcion_indicador','valor_actual', 'meta_cortop', 'meta_medianop', 'meta_largop',
        'proceso_medir', 'frecuencia', 'fuente_datos','R_calculo', 'R_analisis', 'R_acciones','R_calculo1', 'R_analisis1', 'R_acciones1','R_calculo2', 'R_analisis2', 'R_acciones2','R_calculo3', 'R_analisis3', 'R_acciones3',
    ];
    public function user(){
        $this->belongsTo('App\User');
    }
}
