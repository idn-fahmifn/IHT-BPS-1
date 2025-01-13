<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $umur = $request->session()->get('umur');

        // jika umur < 18 tahun, maka tidak diizinkan melanjutkan ke route selanjutnya.

        if($umur <= 18)
        {
            // arahakan kembali ke form jika umur <= 18 tahun.
            return redirect()->route('form')->with('gagal', 'Umur anda belum cukup');
        }

        // teruskan ke route selanjutnya.
        return $next($request);
    }
}
