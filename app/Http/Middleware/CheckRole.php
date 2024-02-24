<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Pastikan pengguna sudah login
        if (!Auth::check()) {
            return redirect('404');
            // return redirect('/login')->with('error', 'You must be logged in to access this page.');
        }

        // Dapatkan peran pengguna
        $userRole = Auth::user()->role;

        // Jika peran pengguna bukan termasuk yang diizinkan, return redirect ke 404
        if (!in_array($userRole, $roles)) {
            return redirect('404');
        }

        // Jika peran pengguna diizinkan, lanjutkan dengan request
        return $next($request);
    }
}
