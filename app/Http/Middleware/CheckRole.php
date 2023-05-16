<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->role !== 'Admin') {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        return $next($request);
    }
}
