<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    // Menampilkan daftar UserLogin
    public function index()
{
    $users = User::all();  // Ambil semua user
    $roles = Role::all();  // Ambil semua role

    $userLogins = UserLogin::paginate(10);

    return view('userlogin.index', compact('users', 'roles', 'userLogins'));
}


    // Menampilkan form untuk membuat UserLogin baru
    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        return view('userlogin.create', compact('users', 'roles'));
    }

    // Menyimpan UserLogin baru
    public function store(Request $request)
    {

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role_id' => 'required|exists:roles,id',
        ]);

        UserLogin::create($request->all());

        return redirect()->route('userlogins.index')->with('success', 'UserLogin created successfully.');
    }

    // Menampilkan detail UserLogin
    public function show($id)
    {
        $userLogin = UserLogin::with(['user', 'role'])->findOrFail($id);
        return view('userlogin.show', compact('userLogin'));
    }

    // Menampilkan form untuk mengedit UserLogin
    public function edit($id)
    {
        $userLogin = UserLogin::findOrFail($id);
        $users = User::all();
        $roles = Role::all();
        return view('userlogin.edit', compact('userLogin', 'users', 'roles'));
    }

    // Memperbarui UserLogin
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role_id' => 'required|exists:roles,id',
        ]);

        $userLogin = UserLogin::findOrFail($id);
        $userLogin->update($request->all());

        return redirect()->route('userlogins.index')->with('success', 'UserLogin updated successfully.');
    }

    // Menghapus UserLogin
    public function destroy($id)
    {
        $userLogin = UserLogin::findOrFail($id);
        $userLogin->delete();

        return redirect()->route('userlogins.index')->with('success', 'UserLogin deleted successfully.');
    }
}
