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
            'name' => 'rahmat hidayat',
            'email' => 'rahmathidayat@gmail.com',
            // 'role' => 'super_admin'
            'nik' => '843203',
            'ktp' => '4328973',
            'description' => 'hdsafkdshoe'

        ]);
    }
}
