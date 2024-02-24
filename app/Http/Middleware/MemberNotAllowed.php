<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MemberNotAllowed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Periksa apakah pengguna sudah terautentikasi dan memiliki peran 'member'
        if (auth()->guard('member')->check() && auth()->guard('member')->user()->role === 'member') {
            return redirect('/dashboard-member');
        }

        return $next($request);
    }
}
