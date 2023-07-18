<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\barang;


class adminController extends Controller
{
    public function admin()
    {
        $home = barang::all();
        return view('admin.home', [
            'data' => $home,
            'title' => 'admin',
        ]);
    }
    public function form()
    {
        return view('admin.form', [
            'title' => 'form'
        ]);
    }
    public function store(request $request)
    {
        $file = $request->gambar;
        $filename = $request->nama . '.' . $file->extension();
        $file->move(public_path('img'), $filename);

        $slug = Str::slug($request->nama);
        $data = [
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $filename,
            'deskripsi' => $request->deskripsi,
            'slug' => $slug,
        ];
        barang::create($data);
        return redirect('/admin')->with('pesan', 'berhasil masukan barang');
    }
    public function delete($id)
    {
        $barang = barang::find($id);
        $barang->delete();
    }
}
