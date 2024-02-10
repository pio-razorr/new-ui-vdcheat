<?php

namespace App\Http\Controllers;

use App\Models\HistoryTransaksi;
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

        // Mengambil semua data transaksi dari model HistoryTransaksi
        if ($authUser->role === 'ceo') {
            // Jika pengguna adalah CEO, maka ambil semua data history transaksi.
            $historyTransaksis = HistoryTransaksi::all();
        } else {
            // Jika bukan CEO, maka ambil data history transaksi sesuai ID pengguna yang sedang di autentikasi.
            $historyTransaksis = HistoryTransaksi::where('user_id', $authUser->id)->get();
        }

        // Mengirim data pengguna yang saat ini masuk ($authUser), daftar anggota yang sesuai ($members),
        // dan data history transaksi yang sesuai ($historyTransaksis) ke tampilan 'user.index'.
        // Data ini akan digunakan untuk menampilkan informasi pengguna, daftar anggota, dan history transaksi yang memenuhi kondisi tertentu di tampilan.
        return view('user.index', compact('authUser', 'members', 'historyTransaksis'));
    }


    function kompensasi()
    {
        $authUser = Auth::user();

        return view('user.kompensasi', compact('authUser'));
    }




    // VIEW TUKAR POINT
    function tukar_point()
    {
        $authUser = Auth::user();

        return view('user.tukar-point', compact('authUser'));
    }
    // END VIEW TUKAR POINT

    // PROSES TUKAR POINT
    public function proses_tukar_point(Request $request)
    {
        // Validasi input
        $request->validate([
            'nominal_tukar' => 'required | numeric | min:1',
        ]);

        $authUser = Auth::user();

        // Simpan saldo sebelumnya ke dalam session
        session(['saldo-sebelum' => $authUser->saldo]);

        // Simpan saldo sebelumnya ke dalam session
        session(['nominal-tukar' => $request->input('nominal_tukar')]);

        // Hitung sisa saldo dan update nilai total point
        $nominalTukar = $request->input('nominal_tukar');
        $sisaSaldo = $authUser->saldo + $authUser->point;


        // Periksa apakah pengguna memiliki point sebelum mencoba menukar point
        if ($authUser->point > 0) {
            if ($nominalTukar <= $authUser->point && $nominalTukar > 0) {
                $authUser->saldo += $nominalTukar;
                $authUser->point -= $nominalTukar;
                $authUser->save();

                return redirect('/tukar-point')->with('success', 'Penukaran point berhasil.')->with('success-tukar-point', 'Berhasil tukar point')->with('data', $authUser);
            } else {
                return redirect('/tukar-point')->with('errors', 'Jumlah point yang ingin ditukar tidak valid.');
            }
        } else {
            return redirect('/tukar-point')->with('errors', 'Anda tidak memiliki point untuk ditukar.');
        }
    }
    // END PROSES TUKAR POINT




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
