<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authUser = Auth::user();

        if (Auth::user()->role == "ceo") {
            $members = Member::all();
        } else {
            // Ambil data member berdasarkan created_by nya
            $members = Member::where('created_by', $authUser->id)->get();
        }

        return view('user.data-member', compact('members', 'authUser'));
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
        return view('user.ubah-serial', compact(''));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Member::where('id', $id)->first();

        $authUser = Auth::user();

        return view('user.ubah-serial', compact('authUser'))->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi Input
        $request->validate([
            'serial' => 'required',
            // Memastikan 'serial' tidak boleh kosong
        ]);

        $data = [
            'serial' => $request->input('serial'),
        ];

        Member::where('id', $id)->update($data);

        return redirect('/data-member')->with('success', 'Serial berhasil dirubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Menghapus pengguna berdasarkan ID
        Member::where('id', $id)->delete();

        // Redirect dengan pesan kesuksesan
        return redirect('/data-member')->with('success', 'Member berhasil dihapus.');
    }
}
