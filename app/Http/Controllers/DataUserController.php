<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // Mendapatkan informasi pengguna yang sedang diautentikasi
        $authUser = Auth::user();

        // Inisialisasi variabel untuk menentukan role yang ingin diambil
        $rolesToFetch = ['resseler'];

        // Periksa peran pengguna yang saat ini diautentikasi
        if ($authUser->role == 'admin') {
            // Jika pengguna adalah admin, tambahkan 'resseler' ke roles yang akan diambil
            $rolesToFetch[] = 'resseler';
        } elseif ($authUser->role == 'ceo') {
            // Jika pengguna adalah ceo, tambahkan 'resseler' dan 'admin' ke roles yang akan diambil
            $rolesToFetch = ['resseler', 'admin'];
        }

        // Jika user login sebagai ceo, maka ambil semua data di tabel user
        if (Auth::user()->role == 'ceo') {
            $allUsers = User::where('role', '!=', 'ceo')->get();
        } else {
            // Mengambil semua data pengguna dari tabel 'users' berdasarkan rolesToFetch dan ambil data user berdasarkan created_by nya
            $allUsers = User::whereIn('role', $rolesToFetch)->where('created_by', $authUser->id)->get();
        }

        // Mengembalikan tampilan 'user.data-user' sambil mengirimkan data-data yang diperlukan
        return view('user.data-user', compact('allUsers', 'authUser'));
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
        // Validasi Input
        $request->validate([

            // Memastikan 'name' tidak boleh kosong
            'name' => 'required',
            // Memastikan 'username' tidak boleh kosong
            'username' => 'required',
            // Memastikan 'no_hp' tidak boleh kosong dan harus berupa angka
            'no_hp' => 'required | numeric',
            // Memastikan 'password' tidak boleh kosong
            'password' => 'required',
            // Memastikan 'role' tidak boleh kosong
            'role' => 'required',
        ]);

        // Mengambil waktu sekarang untuk dimasukkan ke kolom created_at
        $currentDateTime = Carbon::now();

        // Membuat array data dari inputan
        $data = [
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'no_hp' => $request->input('no_hp'),
            'password' => $request->input('password'),
            'role' => $request->input('role'),
        ];

        // Jika peran yang dipilih adalah 'admin' atur saldo ke 999999999999
        if ($request->input('role') == 'admin') {
            $data['saldo'] = 999999999999;
            $data['expired_date'] = Carbon::now()->subDay();
        } elseif ($request->input('role') == 'resseler') {
            $data['saldo'] = 0;
            $data['expired_date'] = Carbon::now()->addYear(100);
        }

        $data['created_at'] = $currentDateTime;
        $data['created_by'] = Auth::user()->id;

        // Membuat entri baru dalam tabel User
        User::create($data);

        // Mengarahkan pengguna dengan pesan kesuksesan berdasarkan peran yang diinputkan
        if ($request->input('role') == 'resseler') {
            return redirect('/data-user')->with('success', 'Anda berhasil mendaftarkan akun resseler.')->with('success-pendaftaran', 'Anda berhasil mendaftarkan akun')->with('data', $data);
        } elseif ($request->input('role') == 'admin') {
            return redirect('/data-user')->with('success', 'Anda berhasil mendaftarkan akun admin.')->with('success-pendaftaran', 'Anda berhasil mendaftarkan akun')->with('data', $data);
        }
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
        $data = User::where('id', $id)->first();

        $roleLabel = '';

        if ($data->role == 'resseler' && $data->saldo <= 10000000) {
            $roleLabel = 'Resseler';
        } elseif ($data->role == 'resseler' && $data->saldo >= 10000000) {
            $roleLabel = 'Resseler VIP';
        } elseif ($data->role == 'admin') {
            $roleLabel = 'Admin';
        } elseif ($data->role == 'ceo') {
            $roleLabel = 'CEO';
        }

        $authUser = Auth::user();

        return view('user.ubah-user', compact('authUser', 'roleLabel'))->with('data', $data);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi Input
        $request->validate([
            'name' => 'required',
            // Sesuaikan validasi dengan field lainnya
        ]);

        // Ambil data dari request
        $data = [
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'password' => $request->input('password') ? bcrypt($request->input('password')) : null,
            'no_hp' => $request->input('no_hp'),
            'saldo' => $request->input('saldo'),
        ];

        // Update data ke database
        User::where('id', $id)->update($data);

        return redirect('/ubah-user')->with('success', 'Data user berhasil diubah.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Menghapus pengguna berdasarkan ID
        User::where('id', $id)->delete();

        // Redirect dengan pesan kesuksesan
        return redirect('/data-user')->with('success', 'Berhasil hapus akun');
    }
}
