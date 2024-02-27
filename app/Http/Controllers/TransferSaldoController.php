<?php

namespace App\Http\Controllers;

use App\Models\HistoryTransferSaldo;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TransferSaldoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $authUser = Auth::user();

    //     return view('user.transfer-saldo', compact('authUser'));
    // }

    public function index(Request $request)
    {
        $dataUser = [
            "username" => null,
            "pesan" => null,
        ];

        if ($request->username) {
            $user = User::where('username', $request->username)->first();

            if ($user) {
                $dataUser = [
                    "username" => $request->username,
                    "pesan" => "$user->name | " . ($user->role == 'resseler' ? 'Resseler' : $user->role)
                ];

                if ($user->role === 'ceo') {
                    Alert::error('Transfer saldo tidak diizinkan untuk akun dengan level CEO.');
                    return redirect('/transfer-saldo');
                } elseif ($user->role === 'admin') {
                    Alert::error('Transfer saldo tidak diizinkan untuk akun dengan level ADMIN.');
                    return redirect('/transfer-saldo');
                } elseif ($user->role === 'resseler_vip') {
                    Alert::error('Transfer saldo tidak diizinkan untuk akun dengan level RESSELER VIP.');
                    return redirect('/transfer-saldo');
                }

                Alert::success('Username ditemukan.');
                session()->flash('success-username', 'Username ditemukan');
            } else {
                $dataUser = [
                    "username" => $request->username,
                    "pesan" => "-"
                ];
                Alert::error('Username tidak ditemukan.');
            }
        }

        $authUser = Auth::user();

        // Pengecekan apakah status akunnya dibanned
        if ($authUser->status == 'banned') {
            $errorMessage = 'Akun telah dibanned.';
            // Jika ya, lakukan logout dan arahkan kembali ke halaman login
            Auth::logout();
            return redirect('/login')->withErrors(['login' => $errorMessage]);
        }

        // Mengambil semua data transaksi dari model HistoryTransaksi
        if ($authUser->role === 'ceo') {
            // Jika pengguna adalah CEO, maka ambil semua data history transaksi.
            $historyTransferSaldos = HistoryTransferSaldo::all();
        } else {
            // Jika bukan CEO, maka ambil data history transaksi sesuai ID pengguna yang sedang di autentikasi.
            $historyTransferSaldos = HistoryTransferSaldo::where('nama', $authUser->name)->get();
        }

        return view('user.transfer-saldo', compact('authUser', 'dataUser', 'historyTransferSaldos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Cari pengguna berdasarkan username
        $userTujuan = User::where('username', $request->input('username'))->first();

        // Validasi Input
        $request->validate([
            'username' => 'required',
            'saldo' => 'required | numeric | min:50000 | max:1000000',
        ], [
            'saldo.min' => 'Minimal transfer saldo adalah 50.000.',
            'saldo.max' => 'Maximal transfer saldo adalah 1 juta.'
        ]);

        // Tambahkan saldo ke pengguna tujuan
        $nominalTransfer = $request->input('saldo');
        $userTujuan->saldo += $nominalTransfer;
        $userTujuan->save();

        // Simpan data transfer ke model history transfer saldo
        HistoryTransferSaldo::create([
            'nama' => Auth::user()->name, // Ganti dengan nama pengguna yang sesuai
            'kepada' => $userTujuan->name,
            'total' => $nominalTransfer,
        ]);

        // Simpan nominal transfer ke dalam sesi untuk ditampilkan di halaman '/transfer-saldo'
        session(['session.nominal-transfer' => $nominalTransfer]);

        // Redirect atau berikan respons dengan pesan sukses
        return redirect('/transfer-saldo')->with('success', 'Saldo berhasil ditransfer.')->with('success-transfer-saldo', 'Saldo berhasil ditransfer')->with('data', $userTujuan);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
