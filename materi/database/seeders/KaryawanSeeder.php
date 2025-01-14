<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Database\Factories\KaryawanFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //membuat data dari model karyawan.
        // Karyawan::create([
        //     // data berdasarkan column.
        //     'nama' => 'Fahmi',
        //     'nik' => '32039485',
        //     'umur' => 20,
        //     'alamat' => 'Jakarta Selatan',
        //     'jabatan' => 'IT Development',
        // ]);

        Karyawan::factory()->count(10)->create();
    }
}
