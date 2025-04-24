<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{

    public function index()
    {
         // Mengambil semua data building dari database
         $buildings = Building::all();

         // Mengirim data ke view
         return view('building.index', compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('building.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'required|string',
            'jumlah_lantai' => 'required|integer|min:1',
        ]);

        Building::create([
            'name' => $request->name,
            'address' => $request->address,
            'description' => $request->description,
            'jumlah_lantai' => $request->jumlah_lantai,
        ]);

        return redirect()->route('buildings.index')->with('success', 'Building created successfully.');

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
        $building = Building::findOrFail($id); // Ambil data building berdasarkan ID
        return view('building.edit', compact('building')); // Kirimkan data building ke view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'required|string',
            'jumlah_lantai' => 'required|integer|min:1',
        ]);

        $building = Building::findOrFail($id); // Cari data building berdasarkan ID
        $building->update([ // Perbarui data building
            'name' => $request->name,
            'address' => $request->address,
            'description' => $request->description,
            'jumlah_lantai' => $request->jumlah_lantai,
        ]);

          // Redirect ke halaman index setelah berhasil diperbarui
          return redirect()->route('buildings.index')->with('success', 'Building updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $building = Building::findOrFail($id); // Mencari building berdasarkan ID

        // Hapus building
        $building->delete();

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('buildings.index')->with('success', 'Building deleted successfully!');

    }
}
