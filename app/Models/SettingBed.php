<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class SettingBed extends Model
{
    use HasFactory, SoftDeletes; // Menambahkan trait SoftDeletes

    protected $table ="setting_beds";

     // Kolom yang dapat diisi
    protected $fillable = [
        'building_id',
        'room_id',
        'bed_id'];

    // Relasi dengan model Building
    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function bed()
    {
        return $this->belongsTo(Bed::class);
    }
}


