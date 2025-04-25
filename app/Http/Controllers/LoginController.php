<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function loginBackend()
    {
        return view('backend.v_login.login', [
            'judul' => 'Login',
        ]);
    }

    // Menangani login
    public function authenticateBackend(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->status == 0) {
                Auth::logout();
                return back()->with('error', 'User belum aktif');
            }

            $request->session()->regenerate();
            return redirect()->intended(route('backend.beranda'));
        }

        return back()->with('error', 'Login Gagal');
    }

    // Menangani logout
    public function logoutBackend()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect(route('backend.login'));
    }

    // -----------------------------
    // 🆕 Tambahan untuk Registrasi
    // -----------------------------
    // Menampilkan halaman register
    public function registerBackend()
    {
        return view('backend.v_login.register', [
            'judul' => 'Register',
        ]);
    }

    // Menyimpan data registrasi
    public function storeBackend(Request $request)
{
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|unique:user,email',
        'password' => 'required|string|min:6|confirmed',
        'hp' => 'required',
    ]);

    // Menyimpan user baru
    User::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'hp' => $request->hp,
        'role' => '2', // Pastikan ini adalah salah satu dari '0', '1', atau '2'
        'status' => 1,
    ]);
    
    

    return redirect()->route('backend.login')->with('success', 'Berhasil daftar, silakan login.');
}

}