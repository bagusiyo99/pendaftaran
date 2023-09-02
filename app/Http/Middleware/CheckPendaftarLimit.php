<?php

namespace App\Http\Middleware;

use App\Models\Pendaftaran;
use Closure;
use Illuminate\Http\Request;

class CheckPendaftarLimit
{
    public function handle($request, Closure $next)
    {
        if (Pendaftaran::count() >= 1) {
            return redirect('/full');
        }

        return $next($request);
    }
}
