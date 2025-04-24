<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bed extends Model
{
    use HasFactory, SoftDeletes; // Menggunakan SoftDeletes
    protected $table ="beds";

    protected $fillable = [
        'name',
        'description'

    ];

    public function getFormattedIdAttribute()
    {
        return 'K' . str_pad($this->id, 3, '0', STR_PAD_LEFT);
    }
}
