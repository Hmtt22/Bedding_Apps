<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Rahmat Hidayat',
            'email' => 'Rahmathidayat@gmail.com',
            // 'role' => 'super_admin'
            'nik' => '4617823',
            'ktp' => '712738289',
            'description' => 'jiosnsnsdusmd'

        ]);
    }
}
