<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class MakananController extends Controller
{
    public function index()
    {
        $makanan = Makanan::get();
        return view('dashboard',  ['makanan' => $makanan]);
    }

    public function tambah()
    {
        return view('makanan.form');
    }

    public function tampilan()
    {
        $user = User::get();
        return view('explore', compact('user'));
    }

    public function detail($id)
    {
        $user = User::findOrFail($id);
        $makanan = Makanan::all();

        return view('detail', compact('user', 'makanan'));
    }


    public function simpan(Request $request)
    {
        $request->validate([
            'nama_makanan' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi_makanan' => 'required',
        ]);


        $image = $request->file('gambar');
        $imageName = date('Y-m-d') . $image->getClientOriginalName();
        $image->move(public_path('posts'), $imageName);


        $data = [
            'nama_makanan' => $request->nama_makanan,
            'harga' => $request->harga,
            'gambar' => $imageName,
            'deskripsi' => $request->deskripsi_makanan,
        ];

        Makanan::create($data);

        return redirect()->route('makanan.index');
    }

    public function edit($id)
    {
        $makanan = Makanan::findOrFail($id);
        return view('makanan.edit', compact('makanan'));
    }


    public function update($id, Request $request)
    {
        $request->validate([
            'nama_makanan' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi_makanan' => 'required',
        ]);

        $makanan = Makanan::findOrFail($id);

        $image = $request->file('gambar');
        $imageName = date('Y-m-d') . $image->getClientOriginalName();
        $image->move(public_path('posts'), $imageName);

        Storage::delete('public/posts/' . $makanan->gambar);

        $data = [
            'nama_makanan' => $request->nama_makanan,
            'harga' => $request->harga,
            'gambar' => $imageName,
            'deskripsi' => $request->deskripsi_makanan,
        ];

        Makanan::where('id', $id)->update($data);
        return redirect()->route('makanan.index');
    }



    public function hapus($id)
    {
        Makanan::find($id)->delete();
        return redirect()->route('makanan.index');
    }
}
