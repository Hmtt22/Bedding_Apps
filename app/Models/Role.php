<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'roles'; // Nama tabel (opsional kalau sesuai konvensi)

    protected $fillable = [
        'role',
        'description'
    ]; // Kolom yang bisa diisi secara massal

    public function users()
{
    return $this->belongsToMany(User::class, 'user_x_role');
}


}
