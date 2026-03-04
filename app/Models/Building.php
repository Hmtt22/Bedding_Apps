<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Building extends Model
{
    use HasFactory, SoftDeletes; // Menggunakan SoftDeletes
    protected $table ="buildings";

    protected $fillable = [
        'name',
        'address',
        'description',
        'jumlah_lantai'
    ];

    // Relasi ke SettingBed
    public function settingBeds()
    {
        return $this->hasMany(SettingBed::class, 'building_id');
    }

    public function getFormattedIdAttribute()
{
    return 'B' . str_pad($this->id, 3, '0', STR_PAD_LEFT);
}
}
