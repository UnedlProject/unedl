<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    protected $table = 'errores';
    public function user(){
        $this->belongsTo('App\User');
    }
}
