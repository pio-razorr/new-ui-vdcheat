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
        return view("login-user");
    }

    function login_user(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $infologin_user = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::guard('web')->attempt($infologin_user)) {
            // Jika autentikasi berhasil
            return redirect('/dashboard');
        } else {
            // Jika autentikasi gagal
            return redirect('login')->withErrors('')->withInput();
        }
    }
    // END USER


    // MEMBER
    function index_member()
    {
        return view("login-member");
    }

    function login_member(Request $request)
    {

        $request->validate([
            'member_id' => 'required'
        ]);

        // $infologin_member = [
        //     'member_id' => $request -> member_id,
        // ];

        $member = Member::where('member_id', $request->member_id)->first();

        if (!$member) {
            // ini kode errornya kalau gagal login
            return redirect('/login-member')->withErrors('')->withInput();
        }

        if (Auth::guard('member')->loginUsingId($member->id)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard-member');
        }
    }
    // END MEMBER


    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
