<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckMemberRole
{
    public function handle(Request $request, Closure $next)
    {
        // Pastikan pengguna adalah member
        if (Auth::guard('member')->check() && Auth::guard('member')->user() instanceof \App\Models\Member) {
            return $next($request);
        }
        
        if (!$request->is('login-member')) {
            return redirect(404);
        }

        // Jika bukan member, kembalikan response tidak diizinkan
        return redirect('/login-member')->with('error', 'You must be a member to access this page.');
    }



}
