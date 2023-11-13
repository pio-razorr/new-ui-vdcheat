<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Hash;

class DashboardController extends Controller
{
    function index()
    {
        // Mengambil informasi pengguna yang saat ini masuk (diotorisasi)
        $authUser = Auth::user();

        // Mendapatkan waktu saat ini dengan menggunakan Carbon untuk manajemen tanggal dan waktu yang lebih baik
        $now = Carbon::now();

        // Mencari anggota (members) berdasarkan dua kondisi:
        // 1. Field 'created_by' dalam tabel Member sama dengan ID pengguna yang saat ini masuk.
        // 2. Field 'expired_date' lebih besar dari waktu saat ini.
        $members = Member::where('created_by', $authUser->id)
            ->where("expired_date", '>', $now)
            ->get();

        // Mengirim data pengguna yang saat ini masuk ($authUser) dan daftar anggota yang sesuai ($members) ke tampilan 'user.index'.
        // Data ini akan digunakan untuk menampilkan informasi pengguna dan daftar anggota yang memenuhi kondisi tertentu di tampilan.
        return view('user.index', compact('authUser', 'members'));

    }

    function kompensasi()
    {
        $authUser = Auth::user();

        return view('user.kompensasi', compact('authUser'));
    }

    function tukar_point()
    {
        $authUser = Auth::user();

        return view('user.tukar-point', compact('authUser'));
    }

    function redeem_voucher()
    {
        $authUser = Auth::user();

        return view('user.redeem-voucher', compact('authUser'));
    }




    // VIEW GANTI PASSWORD
    public function ganti_password()
    {
        $authUser = Auth::user();

        return view('user.ganti-password', compact('authUser'));
    }
    // END VIEW GANTI PASSWORD

    // PROSES GANTI PASSWORD
    public function proses_ganti_password(Request $request)
    {
        // Cek password lama
        if (!Hash::check($request->password_lama, auth()->user()->password)) {
            return back()->with('errors', 'Password lama anda tidak sesuai dengan yang sekarang.')->withInput();
        }

        // Cek password baru dan ulangi password baru
        if ($request->password_baru != $request->ulangi_password_baru) {
            return back()->with('errors', 'Password baru dan ulangi password baru tidak sesuai.')->withInput();
        }

        auth()->user()->update([
            'password' => Hash::make($request->password_baru)
        ]);

        return back()->with('success', 'Anda telah berhasil merubah password.');
    }
    // END PROSES GANTI PASSWORD
}
