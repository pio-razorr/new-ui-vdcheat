<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authUser = Auth::user();

        $testimonis = Testimoni::all();

        return view('user.data-testimoni', compact('authUser', 'testimonis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authUser = Auth::user();

        return view('user.tambah-testimoni', compact('authUser'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'filepond' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi' => 'required'
        ], [
            'filepond.max' => 'Gambar terlalu besar.'
        ]);

        //upload image
        $image = $request->file('filepond');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Testimoni::create([
            'image' => $image->hashName(),
            'deskripsi' => $request->deskripsi
        ]);

        //redirect to index
        return redirect('data-testimoni')->with('success', 'Berhasil tambah testimoni.')->withInput();
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

        $testimoni = Testimoni::findOrFail($id);

        return view('user.ubah-testimoni', compact('authUser', 'testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate form
        $this->validate($request, [
            'filepond' => 'image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi' => 'required'
        ], [
            'filepond.max' => 'Gambar terlalu besar.'
        ]);

        //get post by ID
        $post = Testimoni::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('filepond')) {

            //upload new image
            $image = $request->file('filepond');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image if exists
            if ($post->image) {
                Storage::delete('public/posts/' . $post->image);
            }

            //update post with new image
            $post->update([
                'image' => $image->hashName(),
                'deskripsi' => $request->deskripsi,
            ]);
        } else {

            //update post without image
            $post->update([
                'deskripsi' => $request->deskripsi,
            ]);
        }

        //redirect to index
        return redirect('data-testimoni')->with(['success' => 'Data Berhasil Diubah!']);
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get post by ID
        $post = Testimoni::findOrFail($id);

        //delete image
        Storage::delete('public/posts/' . $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect('data-testimoni')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
