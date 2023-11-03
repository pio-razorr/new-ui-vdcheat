<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authUser = Auth::user();

        $allUsers = User::all();

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

        $request->validate(
            [
                'name' => 'required',
                'username' => 'required',
                'no_hp' => 'required | numeric',
                'password' => 'required',
                'role' => 'required',
            ]
        );

        $data = [
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'no_hp' => $request->input('no_hp'),
            'password' => $request->input('password'),
            'role' => $request->input('role'),
            'saldo' => $request->input('saldo'),
            'transaksi' => $request->input('transaksi'),
            'point' => $request->input('point'),
            'pendapatan' => $request->input('pendapatan'),
        ];

        User::create($data);

        return redirect('/data-user')->with('success', 'Anda telah berhasil mendaftarkan akun resseler.');
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
        User::where('id', $id)->delete();

        return redirect('/data-user')->with('success', 'Berhasil hapus data resseler');
    }
}
