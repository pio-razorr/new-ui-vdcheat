<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserNotAllowed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Periksa apakah pengguna sudah terautentikasi dan memiliki salah satu peran yang diizinkan
        $allowedRoles = ['resseler', 'resseler_vip', 'admin', 'ceo'];

        if (auth()->guard('web')->check() && in_array(auth()->guard('web')->user()->role, $allowedRoles)) {
            return back();
        }

        return $next($request);
    }
}
