<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class loginController extends Controller
{
    public function login()
    {
        return view('auth.masuk', [
            'title' => 'login'
        ]);
    }
    public function auth(request $request)
    {
        $authvalidasi = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($authvalidasi)) {
            $request->session()->regenerate();

            Alert::info('login berhasil', 'selamat berbelanja');

            return redirect()->intended('/');
        }
        Alert::warning('login gagal', 'hayo pake akun orang ya');
        return back()->with('gagal', 'login anda gagal!');
    }
    public function logout(request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        Alert::success('logout berhasil', 'terima kasih');
        return redirect('/login');
    }
}
