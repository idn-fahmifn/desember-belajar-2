<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UmurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // mengambil nilai yang diinputkan
        $umur = $request->session()->get('umur');

        // aturan umur yang diizinkan lanjut.
        // jika lebih 18 tahun
        if($umur >= 18){
            // bisa melanjutkan ke routing yang akan dituju.
            return $next($request);
        }
        
        // jika < 18 tahun, akan diam di halaman form
        return back()->with('gagal', 'Anda belum berumur 18 tahun');

    }
}
