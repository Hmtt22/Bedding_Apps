<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;


class AuthController extends Controller
{

      // Menampilkan form login
      public function showLoginForm()
      {
          return view('auth.login'); // Sesuaikan dengan path ke tampilan login
      }

    // Menangani proses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Mencoba login
        if (Auth::attempt($credentials, $request->remember)) {
            // Jika login sukses, redirect ke halaman utama
            return redirect()->intended('/');
        }

         // Jika gagal, kembalikan ke form login dengan pesan error
         return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegisterForm()
    {
         // Menangani proses registrasi
         return view('auth.register'); // Menampilkan tampilan form registrasi
    }

    public function register(Request $request)
{
    // Validasi input dari pengguna
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
    ]);

    try {
        // Jika validasi berhasil, simpan data pengguna ke database
        $user = new User();
        $user->first_name = $validatedData['first_name'];
        $user->email = $validatedData['email'];
        // Pastikan password di-hash dengan benar
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        Log::info('User created successfully:', ['user' => $user]);

        // Setelah itu, login otomatis
        Auth::login($user);

        // Redirect ke halaman utama setelah berhasil registrasi
        return redirect()->route('login.form')->with('success', 'Account created successfully!');
    } catch (\Exception $e) {
        // Tangani jika terjadi error
        return back()->withErrors(['error' => 'Something went wrong. Please try again.']);
    }

}

     // Method untuk logout
     public function logout(Request $request)
     {
         Auth::logout();  // Melakukan logout
         $request->session()->invalidate();  // Menghapus sesi pengguna
         $request->session()->regenerateToken();  // Menyegarkan token CSRF

         return redirect('/login');  // Arahkan pengguna ke halaman login setelah logout
     }

}
