<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginUserController extends Controller
{
    function index()
    {
        // Menampilkan tampilan login-user.blade.php
        return view("login-user");
    }

    function login(Request $request)
    {
        // Melakukan validasi input yang diterima dari form login
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Mendapatkan informasi pengguna berdasarkan username
        $user = User::where('username', $request->username)->first();

        // Jika pengguna tidak ditemukan, muncul pesan kesalahan
        if (!$user) {
            $errorMessage = 'Username atau password salah.';
            return redirect('/login')->withErrors(['login' => $errorMessage])->withInput();
        }

        // Mendapatkan informasi login dari request
        $infologin_user = [
            'username' => $request->username,
            'password' => $request->password
        ];

        // Jika password salah, munculkan pesan kesalahan
        if (!Auth::guard('web')->attempt($infologin_user)) {
            $errorMessage = 'Username atau password salah.';
            return redirect('/login')->withErrors(['login' => $errorMessage])->withInput();
        }

        // Jika akun dalam status banned, munculkan pesan kesalahan
        if ($user->status == 'banned') {
            $errorMessage = 'Akun telah dibanned.';
            Auth::logout(); // Logout user
            return redirect('/login')->withErrors(['login' => $errorMessage])->withInput();
        }

        // Mengecek apakah akun masih aktif berdasarkan expired_date
        if ($user->expired_date && now() >= $user->expired_date) {
            $errorMessage = 'Akun tidak aktif.';
            Auth::logout(); // Logout user
            return redirect('/login')->withErrors(['login' => $errorMessage])->withInput();
        }

        // Jika autentikasi berhasil, redirect ke dashboard
        session()->flash('login_sukses', 'Login berhasil');
        return redirect('/dashboard');
    }




    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
