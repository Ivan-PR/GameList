<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next)
    {
        $rol = Auth::user()->roles->first()->name; // Obtener el nombre del primer rol del usuario
        if ($request->user() && $rol !== "Admin") {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        return $next($request);
    }
}
