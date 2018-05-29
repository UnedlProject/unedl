<?php

namespace App\Http\Middleware;

use Closure;

class MD_estudiante
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $usuario_actual=\Auth::users();
        if($usuario_actual->role!='estudiante'){
            return ("No tienes los permisos necesarios");
        }
        return $next($request);
    }
}
