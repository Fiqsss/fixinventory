<?php

namespace Database\Factories;

use App\Models\Kedatangan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataBarang>
 */
class DataBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'namabarang' => Kedatangan::factory(),
            'qty' => Kedatangan::factory(),
        ];
    }
}
