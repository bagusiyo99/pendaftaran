<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Foto;
use App\Models\Guru;
use App\Models\Informasi;
use App\Models\Jurusan;
use App\Models\Kepsek;
use App\Models\Pendaftaran; // Impor model Pendaftaran
use App\Models\Pesan;
use Database\Factories\BannerFactory;
use Database\Factories\BlogFactory;
use Database\Factories\FotoFactory;
use Database\Factories\GuruFactory;
use Database\Factories\InformasiFactory;
use Database\Factories\JurusanFactory;
use Database\Factories\KepsekFactory;
use Database\Factories\PesanFactory;
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
        Pesan::class => PesanFactory::class,
        Foto::class => FotoFactory::class,
        Banner::class => BannerFactory::class,
        Guru::class => GuruFactory::class,
        Jurusan::class => JurusanFactory::class,
        Kepsek::class => KepsekFactory::class,

    ];
}
