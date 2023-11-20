<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferSaldoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authUser = Auth::user();

        return view('user.transfer-saldo', compact('authUser'));
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

        // Jika pengguna dengan 'username' tujuan tidak ditemukan, kembalikan dengan pesan kesalahan
        if (!$userTujuan) {
            return redirect('/transfer-saldo')->with('errors', 'Username yang dituju tidak tersedia.')->withInput();
        }

        // Validasi Input
        $request->validate([
            'username' => 'required',
            'saldo' => 'required|numeric|min:50000',
        ], [
            'saldo.min' => 'Nominal transfer saldo minimal Rp. 50.000',
        ]);

        // Validasi tambahan: Jika rol  e adalah admin, CEO, atau reseller dengan saldo di atas 10 juta, kembalikan dengan pesan kesalahan
        if ($userTujuan->role == 'admin') {
            return redirect('/transfer-saldo')->with('warning', 'Transfer saldo tidak diizinkan untuk akun dengan level Admin.')->withInput();
        } elseif ($userTujuan->role == 'ceo') {
            return redirect('/transfer-saldo')->with('warning', 'Transfer saldo tidak diizinkan untuk akun dengan level CEO.')->withInput();
        } elseif ($userTujuan->role == 'resseler' && $userTujuan->saldo > 10000000) {
            return redirect('/transfer-saldo')->with('warning', 'Transfer saldo tidak diizinkan untuk akun dengan level Resseler VIP.')->withInput();
        }

        // Tambahkan saldo ke pengguna tujuan
        $nominalTransfer = $request->input('saldo');
        $userTujuan->saldo += $nominalTransfer;
        $userTujuan->save();

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
