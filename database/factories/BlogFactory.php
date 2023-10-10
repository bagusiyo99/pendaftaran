<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition()
    {
        $judul = $this->faker->sentence();
        $deskripsi = $this->faker->paragraph();
        
        // Path gambar yang diunggah
        // $gambarPath = 'uploads/blog/' . time() . '-' . '.jpg';

        return [
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            // 'gambar' => $gambarPath,
        ];
    }

}
