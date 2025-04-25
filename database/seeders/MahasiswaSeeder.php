<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        Mahasiswa::factory(10)->create();
        // Factory(Mahasiswa::class, 10)->create();

            // DB::table('mahasiswas')->insert([
            // [
            //     'nama' => 'Ahmad Fauzan',
            //     'email' => 'ahmad@example.com',
            //     'no_hp' => '08123456789',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // ]);
    }
}
