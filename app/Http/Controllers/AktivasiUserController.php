<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AktivasiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $authUser = Auth::user();

        // AKTIVASI USER
        $dataUser = [
            "aktivasi" => false,
            "input_username" => null,
            "pesan" => null,
        ];

        if ($request->username) {
            $user = User::where('username', $request->username)->first();

            if ($user) {
                $dataUser = [
                    "aktivasi" => true,
                    "input_username" => $request->username,
                    "pesan" => $user->name . ' | ' . ($user->role == 'resseler' ? 'Resseler' : 'Admin')
                ];
                Alert::success('Username ditemukan.');

            } else {
                $dataUser = [
                    "aktivasi" => true,
                    "input_username" => $request->username,
                    "pesan" => "-"
                ];
                Alert::error('Username tidak ditemukan.');
            }
        }
        // END AKTIVASI USER

        return view("user.aktivasi-user", compact("authUser", "dataUser"));
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
        //
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
    public function update(Request $request)
    {
        $username = $request->username;

        // Temukan pengguna berdasarkan username
        $user = User::where('username', $username)->first();

        // Aktifkan pengguna dengan menetapkan nilai expired_date dan saldo
        $user->expired_date = now()->addMonth();

        // Mengambil waktu sekarang untuk dimasukkan ke kolom created_at
        $currentDateTime = Carbon::now();
        $user['created_at'] = $currentDateTime;

        $user->save();

        return redirect('/aktivasi-user')->with('success', 'Akun berhasil diaktivasi')->with('success-aktivasi-user', 'Akun berhasil diaktivasi')->with('user', $user);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
