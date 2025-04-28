<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penyewaan>
 */
class PenyewaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_penyewa' => $this->faker->name,
            'nama_alat' => $this->faker->word,
            'tanggal_sewa' => $this->faker->date,
            'tanggal_kembali' => $this->faker->date,
            'jumlah_unit' => $this->faker->numberBetween(1, 10),
            'harga_per_hari' => $this->faker->numberBetween(10000, 50000),
            'status' => $this->faker->randomElement(['dipinjam', 'dikembalikan', 'terlambat']),
        ];
    }
}
