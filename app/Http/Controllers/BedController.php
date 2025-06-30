<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use App\Models\SettingBed;
use Illuminate\Http\Request;

class BedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beds = Bed::all();
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
            'name' => 'required|string|max:255',
            'registrasi_number' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Bed::create($request->only(['name', 'registrasi_number', 'brand', 'description']));

        return redirect()->route('beds.index')->with('success', 'Bed created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // (Opsional) Tampilkan detail bed
        $bed = Bed::findOrFail($id);
        return view('bed.show', compact('bed'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bed = Bed::findOrFail($id);

        // Cek apakah building digunakan dalam SettingBed
    $usedInSettingBed = SettingBed::where('bed_id', $id)->exists();

    if ($usedInSettingBed) {
        return redirect()->back()->with('error', 'Data tidak bisa di-edit karena sudah dipakai di Setting Bed.');
    }

        return view('bed.edit', compact('bed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'registrasi_number' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $bed = Bed::findOrFail($id);
        $bed->update($request->only(['name', 'registrasi_number', 'brand', 'description']));

        return redirect()->route('beds.index')->with('success', 'Bed updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bed = Bed::findOrFail($id);

        // Cek apakah building digunakan dalam SettingBed
    $usedInSettingBed = SettingBed::where('bed_id', $id)->exists();

    if ($usedInSettingBed) {
        return redirect()->back()->with('error', 'Data tidak bisa dihapus karena sudah dipakai di Setting Bed.');
    }

        $bed->delete();
        return redirect()->route('beds.index')->with('success', 'Bed deleted successfully.');
    }
}
