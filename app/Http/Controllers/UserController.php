<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserLogin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10); // tampilkan 10 akun per halaman

        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'nik' => 'required|string|max:20|unique:users,nik',
            'ktp' => 'required|string|max:20|unique:users,ktp',
            'description' => 'nullable|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Simpan user baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nik' => $request->nik,
            'ktp' => $request->ktp,
            'description' => $request->description,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        // Cek apakah user digunakan dalam SettingBed
    $usedInUserLogin = UserLogin::where('user_id', $id)->exists();

    if ($usedInUserLogin) {
        return redirect()->back()->with('error', 'Data tidak bisa di-edit karena sudah dipakai di User Login.');
    }

        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validasi
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'nik' => 'required|string|max:20|unique:users,nik,' . $id,
            'ktp' => 'required|string|max:20|unique:users,ktp,' . $id,
            'description' => 'nullable|string',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Ambil user berdasarkan ID
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'nik' => $request->nik,
            'ktp' => $request->ktp,
            'description' => $request->description,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $usedInUserLogin = UserLogin::where('user_id', $id)->exists();

    if ($usedInUserLogin) {
        return redirect()->back()->with('error', 'Data tidak bisa dihapus karena sudah dipakai di User Login.');
    }

        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }
}
