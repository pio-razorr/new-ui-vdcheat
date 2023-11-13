<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    // USER
    function index_user()
    {
        // Menampilkan tampilan login-user.blade.php
        return view("login-user");
    }

    function login_user(Request $request)
    {
        // Melakukan validasi input yang diterima dari form login
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $infologin_user = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::guard('web')->attempt($infologin_user)) {
            // Jika autentikasi berhasil, redirect ke dashboard
            return redirect('/dashboard');
        } else {
            // Jika autentikasi gagal, redirect kembali ke halaman login dengan pesan kesalahan dan data input sebelumnya
            return redirect('login')->withErrors('')->withInput();
        }
    }
    // END USER


    // MEMBER
    function index_member()
    {
        // Menampilkan tampilan login-member.blade.php
        return view("login-member");
    }

    function login_member(Request $request)
    {
        // Melakukan validasi input 'member_id' yang diterima dari form
        $request->validate([
            'member_id' => 'required'
        ]);

        // Mencari data member berdasarkan 'member_id' dari inputan
        $member = Member::where('member_id', $request->member_id)->first();

        if (!$member) {
            // Jika data member tidak ditemukan, redirect kembali ke halaman login dengan pesan kesalahan (jika ada) dan data input sebelumnya
            return redirect('/login-member')->withErrors('')->withInput();
        }

        if (Auth::guard('member')->loginUsingId($member->id)) {
            // Jika autentikasi member berhasil, regenerasi session dan redirect ke halaman yang diinginkan (biasanya dashboard-member)
            $request->session()->regenerate();
            return redirect()->intended('/dashboard-member');
        }
    }
    // END MEMBER


    public function logout()
    {
        // Melakukan proses logout menggunakan Auth::logout()
        Auth::logout();

        // Mengarahkan pengguna kembali ke halaman login
        return redirect('/login');
    }
}
