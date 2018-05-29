<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','direccion', 'email', 'password','puesto','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function procesos(){
        return $this->hasMany('App\Proceso');
    }
    public function clientes(){
        return $this->hasMany('App\Cliente');
    }
    public function financieros(){
        return $this->hasMany('App\Financiero');
    }
    public function crecimientos(){
        return $this->hasMany('App\Crecimiento');
    }
    public function errores(){
        return $this->hasMany('App\Error');
    }
    public function academico(){
        return $this->hasMany('App\Organi_academico');
    }
    public function indicador(){
        $this->belongsTo('App\Indicador');
    }
    protected $hidden = [
        'password', 'remember_token',
    ];
}
