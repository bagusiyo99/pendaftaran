<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Informasi;
use App\Models\Pendaftaran; // Impor model Pendaftaran
use Database\Factories\BlogFactory;
use Database\Factories\InformasiFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        // Siswa::factory(300)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
    
    // Tentukan properti $factories di luar metode run
    protected $factories = [
        Pendaftaran::class => PendaftaranFactory::class,
        Blog::class => BlogFactory::class,
        Informasi::class => InformasiFactory::class,

    ];
}
