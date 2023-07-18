<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\pembelian;
use App\Models\checkout;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use mysqli;
use RealRashid\SweetAlert\Facades\Alert;


class barangController extends Controller
{
    public function index()
    {
        $barang = barang::latest();
        if (request('cari')) {
            $barang->where('nama', 'like', '%' . request('cari') . '%');
        }
        return view('user.home', [
            'data' => $barang->get(),
            'title' => 'home',
            'head' => 'barang'
        ]);
    }
    public function detail(barang $barang)
    {
        return view('user.detail', [
            'title' => 'detail',
            'detail' => $barang
        ]);
    }

    public function beli(pembelian $pembelian, $id)
    {

        $user_id = Auth::user()->id;

        // return pembelian::where('barang_id', '=', $id)->get();
        $cek = $pembelian::where('barang_id', $id)->where('user_id', $user_id)->first();
        if (empty($cek)) {
            $pembelian->user_id = $user_id;
            $pembelian->jumlah_beli = request()->jumlah;
            $pembelian->barang_id = $id;
            $pembelian->save();
        } else {
            $pembelian = pembelian::where('barang_id', $id)->where('user_id', $user_id)->first();
            $pembelian->jumlah_beli = $pembelian->jumlah_beli + 1;
            $pembelian->update();
        }
        Alert::toast('barang berhasil di keranjang', 'info');

        return redirect('/');
    }
    public function hasil(pembelian $pembelian)
    {
        $user = Auth::user()->id;
        $beli = $pembelian::where('user_id', $user)->get();


        return view('user.hasil', [
            'title' => 'pembelian',
        ], compact(['beli',]));
    }
    public function hapus($id)
    {
        Alert::success('data berhasil di hapus');
        $keranjang = pembelian::find($id);
        $keranjang->delete();
        return back();
    }
    public function checkout($id)
    {
        $user_id = Auth::user()->id;
        $checkout = new checkout;
        $checkout->user_id = $user_id;
        $checkout->barang_id = $id;
        $checkout->jumlah_barang = request()->jumlah_barang;
        $checkout->total_barang = request()->subtotal;
        $checkout->save();
        $keranjang = pembelian::find($id);
        $keranjang->delete();

        Alert::success('pembayaran berhasil');
        return redirect('/');
    }
    public function history()
    {
        $user = Auth::user()->id;
        $beli = checkout::where('user_id', $user)->get();


        return view('user.history', [
            'title' => 'history',
        ], compact(['beli',]));
    }
}
