<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory, SoftDeletes; // Menggunakan SoftDeletes
    protected $table ="rooms";

    protected $fillable = [
        'name',
        'description',
        'capacity',
        'room_number',

    ];


    public function getFormattedIdAttribute()
    {
        return 'R' . str_pad($this->id, 3, '0', STR_PAD_LEFT);
    }
}
