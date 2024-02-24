<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginMemberController extends Controller
{
    function index()
    {
        // Menampilkan tampilan login-member.blade.php
        return view('login-member');
    }

    public function login(Request $request)
    {
        // Melakukan validasi input 'member_id' yang diterima dari form
        $request->validate([
            'member_id' => 'required'
        ]);
    
        // Mencari data member berdasarkan 'member_id' dari inputan
        $member = Member::where('member_id', $request->member_id)->first();
    
        if (!$member) {
            // Jika data member tidak ditemukan, redirect kembali ke halaman login dengan pesan kesalahan (jika ada) dan data input sebelumnya
            return redirect('/login-member')->withErrors('Member tidak ditemukan')->withInput();
        }
    
        if (Auth::guard('member')->loginUsingId($member->id)) {
            session()->flash('login_sukses', 'Login berhasil');
            // Jika autentikasi member berhasil, regenerasi session dan redirect ke halaman yang diinginkan (biasanya dashboard-member)
            $request->session()->regenerate();
            return redirect()->intended('/dashboard-member');
        } else {
            // Jika autentikasi gagal, redirect kembali ke halaman login dengan pesan kesalahan dan data input sebelumnya
            return redirect('/login-member')->withErrors('Autentikasi gagal')->withInput();
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('member')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
