<?php

namespace Database\Factories;

use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return[
            'nama' => fake()->name(),
            'umur' => random_int('20', '30'),
            'alamat' => 'jakarta',
            'jabatan' => 'HRD',
            'nik' => random_int('000000', '999999')
        ];
    }
}
