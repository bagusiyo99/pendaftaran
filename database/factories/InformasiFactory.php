<?php

namespace Database\Factories;

use App\Models\Informasi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Informasi>
 */
class InformasiFactory extends Factory
{
      protected $model = Informasi::class;

    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(),
            'deskripsi' => $this->faker->paragraph(),
            // 'gambar' => 'uploads/informasi/' . time() . '-' . '.jpg',
        ];
    }
}
