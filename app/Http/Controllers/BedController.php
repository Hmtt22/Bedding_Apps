<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use Illuminate\Http\Request;

class BedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beds = Bed::all(); // Ambil semua data bed
        return view('bed.index', compact('beds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bed.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Bed::create($request->all());

        return redirect()->route('beds.index')->with('success', 'Bed created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Ambil data bed berdasarkan ID
        $bed = Bed::findOrFail($id); // Ini akan melempar error 404 jika room tidak ditemukan
        return view('bed.edit', compact('bed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        // Cari data bed berdasarkan ID
        $bed = Bed::findOrFail($id);

        $bed->update($request->all());

        return redirect()->route('beds.index')->with('success', 'Bed updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bed = Bed::findOrFail($id); // Mencari bed berdasarkan ID
        // Menghapus bed berdasarkan ID
        $bed->delete();

        return redirect()->route('beds.index')->with('success', 'Bed deleted successfully.');
    }
}
