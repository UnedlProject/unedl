<?php

namespace App\Http\Middleware;

use Closure;

class MD_admin
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
        if($usuario_actual->role!='admin'){
            return ("No tienes los permisos necesarios");
        }
        return $next($request);

    }
}
