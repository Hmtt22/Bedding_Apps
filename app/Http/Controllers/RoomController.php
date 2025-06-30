<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\SettingBed;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view('room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'capacity' => 'required|integer',
            'room_number' => 'required|string|unique:rooms,room_number|max:50',
        ]);

        Room::create($request->all());

        return redirect()->route('rooms.index')->with('success', 'Room created successfully');

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
    public function edit( $id)
    {
        // Ambil data room berdasarkan ID
        $room = Room::findOrFail($id); // Ini akan melempar error 404 jika room tidak ditemukan

        // Cek apakah room digunakan dalam SettingBed
    $usedInSettingBed = SettingBed::where('room_id', $id)->exists();

    if ($usedInSettingBed) {
        return redirect()->back()->with('error', 'Data tidak bisa di-edit karena sudah dipakai di Setting Bed.');
    }

        return view('room.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'capacity' => 'required|integer',
            'room_number' => 'required|string|max:50|unique:rooms,room_number',
        ]);

         // Cari data room berdasarkan ID
        $room = Room::findOrFail($id);

        // Update data room dengan data dari form
        $room->update($request->all());

        return redirect()->route('rooms.index')->with('success', 'Room updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = Room::findOrFail($id); // Mencari room berdasarkan ID

        $usedInSettingBed = SettingBed::where('room_id', $id)->exists();

    if ($usedInSettingBed) {
        return redirect()->back()->with('error', 'Data tidak bisa dihapus karena sudah dipakai di Setting Bed.');
    }

        // Menghapus room berdasarkan ID
        $room->delete();
        // Mengalihkan kembali ke halaman index dengan pesan sukses
        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully');

    }
}
