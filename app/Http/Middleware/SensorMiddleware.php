<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SensorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
// app/Http/Middleware/SensorMiddleware.php

public function handle($request, Closure $next)
{
    $content = $request->input('nama'); // Ganti 'komentar' dengan nama input yang sesuai

    // Daftar kata-kata kotor
    $kataKotor = ['bodoh', 'goblok', 'stupid'];

    // Sensor kata-kata kotor
    foreach ($kataKotor as $kata) {
        $content = str_ireplace($kata, '***', $content);
    }

    // Set konten yang sudah disensor kembali ke permintaan
    $request->merge(['nama' => $content]);

    return $next($request);
}

}
