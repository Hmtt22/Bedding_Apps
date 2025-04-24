<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }

    public function create()
    {
        return view('role.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        Role::create([
            'role' => $request->role,
            'description' => $request->description,
        ]);

        return redirect()->route('roles.index')->with('success', 'Role berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('role.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        $role = Role::findOrFail($id);
        $role->update([
            'role' => $request->role,
            'description' => $request->description,
        ]);

        return redirect()->route('roles.index')->with('success', 'Role berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return redirect()->route('roles.index')->with('success', 'Role berhasil dihapus!');
    }
}
