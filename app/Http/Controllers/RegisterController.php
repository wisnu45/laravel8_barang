<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{
    public function register()
    {
        return view('auth.register', [
            'title' => 'registrasi'
        ]);
    }
    public function regis(request $request)
    {
        $validasi = $request->validate([
            'name' => ['required', 'min:3', 'max:25'],
            'email' => ['required', 'unique:users', 'email:dns'],
            'password' => ['required', 'min:8'],
            'level' => ['required'],
        ]);
        $validasi['password'] = bcrypt($validasi['password']);
        user::create($validasi);
        toast('berhasil membuat akun', 'success');
        return redirect('/login')->with('pesan', 'berhasil membuat akun');
    }
}
