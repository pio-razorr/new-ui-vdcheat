<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticatedMember
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
        // Periksa apakah pengguna sudah terautentikasi
        if (Auth::guard('member')->check()) {
            return redirect('/dashboard-member');
        }
        return $next($request);
    }
}
