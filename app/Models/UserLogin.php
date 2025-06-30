<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan nama model (UserLogin -> userlogins)
    protected $table = 'userlogins';

    // Tentukan kolom yang bisa diisi
    protected $fillable = ['user_id', 'role_id'];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Role
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
