<?php

namespace App\Http\Controllers;

use App\Models\StatusGame;
use Auth;
use Illuminate\Http\Request;

class StatusGameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authUser = Auth::user();

        $game = StatusGame::all();

        return view('user.data-status-game', compact('authUser', 'game'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authUser = Auth::user();

        return view('user.tambah-status-game', compact('authUser'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_game' => 'required',
            'status' => 'required'
        ]);

        //create post
        StatusGame::create([
            'nama_game' => $request->nama_game,
            'status' => $request->status
        ]);

        //redirect to index
        return redirect('data-status-game')->with('success', 'Berhasil tambah status game.');
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
        $authUser = Auth::user();

        $game = StatusGame::findOrFail($id);

        return view ('user.ubah-status-game', compact('authUser', 'game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate form
        $this->validate($request, [
            'nama_game' => 'required',
            'status' => 'required'
        ]);

        $game = StatusGame::findOrFail($id);

        //update post
        $game->update([
            'nama_game' => $request->nama_game,
            'status' => $request->status,
        ]);

        //redirect to index
        return redirect('data-status-game')->with('success', 'Berhasil edit status game.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get post by ID
        $post = StatusGame::findOrFail($id);

        //delete post
        $post->delete();

        //redirect to index
        return redirect('data-status-game')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
