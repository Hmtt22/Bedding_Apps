<?php

namespace App\Http\Controllers;

use App\Models\SettingBed;
use App\Models\Building;
use App\Models\Room;
use App\Models\Bed;
use Illuminate\Http\Request;

class SettingBedController extends Controller
{

     // Menampilkan daftar setting beds.

     public function index()
     {
         $settingBeds = SettingBed::with(['building', 'room', 'bed'])->get();
         return view('setting_bed.index', compact('settingBeds'));
     }

    /**
     * Menampilkan form untuk membuat setting bed.
     */
    public function create()
    {
        $buildings = Building::all();
        $rooms = Room::all();
        $beds = Bed::all();
        return view('setting_bed.create', compact('buildings', 'rooms', 'beds'));
    }

    /**
     * Menyimpan setting bed.
     */
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'building_id' => 'required|exists:buildings,id',
        'room_id' => 'required|exists:rooms,id',
        'bed_id' => 'required|exists:beds,id',
    ]);

    // Cek apakah kombinasi building, room, dan bed sudah ada
    $existingRecord = SettingBed::where('building_id', $request->building_id)
                                ->where('room_id', $request->room_id)
                                ->where('bed_id', $request->bed_id)
                                ->first();

    if ($existingRecord) {
        // Jika sudah ada, kembali ke form dengan error message
        return back()->with('error', 'Data sudah ada, silakan masukkan data yang lain.');

    }

    // Simpan data baru jika belum ada
    SettingBed::create([
        'building_id' => $request->building_id,
        'room_id' => $request->room_id,
        'bed_id' => $request->bed_id,
    ]);

    // Redirect ke index dengan pesan sukses
    return redirect()->route('setting_beds.index')->with('success', 'Data berhasil disimpan.');
}




     // Menampilkan halaman edit
     public function edit($id)
     {
         $settingBed = SettingBed::findOrFail($id);
         $buildings = Building::all();
         $rooms = Room::all();
         $beds = Bed::all();
         return view('setting_bed.edit', compact('settingBed', 'buildings', 'rooms', 'beds'));
     }

     // Mengupdate data setting bed
     public function update(Request $request, $id)
     {
         $settingBed = SettingBed::findOrFail($id);
         $settingBed->update([
             'building_id' => $request->building_id,
             'room_id' => $request->room_id,
             'bed_id' => $request->bed_id,
         ]);

         return redirect()->route('setting_beds.index')->with('success', 'Setting Bed berhasil diperbarui!');
     }

      // Menghapus data setting bed
    public function destroy(string $id)
    {
        $settingBed = SettingBed::findOrFail($id);
        $settingBed->delete();

        return redirect()->route('setting_beds.index')->with('success', 'Setting Bed berhasil dihapus!');
    }

}
