<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // Mengambil data anggota yang sedang masuk menggunakan Auth::guard
        $authMember = Auth::guard('member')->user();

        // Ambil tanggal kedaluwarsa dari model member
        $expiredDate = Carbon::parse($authMember->expired_date);

        // Hitung sisa durasi dari sekarang ke tanggal kedaluwarsa
        $currentDateTime = Carbon::now();
        $duration = $currentDateTime->diff($expiredDate);

        // Ekstrak komponen waktu (hari, jam) dari perbedaan
        $days = $duration->days;
        $hours = $duration->h;

        // Format sisa durasi sesuai kebutuhan
        if ($days > 0) {
            $remainingDuration = $days . " Hari " . $hours . " Jam";
        } else {
            $remainingDuration = $hours . " Jam";
        }

        // Menampilkan tampilan view 'member.index' dan mengirim data anggota yang sedang masuk ke view 'member.index'
        return view('member.index', compact('authMember', 'remainingDuration'));
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

    public function update(Request $request, string $id)
    {
        // Melakukan validasi input 'serial' yang diterima dari form
        $request->validate([
            'serial' => 'required',
        ]);

        // Menyiapkan data yang akan diubah
        $data = [
            'serial' => $request->input('serial'),
        ];

        // Mengupdate data member berdasarkan 'id' yang diberikan
        Member::where('id', $id)->update($data);

        // Redirect ke halaman dashboard-member dengan pesan sukses
        return redirect('dashboard-member')->with('success', 'Serial berhasil diubah');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
