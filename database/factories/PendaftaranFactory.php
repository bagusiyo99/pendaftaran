<?php


namespace Database\Factories;

use App\Models\Pendaftaran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pendaftaran>
 */
class PendaftaranFactory extends Factory
{
      protected $model = Pendaftaran::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail,
            'alamat' => $this->faker->address(),
            'telpon' => $this->faker->phoneNumber(),
            'jk' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'pesan' => $this->faker->paragraph(),
        ];
    }
}
